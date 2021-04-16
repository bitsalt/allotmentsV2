<?php

namespace Tests\Unit;



use App\Http\SchoolReports\AllotmentCalculations;
use App\Http\SchoolReports\Moe;
use App\Http\SchoolReports\ReportingDays;
use App\Http\SchoolReports\ScheduleAssistanceHours;
use App\Models\School;
use Tests\SchoolData\SchoolData;
use Tests\TestCase;

class AllotmentCalculationsTest extends TestCase
{

    private $testValues = [];
    private $school;

    public function setUp(): void
    {
        parent::setUp();
        if (empty($this->testValues)) {
            $this->school = School::where('school_name', $this->testSchoolName)
                ->where('school_year', $this->testSchoolYear)->first();
            $this->testValues = SchoolData::getSchoolData($this->school->id);
        }
        if (empty($this->testValues)) {
            dd("No such school information found. ID: " . $this->school->id);
        }
    }


    public function testCanGetWhatifValues()
    {
        $allotCalcs = $this->getObject('AllotmentCalculations');
        $membershipData = $allotCalcs->getMembershipData('PR');
        $asst = $this->getObject('ScheduleAssistanceHours');
        $asst->addScheduleAssistanceHours($membershipData);

        $moe = $this->getObject('Moe');
        $teacherMoe = $moe->getTeacherMoe($membershipData, $this->school->school_type_id);
        $taMoe = $moe->getAssistantMoe($membershipData, $this->school->school_type_id);

        foreach ($membershipData as $key => $data) {
            $this->assertEquals($this->testValues['whatif'][$key]['grade'], $data['grade']);
            $this->assertEquals($this->testValues['whatif'][$key]['studentcount'], $data['studentcount']);
        }

        $this->assertEquals($this->testValues['whatifMoe']['teacherMoe'], $teacherMoe);
        $this->assertEquals($this->testValues['whatifMoe']['taMoe'], $taMoe);
    }

    public function testCanGetPlanningValues()
    {
        $allotCalcs = $this->getObject('AllotmentCalculations');
        $membershipData = $allotCalcs->getMembershipData('PA');
        $asst = $this->getObject('ScheduleAssistanceHours');
        $asst->addScheduleAssistanceHours($membershipData);

        $moe = $this->getObject('Moe');
        $teacherMoe = $moe->getTeacherMoe($membershipData, $this->school->school_type_id);
        $taMoe = $moe->getAssistantMoe($membershipData, $this->school->school_type_id);

        foreach ($membershipData as $key => $testValues) {
            $this->assertEquals($this->testValues['planning'][$key]['grade'], $testValues['grade']);
            $this->assertEquals($this->testValues['planning'][$key]['studentcount'], $testValues['studentcount']);
        }

        $this->assertEquals($this->testValues['planningMoe']['teacherMoe'], $teacherMoe);
        $this->assertEquals($this->testValues['planningMoe']['taMoe'], $taMoe);
    }

    public function testCanGetSelfAllotment()
    {
        $moe = $this->getObject('Moe');
        $data['teacherMoe'] = $moe->getAllotmentMoe('SELFALLOTTCH');
        $data['taMoe'] = $moe->getAllotmentMoe('SELFALLOTTA');

        $this->assertEquals($this->testValues['selfAllotment'], $data);
    }

    public function testCanGetLastDayAdjustments()
    {
        $moe = $this->getObject('Moe');
        $data['teacherMoe'] = $moe->getAllotmentMoe('DAY10TCH');
        $data['taMoe'] = $moe->getAllotmentMoe('DAY10TA');

        $this->assertEquals($this->testValues['adjustments'], $data);
    }

    public function testCanGetStudentMembership()
    {
        $allotCalcs = $this->getObject('AllotmentCalculations');
        $moe = $this->getObject('Moe');
        $assistanceHours = $this->getObject('ScheduleAssistanceHours');
        $reportDays = ReportingDays::getReportingDays($this->school->school_year);
        $lastDay = ReportingDays::getLastReportDay($this->school->school_year);
        $daysData = [];
        foreach ($reportDays as $day) {
            $membershipData = $allotCalcs->getMembershipData($day);
            $assistanceHours->addScheduleAssistanceHours($membershipData);
            foreach ($membershipData as $key => $data) {
                $this->assertEquals($this->testValues['membership'][$day]['membership'][$key]['grade'], $data['grade']);
                $this->assertEquals($this->testValues['membership'][$day]['membership'][$key]['studentcount'], $data['studentcount']);
            }
            $this->assertEquals($this->testValues['membership'][$day]['teacherMoe'], $moe->getTeacherMoe($membershipData, $this->school->school_type_id));
            $this->assertEquals($this->testValues['membership'][$day]['taMoe'], $moe->getAssistantMoe($membershipData, $this->school->school_type_id));
        }
    }

    public function testCanGetConversions()
    {
        $moe = $this->getObject('Moe');
        $data['teacherMoe'] = $moe->getAllotmentMoe('CONVTCH');
        $data['taMoe'] = $moe->getAllotmentMoe('CONVTA');

        $this->assertEquals($this->testValues['conversions'], $data);
    }

    // test these together as variance depends on repeating the whole 'totals' process
    public function testCanGetAllotmentTotalAndVariance()
    {
        // Total = Planning + Self + Last Day Adjustments
        // Variance = Total - Student Membership of last day
        $moe = $this->getObject('Moe');
        $allotCalcs = $this->getObject('AllotmentCalculations');
        $asst = $this->getObject('ScheduleAssistanceHours');
        $lastDay = ReportingDays::getLastReportDay($this->school->school_year);

        // planning...
        $planningData = $allotCalcs->getMembershipData('PA');
        $asst->addScheduleAssistanceHours($planningData);
        $planTeacherMoe = $moe->getTeacherMoe($planningData, $this->school->school_type_id);
        $planTaMoe = $moe->getAssistantMoe($planningData, $this->school->school_type_id);

        // self...
        $selfTeacherMoe = $moe->getAllotmentMoe('SELFALLOTTCH');
        $selfTaMoe = $moe->getAllotmentMoe('SELFALLOTTA');

        // last day adjustments...
        $lastTeacherMoe = $moe->getAllotmentMoe('DAY10TCH');
        $lastTaMoe = $moe->getAllotmentMoe('DAY10TA');

        $totalTeacherMoe = $planTeacherMoe + $selfTeacherMoe + $lastTeacherMoe;
        $totalTaMoe = $planTaMoe + $selfTaMoe + $lastTaMoe;
        $totals = [
            'teacherMoe' => $totalTeacherMoe,
            'taMoe' => $totalTaMoe
        ];

        // student membership, last day
        $membershipData = $allotCalcs->getMembershipData($lastDay);
        $asst->addScheduleAssistanceHours($membershipData);
        $memTeacherMoe = $moe->getTeacherMoe($membershipData);
        $memTaMoe = $moe->getAssistantMoe($membershipData);

        $variance = [
            'teacherMoe' => ($totalTeacherMoe - $memTeacherMoe),
            'taMoe' => ($totalTaMoe - $memTaMoe)
        ];

        $this->assertEquals($this->testValues['total'], $totals);
        $this->assertEquals($this->testValues['variance'], $variance);
    }



    // "factory" object creation to keep the test code cleaner
    private function getObject($type) {
        switch($type) {
            case 'AllotmentCalculations':
                return new AllotmentCalculations($this->school);
                break;
            case 'ScheduleAssistanceHours':
                return new ScheduleAssistanceHours($this->school);
                break;
            case 'Moe':
                return new Moe($this->school);
                break;
        }
    }
}
