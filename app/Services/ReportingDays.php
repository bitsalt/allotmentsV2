<?php


namespace App\Services;


use App\Models\ReportingDay;

class ReportingDays
{
    private static $reportingDays;
    private static $lastDay;

    public static function getReportingDays($year)
    {
        $daysData = ReportingDay::select('report_days')
            ->where('school_year', $year)
            ->orderBy('order_id')
            ->get()->toArray();

        $days = [];
        foreach ($daysData as $day) {
            $days[] = strval($day['report_days']);
        }

        return $days;
    }

    public static function getLastReportDay($year)
    {
        $daysData = ReportingDay::select('report_days')
            ->where('school_year', $year)
            ->orderBy('order_id', 'DESC')
            ->first();

        return strval($daysData['report_days']);
    }
}
