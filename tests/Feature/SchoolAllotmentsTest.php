<?php

namespace Tests\Feature;

use App\Http\SchoolReports\AllotmentCalculations;
use App\Http\SchoolReports\ReportingDays;
use App\Models\School;
use Tests\SchoolData\SchoolData;
use Tests\TestCase;

class SchoolAllotmentsTest extends TestCase
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


    public function testCanBuildAllotmentsTable()
    {
        $allotCalcs = new AllotmentCalculations($this->school);
        $allotCalcs->getTableHeaderData();
        $allotCalcs->buildTableData();
        $dataSet = $allotCalcs->getDataSet();

        $this->assertEquals($this->school->id, $dataSet['schoolId']);
        $this->assertEquals($this->school->school_name, $dataSet['schoolName']);
        $this->assertEquals($this->school->school, $dataSet['schoolNum']);
        $this->assertEquals($this->testValues['schoolYearDisplay'], $dataSet['schoolYearDisplay']);

        // make sure the other values are being added correctly
        $this->assertArrayHasKey('schoolGrades', $dataSet);
        $this->assertArrayHasKey('teacherLink', $dataSet);

        $this->assertArrayHasKey('whatif', $dataSet);
        $this->assertArrayHasKey('teacherMoe', $dataSet['whatif']);

        $this->assertArrayHasKey('selfAllotment', $dataSet);
        $this->assertArrayHasKey('teacherMoe', $dataSet['selfAllotment']);

        $this->assertArrayHasKey('adjustments', $dataSet);
        $this->assertArrayHasKey('teacherMoe', $dataSet['adjustments']);

        $this->assertArrayHasKey('conversions', $dataSet);
        $this->assertArrayHasKey('teacherMoe', $dataSet['conversions']);

        $this->assertArrayHasKey('variance', $dataSet);
        $this->assertArrayHasKey('teacherMoe', $dataSet['variance']);

        $this->assertArrayHasKey('total', $dataSet);
        $this->assertArrayHasKey('teacherMoe', $dataSet['total']);




        // whatif
        $this->assertEquals($this->testValues['whatifMoe']['teacherMoe'], $dataSet['whatif']['teacherMoe']);

        // planning
        foreach ($dataSet['planning']['planning'] as $key => $planValues) {
            $this->assertEquals($this->testValues['planning'][$key]['grade'], $planValues['grade']);
            $this->assertEquals($this->testValues['planning'][$key]['studentcount'], $planValues['studentcount']);
        }
        $this->assertEquals($this->testValues['planningMoe']['teacherMoe'], $dataSet['planning']['teacherMoe']);


        // taMoe values
        if ($this->testSchoolName != 'Wake Young Womens Leadership Academy') {
            $this->assertArrayHasKey('taLink', $dataSet);
            $this->assertArrayHasKey('taMoe', $dataSet['whatif']);
            $this->assertArrayHasKey('taMoe', $dataSet['selfAllotment']);
            $this->assertArrayHasKey('taMoe', $dataSet['adjustments']);
            $this->assertArrayHasKey('taMoe', $dataSet['conversions']);
            $this->assertArrayHasKey('taMoe', $dataSet['variance']);
            $this->assertArrayHasKey('taMoe', $dataSet['total']);
            $this->assertEquals($this->testValues['whatifMoe']['taMoe'], $dataSet['whatif']['taMoe']);
            $this->assertEquals($this->testValues['planningMoe']['taMoe'], $dataSet['planning']['taMoe']);
        }

        // self allotments
        $this->assertEquals($this->testValues['selfAllotment'], $dataSet['selfAllotment']);

        // adjustments
        $this->assertEquals($this->testValues['adjustments'], $dataSet['adjustments']);

        // totals
        $this->assertEquals($this->testValues['total'], $dataSet['total']);

        // membership
        $reportDays = ReportingDays::getReportingDays($this->school->school_year);
        foreach ($reportDays as $day) {
            $this->assertEquals($this->testValues['membership'][$day]['membership'][$key]['grade'],
                $dataSet['membership'][$day]['membership'][$key]['grade']);
            $this->assertEquals($this->testValues['membership'][$day]['membership'][$key]['studentcount'],
                $dataSet['membership'][$day]['membership'][$key]['studentcount']);
            $this->assertEquals($this->testValues['membership'][$day]['teacherMoe'],
                $dataSet['membership'][$day]['teacherMoe']);

            if ($this->testSchoolName != 'Wake Young Womens Leadership Academy') {
                $this->assertEquals($this->testValues['membership'][$day]['taMoe'],
                    $dataSet['membership'][$day]['taMoe']);
            }
        }

        // conversions
        $this->assertEquals($this->testValues['conversions'], $dataSet['conversions']);

        //variance
        $this->assertEquals($this->testValues['variance'], $dataSet['variance']);
    }
}
