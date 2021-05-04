<?php


namespace App\Services;


use App\Models\Allotment;
use App\Models\Grade;
use App\Models\Param;
use App\Models\School;
use App\Models\SchoolType;

class Moe
{
    private $school;

    // vars used in join closures
    private $allotProgCode;


    public function __construct(School $school)
    {
        $this->school = $school;
    }


    public function getTeacherMoe($membershipData)
    {
        if ($this->useOverrideDivisor($this->school->school_type_id)) {
            $field = 'moe_divisor_override1';
        } else {
            $field = 'moe_divisor';
        }

        $param = $this->getParmNum('Teacher MOE Multiplier');

        return $this->getMoe($membershipData, $field, $param);
    }


    public function getAllotmentMoe($code) {
        $this->allotProgCode = $code;
        $allotment = Allotment::where('school_id', $this->school->id)
            ->join('allotment_types', function ($join) {
                $join->on('allotments.allotment_type_id', '=', 'allotment_types.id')
                    ->where('allotment_types.allotment_prog_code', $this->allotProgCode);
            })->first();


        if(!isset($allotment->moe)) {
            return '0.00';
        }
        return $allotment->moe;
    }


    private function getMoe($membershipData, $field, $param)
    {
        $sum = 0;

        foreach ($membershipData as $membership) {
            if ($membership['id'] == null) {
                continue;
            }
            $divisorRecord = Grade::find($membership['id']);
            $divisor = floatval($divisorRecord->$field);

            if ($divisor > 0) {
                $sum += $membership['studentcount'] / $divisor;
            }
        }

        $intSum = round(intval($sum), 0);

        return $intSum * $param;
    }


    public function getAssistantMoe($membershipData) {
        if($this->school->school_year < 2016) {
            return $this->getOldTAMoe($membershipData);
        }

        $sum = 0;
        foreach ($membershipData as $membership) {
            switch ($membership['grade']) {
                case 'K':
                    $sum += $membership['studentcount'] / 21 / 3 * 2;
                    break;
                case '01':
                case '02':
                    $sum += $membership['studentcount'] / 21 / 2;
                    break;
                case '03':
                    $sum += $membership['studentcount'] / 21 / 3;
                    break;
                default:
                    break;
            }
        }

//        return floor($sum) * 9.3;
        return round($sum,0) * 9.3;
    }


    private function useOverrideDivisor()
    {
        $override = SchoolType::where('id', $this->school->school_type_id)->first();
        if ($override->override1 == 'Y') {
            return true; // 'grades.moe_divisor_override1';
        }
        return false; // 'grades.moe_divisor';
    }


    private function getParmNum($parmName)
    {
        $parmNum = Param::where('school_year', $this->school->school_year)
            ->where('parm_name', $parmName)
            ->first();
        if (isset($parmNum->parm_num)) {
            return $parmNum->parm_num;
        };
        return 0;
    }


    private function getOldTAMoe($membershipData)
    {
        if ($this->useOverrideDivisor($this->school->school_type_id)) {
            $field = 'ta_divisor_override1';
        } else {
            $field = 'ta_divisor';
        }

        $param = $this->getParmNum('TA MOE Multiplier');

        return $this->getMoe($membershipData, $field, $param);
    }

}

