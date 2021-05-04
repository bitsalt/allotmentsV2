<?php


namespace App\Services;


use App\Models\Grade;

class GradesList
{

    private $schoolId;
    private $schoolYear;
    private $gradesList;

    public function __construct($schoolId, $schoolYear)
    {
        $this->schoolId = $schoolId;
        $this->schoolYear = $schoolYear;
    }

    public function getGradesList()
    {
        $gradesList = Grade::select(['grades.id', 'grades.grade'])
            ->join('school_grades', 'grades.id', '=', 'school_grades.grade_id')
            ->join('schools', function ($join) {
                $join->on('school_grades.school_id', '=', 'schools.id')
                    ->where('schools.id', '=', $this->schoolId);
            })
            ->where('grades.school_year', '=', $this->schoolYear)
            ->orderBy('grades.grade_order')
            ->get()->toArray();

        foreach ($gradesList as $grade) {
            $this->gradesList[$grade['id']] = $grade['grade'];
        }

        return $this->gradesList;
    }
}
