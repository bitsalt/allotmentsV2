<?php


namespace App\Services;


use App\Models\Allotment;
use App\Models\School;

class NonSalaryAllotments
{

    private $school;
    private $dataSet;
    private $allotments;



    public function __construct(School $school)
    {
        $this->school = $school;
    }


    public function getAllotments()
    {
        $allotments = Allotment::select('categories.category_name', 'allotment_types.data_link',
            'allotment_types.allotment_prog_code', 'allotment_types.allotment_prog_desc',
			'allotments.moe', 'allotments.conversions', 'allotments.carryover', 'allotments.comments')
            ->join('allotment_types', 'allotments.allotment_type_id', '=', 'allotment_types.id')
            ->join('categories', function ($join) {
                $join->on('allotment_types.category_id', '=', 'categories.category_id')
                    ->where('categories.salary_nonsalary_ind', 'N');
            })
            ->where('allotments.school_id', $this->school->id)
            ->orderBy('categories.display_order')
            ->orderBy('allotment_types.allotment_prog_code')
            ->get()->toArray();

        $returnData = [];
        foreach ($allotments as $allotment) {
            if ($allotment['moe'] == 0 && $allotment['conversions'] == 0
                && $allotment['carryover'] == 0 && $allotment['comments'] == '') {
                continue;
            }

            // ensure values are set to proper 'zero dollars' amount
            $amounts = ['moe', 'conversions', 'carryover'];
            foreach ($amounts as $amount) {
                if ($allotment[$amount] == 0) {
                    $allotment[$amount] = '0.00';
                }
            }

            $returnData[] = $allotment;
        }

        // save for further use
        $this->allotments = $returnData;

        return $returnData;
    }


    public function getCategoryTotals()
    {
        if (empty($this->allotments)) {
            $this->getAllotments();
        }

        $totals = [
            'total' => [
                'moe' => 0,
                'conversions' => 0,
                'carryover' => 0,
                'net' => 0
            ],
        ];

        foreach ($this->allotments as $allotment) {
            if (!isset($totals[$allotment['category_name']])) {
                $totals[$allotment['category_name']] = [
                    'moe' => 0,
                    'conversions' => 0,
                    'carryover' => 0,
                    'net' => 0
                ];
            }
            $totals[$allotment['category_name']]['moe'] += $allotment['moe'];
            $totals[$allotment['category_name']]['conversions'] += $allotment['conversions'];
            $totals[$allotment['category_name']]['carryover'] += $allotment['carryover'];
            $totals[$allotment['category_name']]['net'] += $allotment['moe']
                + $allotment['conversions']
                + $allotment['carryover'];

            $totals['total']['moe'] += $allotment['moe'];
            $totals['total']['conversions'] += $allotment['conversions'];
            $totals['total']['carryover'] += $allotment['carryover'];
            $totals['total']['net'] += $allotment['moe']
                + $allotment['conversions']
                + $allotment['carryover'];

        }

        return $totals;
    }


    public function prepareDataSet()
    {
        $this->dataSet = [
            'schoolId' => $this->school->id,
            'schoolName' => $this->school->school_name,
            'schoolNum' => $this->school->school,
            'nonsalaryStudentCount' => $this->getFinalDayStudentCount(),
        ];
    }


    public function getFinalDayStudentCount()
    {
        $allot = new AllotmentCalculations($this->school);
        return $allot->getLastDayStudentTotal();
    }


    private function appendToDataSet($key, $value)
    {
        $this->dataSet[$key] = $value;
    }
}
