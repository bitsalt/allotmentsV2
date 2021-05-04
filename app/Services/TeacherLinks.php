<?php


namespace App\Services;


use App\Models\AllotmentType;

class TeacherLinks
{

    private $types;
    private $schoolYear;

    public function __construct($schoolYear)
    {
        $this->types = [
            'teacherLink' => 'TEACHER',
            'taLink' => 'TA'
        ];
        $this->schoolYear = $schoolYear;
    }

    public function getTeacherLinks()
    {
        $links = [];
        foreach ($this->types as $key => $value) {
            $type = AllotmentType::where('school_year', $this->schoolYear)
                ->where('allotment_prog_code', $value)
                ->first();
            $links[$key] = $type->data_link;
        }

        return $links;
    }
}
