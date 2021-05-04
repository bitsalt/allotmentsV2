<?php

namespace Tests\Unit;

use App\Models\School;
use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;

class SchoolsTest extends TestCase
{
    public function testCanGetSchool()
    {
        $school = new School(1454); // 2021 Abbots Creek Elem
        $this->assertInstanceOf(\App\Models\School::class, $school);
        $this->assertEquals('Abbotts Creek Elementary', $school->getSchoolField('school_name'), 'Get school name?');
    }

    public function testCanGetSchoolGradesCollection()
    {
        $school = new School(1457); // 2021 Alston Ridge Elem
        $gradesList = $school->getGradesList();
        $this->assertInstanceOf(Collection::class, $gradesList);
        $this->assertEquals(13, $gradesList->count()); // K-12 = 13
    }
}
