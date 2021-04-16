<?php

namespace Tests\Unit;

use App\Http\SchoolReports\NonSalaryAllotments;
use App\Models\School;
use Tests\SchoolData\SchoolData;
use Tests\TestCase;

class NonsalaryAllotmentsTest extends TestCase
{
    private $nonsalaryAllotments;
    private $testValues;


    public function setUp(): void
    {
        parent::setUp();
        if (empty($this->testValues)) {
            $this->school = School::where('school_name', $this->testSchoolName)
                ->where('school_year', $this->testSchoolYear)->first();
            $this->testValues = SchoolData::getSchoolData($this->school->id);

            $this->nonsalaryAllotments = new NonSalaryAllotments($this->school);
        }
        if (empty($this->testValues)) {
            dd("No such school information found. ID: " . $this->school->id);
        }
    }


    public function testCanGetStudentTotal()
    {
        $studentCount = $this->nonsalaryAllotments->getFinalDayStudentCount();
        $this->assertEquals($this->testValues['nonsalaryStudentCount'], $studentCount);
    }


    public function testCanGetNonsalaryAllotments()
    {
        $allotments = $this->nonsalaryAllotments->getAllotments();
        $this->assertEquals($this->testValues['nonsalary'], $allotments);
    }

    public function testCanGetNonsalaryTotals()
    {
        $allotmentTotals = $this->nonsalaryAllotments->getCategoryTotals();
        $this->assertEquals($this->testValues['nonsalaryTotals'], $allotmentTotals);
    }

}
