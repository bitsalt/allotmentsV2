<?php

namespace Tests\Unit;

use App\Http\SchoolReports\ReportingDays;
use Tests\TestCase;

class ReportDaysTest extends TestCase
{
    private $schoolYear = 2020;

    private $expectedDays = ['01', '10', '15', '20'];
    private $expectedLastDay = '20';

    public function testCanGetReportingDaysArray()
    {
        $days = ReportingDays::getReportingDays($this->schoolYear);
        $this->assertEquals($this->expectedDays, $days);
    }

    public function testCanGetLastReportingDay()
    {
        $lastDay = ReportingDays::getLastReportDay($this->schoolYear);
        $this->assertEquals($this->expectedLastDay, $lastDay);
    }
}
