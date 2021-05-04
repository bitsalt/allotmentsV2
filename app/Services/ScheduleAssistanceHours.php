<?php


namespace App\Services;


class ScheduleAssistanceHours
{

    private $scheduleAssistanceHours;

    public function __construct($school)
    {
        if ($school->has_schedule_assistance) {
            $this->scheduleAssistanceHours = $school->schedule_assistance_hours;
        } else {
            $this->scheduleAssistanceHours = 0;
        }
    }

    public function addScheduleAssistanceHours(&$data)
    {
        if (isset($data['whatif']['teacherMoe'])) {
            $data['whatif']['teacherMoe'] += $this->scheduleAssistanceHours;
        }

        if (isset($data['planning']['teacherMoe'])) {
            $data['planning']['teacherMoe'] += $this->scheduleAssistanceHours;
        }

        if (isset($data['membership'])) {
            $reportDays = ReportingDays::getReportingDays($this->school->school_year);
            foreach ($reportDays as $day) {
                $data['membership'][$day]['teacherMoe'] += $this->scheduleAssistanceHours;
            }
        }

        return $data;
    }
}
