<?php

namespace Tests\Unit;

use App\Services\ServiceAllotments;
use App\Models\School;
use Tests\TestCase;
use Tests\SchoolData\SchoolData;

class ServiceAllotmentsTest extends TestCase
{
    private $serviceAllotments;
    private $testValues;


    public function setUp(): void
    {
        parent::setUp();
        if (empty($this->testValues)) {
            $this->school = School::where('school_name', $this->testSchoolName)
                ->where('school_year', $this->testSchoolYear)->first();
            $this->testValues = SchoolData::getSchoolData($this->school->id);

            $this->serviceAllotments = new ServiceAllotments($this->school);
        }
        if (empty($this->testValues)) {
            dd("No such school information found. ID: " . $this->school->id);
        }
    }


    public function testCanGetTotalMoe()
    {
        $total = $this->serviceAllotments->getTotalMoe();
        $this->assertEquals($this->testValues['totalMoe'], $total);
    }


    public function testCanGetCategories()
    {
        $allotments = $this->serviceAllotments->getServiceAllotments();

        $i = 0;
        foreach ($allotments as $category => $allotment) {
            if (empty($allotment)) {
                continue;
            }
            $this->assertArrayHasKey($category, $this->testValues['serviceAllotments']);
            // only test up to the first three categories
            for ($i=0; $i<3; $i++) {
                if (isset($allotment[$i])) {
                    $this->assertEquals($this->testValues['serviceAllotments'][$category][$i], $allotment[$i]);
                }
            }
        }
    }


    public function testCanGetLastUpdateDate()
    {
        $lastUpdate = $this->serviceAllotments->getLastUpdateDate();
        $this->assertEquals($this->testValues['serviceAllotmentsUpdated'], $lastUpdate);
    }
}
