<?php


namespace App\Services;

use App\Services\School;


class Membership
{
    private $school;

    public function __construct(School $school)
    {
        $this->school = $school;
    }

    /**
     * MOE applied to "What If" numbers with Schedule Assistance and Grandfathered hours added.
     * @param $school
     * @return mixed
     */
    public function getWhatIfData(School $school)
    {
        $whatIfData = $this->getMembershipData('PR');

        $moe = new Moe($this->school->getModel());
        $teacherMoe = $moe->getTeacherMoe($whatIfData);

        $dataSet = array(
            'whatif' => $this->backwardCompatibleMembershipFormat($whatIfData),
            'teacherMoe' => $moe->backwardCompatibleMoeFormat($teacherMoe), //$whatIfData['teacherMoe']),      // $teacherMoe),
            'taMoe' => $moe->getAssistantMoe('PR')
        );

        return $dataSet;
    }


    /**
     * MOE applied to Planning numbers with Schedule Assistance and Grandfathered hours added.
     * @param $school
     * @return mixed
     */
    public function getPlanningData() {
        $planningData = $this->getMembershipData($this->school,'PA');
        $moe = new Moe($this->school);
        $teacherMoe = $moe->getTeacherMoe($planningData);
//        $taMoe = $moe->getAssistantMoe($planningData);


        $dataSet = array(
            'planning' => $this->backwardCompatibleMembershipFormat($planningData),
            'teacherMoe' => $moe->backwardCompatibleMoeFormat($teacherMoe),
            'taMoe' => $moe->getAssistantMoe('PA')
        );


        return $dataSet;

    }


    /**
     * MOE applied to Day 01 through final day, with Schedule Assistance and Grandfathered hours added.
     * @param $school
     * @param $day
     * @return mixed
     */
    public function getDailyMoe($day)
    {
        $memberData = $this->getMembershipData($day);
        $moe = new Moe($this->school);
        $teacherMoe = $moe->getTeacherMoe($memberData, $school->getSchoolTypeId());
//        $taMoe = $moe->getAssistantMoe($memberData, $school->getSchoolTypeId());

        $dataSet = array(
            'membership' => $this->backwardCompatibleMembershipFormat($memberData),
            'teacherMoe' => $moe->backwardCompatibleMoeFormat($teacherMoe),
            'taMoe' => $moe->getAssistantMoe($day)
        );

        return $dataSet;
    }


    /**
     * Notes: the school obj alredy has a gradeList collection with the grade data. Just need
     *      to match this up with the membership numbers
     * @param Application_Model_School $school
     * @param $day
     * @return false
     */
    public function getMembershipData($day)
    {
        $grades = $this->school->getGradesList();

        $grades->each(function ($item, $key) {
            echo "key: $key \n";
        });


        /*
        $select = "select grades.id, grades.grade_order, grades.grade, membership.studentcount
            from school_grades
            inner join grades on school_grades.grade_id = grades.id
            left join membership on membership.grade = grades.grade
                and membership.school_id = school_grades.school_id
                and membership.day_proj_plan_ind = '$day'
            where school_grades.school_id = {$school->getId()}
            and school_grades.school_year = {$school->getSchoolYear()}
            order by grades.grade_order asc";

        try {
            $membershipData = $this->db->query($select)->fetchAll();
        } catch (Zend_Exception $e) {
            echo 'Error in Moe:getMembershipData()';
            return false;
        }

        $membershipData[] = $this->getMembershipTotal($membershipData);
        return $membershipData;
        */
    }

}
