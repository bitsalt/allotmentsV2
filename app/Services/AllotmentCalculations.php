<?php


namespace App\Services;


use App\Models\School;
use App\Models\SchoolGrade;
use App\Models\SchoolYear;

class AllotmentCalculations
{

    private $school;
    private $displayYear;
    private $dataSet;
    private $moe;
    private $scheduleAssistance;


    public function __construct(School $school)
    {
        $this->school = $school;
        $this->moe = new Moe($this->school);
        $this->scheduleAssistance = new ScheduleAssistanceHours($this->school);
    }

    public function getTableHeaderData()
    {
        $this->displayYear = SchoolYear::select('display')
            ->where('school_year', $this->school->school_year)
            ->first();

        $this->prepareDataSet();

        // part of the header
        $tLinks = new TeacherLinks($this->school->school_year);
        $links = $tLinks->getTeacherLinks();
        foreach ($links as $key => $value) {
            $this->appendToDataSet($key, $value);
        }

        $gradesList = new GradesList($this->school->id, $this->school->school_year);
        $this->appendToDataSet('schoolGrades', $gradesList->getGradesList());
    }


    public function buildTableData()
    {
        $this->appendToDataSet('whatif', $this->getWhatIfData());
        $this->appendToDataSet('planning', $this->getPlanningData());
        $this->appendToDataSet('selfAllotment', $this->getSelfAllotmentData());
        $this->appendToDataSet('adjustments', $this->getLastDayAdjustments());
        $this->appendToDataSet('membership', $this->getStudentMembership());
        $this->appendToDataSet('total', $this->getAllotmentTotals());
        $this->appendToDataSet('conversions', $this->getConversionData());
        $this->appendToDataSet('variance', $this->getVariance());
    }


    public function getMembershipTotal($membershipData)
    {
        return [
            'id' => null,
            'grade_order' => (count($membershipData) + 1),
            'grade' => 'TOT',
            'studentcount' => array_sum(array_column($membershipData, 'studentcount')),
        ];
    }

    public function getMembershipData($day, $returnWithTotal=true)
    {
        $membershipData = SchoolGrade::select('grades.id', 'grades.grade_order', 'grades.grade', 'membership.studentcount')
            ->join('grades', 'school_grades.grade_id', '=', 'grades.id')
            ->leftJoin('membership', function ($join) use ($day) {
                $join->on('membership.grade', '=', 'grades.grade')
                    ->on('membership.school_id', '=', 'school_grades.school_id')
                    ->where('membership.day_proj_plan_ind', '=', $day);
            })
            ->where('school_grades.school_id', $this->school->id)
            ->where('school_grades.school_year', $this->school->school_year)
            ->orderBy('grades.grade_order')
            ->get()->toArray();

        if ($returnWithTotal) {
            $membershipData[] = $this->getMembershipTotal($membershipData);
        }

        return $membershipData;
    }


    public function getLastDayStudentTotal()
    {
        $lastDay = ReportingDays::getLastReportDay($this->school->school_year);
        $data = $this->getMembershipData($lastDay, false);
        $totals = $this->getMembershipTotal($data);
        return $totals['studentcount'];
    }

    public function getDataSet()
    {
        return $this->dataSet;
    }


    public function getSchoolObjectForAllotments()
    {
        return $this->school;
    }


    public function getConversionData()
    {
        return [
            'teacherMoe' => $this->moe->getAllotmentMoe('CONVTCH'),
            'taMoe' => $this->moe->getAllotmentMoe('CONVTA')
        ];
    }


    public function getAllotmentTotals()
    {
        if (!isset($this->dataSet['planning'])) {
            $this->appendToDataSet('planning', $this->getPlanningData());
        }
        if (!isset($this->dataSet['selfAllotment'])) {
            $this->appendToDataSet('selfAllotment', $this->getSelfAllotmentData());
        }
        if (!isset($this->dataSet['adjustments'])) {
            $this->appendToDataSet('adjustments', $this->getLastDayAdjustments());
        }

        $teacherMoe = $this->dataSet['planning']['teacherMoe']
            + $this->dataSet['selfAllotment']['teacherMoe']
            + $this->dataSet['adjustments']['teacherMoe'];
        $taMoe = $this->dataSet['planning']['taMoe']
            + $this->dataSet['selfAllotment']['taMoe']
            + $this->dataSet['adjustments']['taMoe'];
        return [
            'teacherMoe' => $teacherMoe,
            'taMoe' => $taMoe,
        ];
    }


    private function getWhatIfData()
    {
        $whatIfData = $this->getMembershipData('PR');

        return [
            'whatif' => $whatIfData,
            'teacherMoe' => $this->moe->getTeacherMoe($whatIfData, $this->school->school_type_id),
            'taMoe' => $this->moe->getAssistantMoe($whatIfData, $this->school->school_type_id)
        ];

        return $whatIfData;
    }


    private function getPlanningData()
    {
        $planningData = $this->getMembershipData('PA');
        $this->scheduleAssistance->addScheduleAssistanceHours($planningData);
        return [
            'planning' => $planningData,
            'teacherMoe' => $this->moe->getTeacherMoe($planningData, $this->school->school_type_id),
            'taMoe' => $this->moe->getAssistantMoe($planningData, $this->school->school_type_id)

        ];
    }


    private function getSelfAllotmentData()
    {
        return [
            'teacherMoe' => $this->moe->getAllotmentMoe('SELFALLOTTCH'),
            'taMoe' => $this->moe->getAllotmentMoe('SELFALLOTTA')
        ];
    }


    private function getLastDayAdjustments()
    {
        return [
            'teacherMoe' => $this->moe->getAllotmentMoe('DAY10TCH'),
            'taMoe' => $this->moe->getAllotmentMoe('DAY10TA')
        ];
    }


    private function getStudentMembership()
    {
        $reportDays = ReportingDays::getReportingDays($this->school->school_year);
        $daysData = [];
        foreach ($reportDays as $day) {
            $data = $this->getMembershipData($day);
            $this->scheduleAssistance->addScheduleAssistanceHours($data);
            $daysData[$day]['membership'] = $data;
            $daysData[$day]['teacherMoe'] = $this->moe->getTeacherMoe($data, $this->school->school_type_id);
            $daysData[$day]['taMoe'] = $this->moe->getAssistantMoe($data, $this->school->school_type_id);
        }
        return $daysData;
    }


    private function getVariance()
    {
        $lastDay = ReportingDays::getLastReportDay($this->school->school_year);
        $teacherVariance = $this->dataSet['total']['teacherMoe']
            - $this->dataSet['membership'][$lastDay]['teacherMoe'];
        $taVariance = $this->dataSet['total']['taMoe']
            - $this->dataSet['membership'][$lastDay]['taMoe'];
        return [
            'teacherMoe' => $teacherVariance,
            'taMoe' => $taVariance
        ];
    }


    private function prepareDataSet()
    {
        $this->dataSet = [
            'schoolId' => $this->school->id,
            'schoolName' => $this->school->school_name,
            'schoolNum' => $this->school->school,
            'schoolYearDisplay' => $this->displayYear->display,
        ];
    }


    private function appendToDataSet($key, $value)
    {
        $this->dataSet[$key] = $value;
    }

}
