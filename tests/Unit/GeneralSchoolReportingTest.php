<?php

namespace Tests\Unit;

use App\Http\SchoolReports\AllotmentCalculations;
use App\Http\SchoolReports\GradesList;
use App\Http\SchoolReports\ReportingDays;
use App\Http\SchoolReports\TeacherLinks;
use App\Models\School;
use Tests\SchoolData\SchoolData;
use Tests\TestCase;

class GeneralSchoolReportingTest extends TestCase
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
    public function testCanGetGradesList()
    {
        $gradesList = new GradesList($this->school->id, $this->school->school_year);
        $list = $gradesList->getGradesList();

        $this->assertIsArray($list);
        $this->assertEquals($this->testValues['schoolGrades'], $list);
    }

    public function testCanGetTeacherLinks()
    {
        $tLinks = new TeacherLinks($this->school->school_year);
        $links = $tLinks->getTeacherLinks();
        $this->assertArrayHasKey('teacherLink', $links);
        $this->assertArrayHasKey('taLink', $links);
        $this->assertEquals($this->testValues['teacherLinkValue'], $links['teacherLink']);
        $this->assertEquals($this->testValues['taLinkValue'], $links['taLink']);
    }

    public function testCanGetReportingDays()
    {
        $reportDays = ReportingDays::getReportingDays($this->school->school_year);
        $allotCalcs = new AllotmentCalculations($this->school);
        foreach ($reportDays as $day) {
            $daysData = $allotCalcs->getMembershipData($day);
            foreach ($daysData as $key => $data) {
                $this->assertEquals($this->testValues['membership'][$day]['membership'][$key]['grade'], $data['grade']);
                $this->assertEquals($this->testValues['membership'][$day]['membership'][$key]['studentcount'], $data['studentcount']);
            }
        }
    }

}
