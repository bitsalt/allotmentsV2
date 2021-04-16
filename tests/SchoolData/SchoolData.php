<?php

namespace Tests\SchoolData;

use App\Models\School;

class SchoolData
{
    private static $schoolData = [
        '1261' => [
            'schoolId' => 1261,
            'schoolYear' => 2020,
            'schoolYearDisplay' => '2020-2021',
            'schoolName' => 'Adams Elementary',
            'schoolGrades' => [
                92 => 'K',
                93 => '01',
                94 => '02',
                95 => '03',
                96 => '04',
                97 => '05',
            ],
            'teacherLinkValue' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
            'taLinkValue' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
            'whatif' => [
                [
                    'grade' => 'K',
                    'studentcount' => 89
                ],
                [
                    'grade' => '01',
                    'studentcount' => 95
                ],
                [
                    'grade' => '02',
                    'studentcount' => 91
                ],
                [
                    'grade' => '03',
                    'studentcount' => 95
                ],
                [
                    'grade' => '04',
                    'studentcount' => 83
                ],
                [
                    'grade' => '05',
                    'studentcount' => 77
                ],
                [
                    'grade' => 'TOT',
                    'studentcount' => 530
                ],
            ],
            'whatifMoe' => [
                'teacherMoe' => '270.00',
                'taMoe' => '83.70'
            ],
            'planning' => [
                [
                    'grade' => 'K',
                    'studentcount' => 86
                ],
                [
                    'grade' => '01',
                    'studentcount' => 102
                ],
                [
                    'grade' => '02',
                    'studentcount' => 98
                ],
                [
                    'grade' => '03',
                    'studentcount' => 109
                ],
                [
                    'grade' => '04',
                    'studentcount' => 87
                ],
                [
                    'grade' => '05',
                    'studentcount' => 80
                ],
                [
                    'grade' => 'TOT',
                    'studentcount' => 562
                ],
            ],
            'planningMoe' => [
                'teacherMoe' => '290.00',
                'taMoe' => '83.70'
            ],
            'selfAllotment' => [
                'teacherMoe' => '0.00',
                'taMoe' => '0.00',
            ],
            'adjustments' => [
                'teacherMoe' => '-20.00',
                'taMoe' => '0.00',
            ],
            'total' => [
                'teacherMoe' => '270.00',
                'taMoe' => '83.70'
            ],
            'membership' => [
                '01' => [
                    'membership' => [
                        [
                            'grade' => 'K',
                            'studentcount' => 82
                        ],
                        [
                            'grade' => '01',
                            'studentcount' => 88
                        ],
                        [
                            'grade' => '02',
                            'studentcount' => 83
                        ],
                        [
                            'grade' => '03',
                            'studentcount' => 86
                        ],
                        [
                            'grade' => '04',
                            'studentcount' => 75
                        ],
                        [
                            'grade' => '05',
                            'studentcount' => 71
                        ],
                        [
                            'grade' => 'TOT',
                            'studentcount' => 485
                        ],
                    ],
                    'teacherMoe' => 250.00,
                    'taMoe' => 74.40,
                ],
                '10' => [
                    'membership' => [
                        [
                            'grade' => 'K',
                            'studentcount' => 89
                        ],
                        [
                            'grade' => '01',
                            'studentcount' => 95
                        ],
                        [
                            'grade' => '02',
                            'studentcount' => 91
                        ],
                        [
                            'grade' => '03',
                            'studentcount' => 95
                        ],
                        [
                            'grade' => '04',
                            'studentcount' => 82
                        ],
                        [
                            'grade' => '05',
                            'studentcount' => 77
                        ],
                        [
                            'grade' => 'TOT',
                            'studentcount' => 529
                        ],
                    ],
                    'teacherMoe' => 270.00,
                    'taMoe' => 83.70,
                ],
                '15' => [
                    'membership' => [
                        [
                            'grade' => 'K',
                            'studentcount' => 90
                        ],
                        [
                            'grade' => '01',
                            'studentcount' => 95
                        ],
                        [
                            'grade' => '02',
                            'studentcount' => 92
                        ],
                        [
                            'grade' => '03',
                            'studentcount' => 95
                        ],
                        [
                            'grade' => '04',
                            'studentcount' => 83
                        ],
                        [
                            'grade' => '05',
                            'studentcount' => 77
                        ],
                        [
                            'grade' => 'TOT',
                            'studentcount' => 532
                        ],
                    ],
                    'teacherMoe' => 270.00,
                    'taMoe' => 83.70,
                ],
                '20' => [
                    'membership' => [
                        [
                            'grade' => 'K',
                            'studentcount' => 90
                        ],
                        [
                            'grade' => '01',
                            'studentcount' => 96
                        ],
                        [
                            'grade' => '02',
                            'studentcount' => 92
                        ],
                        [
                            'grade' => '03',
                            'studentcount' => 95
                        ],
                        [
                            'grade' => '04',
                            'studentcount' => 84
                        ],
                        [
                            'grade' => '05',
                            'studentcount' => 77
                        ],
                        [
                            'grade' => 'TOT',
                            'studentcount' => 534
                        ],
                    ],
                    'teacherMoe' => 270.00,
                    'taMoe' => 83.70,
                ],
            ],
            'variance' => [
                'teacherMoe' => '0.00',
                'taMoe' => '0.00',
            ],
            'conversions' => [
                'teacherMoe' => '0.00',
                'taMoe' => '0.00',
            ],
            'serviceAllotments' => [
                'Area Superintendent Allotments' => [
                    [
                        'allotment_prog_desc' => 'Assistant Principal',
                        'dataLink' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
                        'moe' => '12.00',
                        'conv' => '0.00',
                        'net' => 12.00,
                        'comments' => '',
                    ],
                    [
                        'allotment_prog_desc' => 'Clerical',
                        'dataLink' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
                        'moe' => '36.00',
                        'conv' => '0.00',
                        'net' => '36.00',
                        'comments' => '12 Lead Secretary, 12 Data Manager, 12 Clerical Asst.',
                    ],
                    [
                        'allotment_prog_desc' => 'Principal',
                        'dataLink' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
                        'moe' => '12.00',
                        'conv' => '0.00',
                        'net' => 12.00,
                        'comments' => '',
                    ],
                ],
                'Instructional Services Allotments' => [
                    [
                        'allotment_prog_desc' => 'Academically or Intellectually Gifted',
                        'dataLink' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
                        'moe' => '12.00',
                        'conv' => '0.00',
                        'net' => '12.00',
                        'comments' => '',
                    ],
                    [
                        'allotment_prog_desc' => 'Counselor',
                        'dataLink' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
                        'moe' => '12.00',
                        'conv' => '0.00',
                        'net' => '12.00',
                        'comments' => '',
                    ],
                    [
                        'allotment_prog_desc' => 'Instructional Facilitator',
                        'dataLink' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
                        'moe' => '6.00',
                        'conv' => '0.00',
                        'net' => '6.00',
                        'comments' => '',
                    ],
                ],
                'Auxiliary Services' => [
                    [
                        'allotment_prog_desc' => 'COVID 19 Pandemic',
                        'dataLink' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
                        'moe' => '40.00',
                        'conv' => '0.00',
                        'net' => '40.00',
                        'comments' => '30 FAST Worker; 10 School Support Monitor and Assistant',
                    ],
                    [
                        'allotment_prog_desc' => 'Custodial Services',
                        'dataLink' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
                        'moe' => '12.00',
                        'conv' => '0.00',
                        'net' => '12.00',
                        'comments' => '12 Head Custodian',
                    ],
                    [
                        'allotment_prog_desc' => 'School Nutrition',
                        'dataLink' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
                        'moe' => '24.00',
                        'conv' => '0.00',
                        'net' => '24.00',
                        'comments' => '12 CNS Manager, 12 CNS Assistant Manager,',
                    ],
                ],
            ],
            'serviceAllotmentsUpdated' => '10-13-2020',
            'serviceAllotmentsTotals' => [
                'categories' => [
                    'Area Superintendent Allotments' => [
                        'moe' => '60.00',
                        'conv' => '0.00',
                        'net' => '60.00',
                    ],
                    'Instructional Services Allotments' => [
                        'moe' => '254.80',
                        'conv' => '0.00',
                        'net' => '254.80',
                    ],
                    'Auxiliary Services' => [
                        'moe' => '76.00',
                        'conv' => '0.00',
                        'net' => '76.00',
                    ],
                ],
                'totals' => [
                    'moe' => '390.80',
                    'conv' => '0.00',
                    'net' => '390.80',
                ]
            ],
            'totalMoe' => '744.50',
            'nonsalaryStudentCount' => 534,
            'nonsalary' => [
                [
                    'category_name' => 'State',
                    'data_link' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
                    'allotment_prog_code' => 'PRC 131',
                    'allotment_prog_desc' => 'Textbook and Digital Resources',
                    'moe' => '1751.00',
                    'conversions' => '0.00',
                    'carryover' => '0.00',
                    'comments' => 'Science Materials (Funds can be transferred to object "314" for printing and "413" for non-state adopted textbooks)',
                ],
                [
                    'category_name' => 'Local',
                    'data_link' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
                    'allotment_prog_code' => 'PRC 061',
                    'allotment_prog_desc' => 'Classroom Materials/Instructional Supplies/Equipment',
                    'moe' => '34710.00',
                    'conversions' => '0.00',
                    'carryover' => '0.00',
                    'comments' => '$36,530 Instructional supplies and materials; -$1,820.00 adjustment for day 20 student membership',
                ],
                [
                    'category_name' => 'Grants/Contracts',
                    'data_link' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
                    'allotment_prog_code' => 'PRC 050',
                    'allotment_prog_desc' => 'ESEA Title I - Basic Program',
                    'moe' => '124600.00',
                    'conversions' => '0.00',
                    'carryover' => '0.00',
                    'comments' => '$124,600.00 Salaries, benefits and non personnel dollars',
                ],
                [
                    'category_name' => 'Enterprise',
                    'data_link' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
                    'allotment_prog_code' => 'PRC 704',
                    'allotment_prog_desc' => 'Community Schools',
                    'moe' => '0.00',
                    'conversions' => '0.00',
                    'carryover' => '13881.48',
                    'comments' => '',
                ],
            ],
            'nonsalaryTotals' => [
                'total' => [
                    'moe' => '161061.00',
                    'conversions' => '0.00',
                    'carryover' => '13881.48',
                    'net' => '174942.48'
                ],
                'State' => [
                    'moe' => '1751.00',
                    'conversions' => '0.00',
                    'carryover' => '0.00',
                    'net' => '1751.00'
                ],
                'Local' => [
                    'moe' => '34710.00',
                    'conversions' => '0.00',
                    'carryover' => '0.00',
                    'net' => '34710.00'
                ],
                'Grants/Contracts' => [
                    'moe' => '124600.00',
                    'conversions' => '0.00',
                    'carryover' => '0.00',
                    'net' => '124600.00'
                ],
                'Enterprise' => [
                    'moe' => '0.00',
                    'conversions' => '0.00',
                    'carryover' => '13881.48',
                    'net' => '13881.48'
                ],
            ],
        ],
        '175' => [
            'schoolId' => 175,
            'schoolYear' => 2014,
            'schoolYearDisplay' => '2014-2015',
            'schoolName' => 'Apex Elementary',
            'schoolGrades' => [
                14 => 'K',
                15 => '01',
                16 => '02',
                17 => '03',
                18 => '04',
                19 => '05',
            ],
            'teacherLinkValue' => 'http://www2.wcpss.net/allotments/downloads/adm_teacher.doc',
            'taLinkValue' => 'http://www2.wcpss.net/allotments/downloads/elem_teacher_assistant.doc',
            'whatif' => [
                [
                    'grade' => 'K',
                    'studentcount' => 98
                ],
                [
                    'grade' => '01',
                    'studentcount' => 114
                ],
                [
                    'grade' => '02',
                    'studentcount' => 113
                ],
                [
                    'grade' => '03',
                    'studentcount' => 112
                ],
                [
                    'grade' => '04',
                    'studentcount' => 119
                ],
                [
                    'grade' => '05',
                    'studentcount' => 125
                ],
                [
                    'grade' => 'TOT',
                    'studentcount' => 681
                ],
            ],
            'whatifMoe' => [
                'teacherMoe' => '310.00',
                'taMoe' => '102.30'
            ],
            'planning' => [
                [
                    'grade' => 'K',
                    'studentcount' => 31
                ],
                [
                    'grade' => '01',
                    'studentcount' => 105
                ],
                [
                    'grade' => '02',
                    'studentcount' => 116
                ],
                [
                    'grade' => '03',
                    'studentcount' => 105
                ],
                [
                    'grade' => '04',
                    'studentcount' => 115
                ],
                [
                    'grade' => '05',
                    'studentcount' => 121
                ],
                [
                    'grade' => 'TOT',
                    'studentcount' => 593
                ],
            ],
            'planningMoe' => [
                'teacherMoe' => '260.00',
                'taMoe' => '74.40'
            ],
            'selfAllotment' => [
                'teacherMoe' => '30.00',
                'taMoe' => '9.30',
            ],
            'adjustments' => [
                'teacherMoe' => '20.00',
                'taMoe' => '18.60',
            ],
            'total' => [
                'teacherMoe' => '310.00',
                'taMoe' => '102.30'
            ],
            'membership' => [
                '01' => [
                    'membership' => [
                        [
                            'grade' => 'K',
                            'studentcount' => 91
                        ],
                        [
                            'grade' => '01',
                            'studentcount' => 112
                        ],
                        [
                            'grade' => '02',
                            'studentcount' => 111
                        ],
                        [
                            'grade' => '03',
                            'studentcount' => 111
                        ],
                        [
                            'grade' => '04',
                            'studentcount' => 118
                        ],
                        [
                            'grade' => '05',
                            'studentcount' => 122
                        ],
                        [
                            'grade' => 'TOT',
                            'studentcount' => 665
                        ],
                    ],
                    'teacherMoe' => 300.00,
                    'taMoe' => 102.30,
                ],
                '05' => [
                    'membership' => [
                        [
                            'grade' => 'K',
                            'studentcount' => 92
                        ],
                        [
                            'grade' => '01',
                            'studentcount' => 113
                        ],
                        [
                            'grade' => '02',
                            'studentcount' => 112
                        ],
                        [
                            'grade' => '03',
                            'studentcount' => 112
                        ],
                        [
                            'grade' => '04',
                            'studentcount' => 119
                        ],
                        [
                            'grade' => '05',
                            'studentcount' => 123
                        ],
                        [
                            'grade' => 'TOT',
                            'studentcount' => 671
                        ],
                    ],
                    'teacherMoe' => 300.00,
                    'taMoe' => 102.30,
                ],
                '07' => [
                    'membership' => [
                        [
                            'grade' => 'K',
                            'studentcount' => 95
                        ],
                        [
                            'grade' => '01',
                            'studentcount' => 114
                        ],
                        [
                            'grade' => '02',
                            'studentcount' => 113
                        ],
                        [
                            'grade' => '03',
                            'studentcount' => 112
                        ],
                        [
                            'grade' => '04',
                            'studentcount' => 119
                        ],
                        [
                            'grade' => '05',
                            'studentcount' => 124
                        ],
                        [
                            'grade' => 'TOT',
                            'studentcount' => 677
                        ],
                    ],
                    'teacherMoe' => 300.00,
                    'taMoe' => 102.30,
                ],
                '10' => [
                    'membership' => [
                        [
                            'grade' => 'K',
                            'studentcount' => 98
                        ],
                        [
                            'grade' => '01',
                            'studentcount' => 114
                        ],
                        [
                            'grade' => '02',
                            'studentcount' => 113
                        ],
                        [
                            'grade' => '03',
                            'studentcount' => 112
                        ],
                        [
                            'grade' => '04',
                            'studentcount' => 119
                        ],
                        [
                            'grade' => '05',
                            'studentcount' => 125
                        ],
                        [
                            'grade' => 'TOT',
                            'studentcount' => 681
                        ],
                    ],
                    'teacherMoe' => 310.00,
                    'taMoe' => 102.30,
                ],
            ],
            'variance' => [
                'teacherMoe' => '0.00',
                'taMoe' => '0.00',
            ],
            'conversions' => [
                'teacherMoe' => '-2.50',
                'taMoe' => '-14.41',
            ],
            'serviceAllotments' => [
                'Area Superintendent Allotments' => [
                    [
                        'allotment_prog_desc' => 'Assistant Principal',
                        'dataLink' => 'http://www2.wcpss.net/departments/allotments/downloads/assistant_principal.doc',
                        'moe' => '11.00',
                        'conv' => '0.00',
                        'net' => 11.00,
                        'comments' => '',
                    ],
                    [
                        'allotment_prog_desc' => 'Assistant Principal Interns',
                        'dataLink' => 'http://www2.wcpss.net/allotments/downloads/ap-inters-total.docx',
                        'moe' => '10.00',
                        'conv' => '0.00',
                        'net' => '10.00',
                        'comments' => '',
                    ],
                    [
                        'allotment_prog_desc' => 'Clerical',
                        'dataLink' => 'http://www2.wcpss.net/departments/allotments/downloads/clerical.doc',
                        'moe' => '36.00',
                        'conv' => '-1.00',
                        'net' => 35.00,
                        'comments' => '12 Lead Sec, 12 Data Mgr, 12 Clerical  Asst; School changed .1 Clerical Asst to .50 Clerical Asst - Early Employment and .5 MOE Clerical Asst-Ext. Employment.; School converted 1 MOE Clerical Asst to .85 MOE Technology Asst-Ext. Employment.',
                    ],
                ],
                'Instructional Services Allotments' => [
                    [
                        'allotment_prog_desc' => 'Academically Gifted',
                        'dataLink' => 'http://www2.wcpss.net/allotments/downloads/ag.doc',
                        'moe' => '12.00',
                        'conv' => '0.00',
                        'net' => '12.00',
                        'comments' => 'Cannot be converted',
                    ],
                    [
                        'allotment_prog_desc' => 'Academics Allotment',
                        'dataLink' => 'http://www2.wcpss.net/departments/allotments/downloads/academics-total.docx',
                        'moe' => '47.00',
                        'conv' => '-1.00',
                        'net' => '46.00',
                        'comments' => '5 MOE Academics-IRT Allotment; 4 MOE Self Allotment; School converted 5 MOE Teacher-Academics to 5 MOE Academics-IRT and 1 MOE Teacher-Academics to $5,555 tutoring funds (during the day).',
                    ],
                    [
                        'allotment_prog_desc' => 'Counselor',
                        'dataLink' => 'http://www2.wcpss.net/allotments/downloads/counselors.doc',
                        'moe' => '10.00',
                        'conv' => '0.00',
                        'net' => '10.00',
                        'comments' => '',
                    ],
                ],
                'Auxiliary Services' => [
                     [
                        'allotment_prog_desc' => 'Child Nutrition',
                        'dataLink' => 'http://www2.wcpss.net/allotments/downloads/cns_service_allotments.doc',
                        'moe' => '30.00',
                        'conv' => '0.00',
                        'net' => '30.00',
                        'comments' => '10 Manager, 10 Asst. Manager, 10 Cashier/Asst.',
                    ],
                    [
                        'allotment_prog_desc' => 'Custodians',
                        'dataLink' => 'http://www2.wcpss.net/allotments/downloads/custodial.doc',
                        'moe' => '44.40',
                        'conv' => '0.00',
                        'net' => '44.40',
                        'comments' => '12 Head Custodian, 30 Custodian',
                    ],
                ],
            ],
            'serviceAllotmentsUpdated' => '06-19-2015',
            'serviceAllotmentsTotals' => [
                'categories' => [
                    'Area Superintendent Allotments' => [
                        'moe' => '69.00',
                        'conv' => '16.35',
                        'net' => '85.35',
                    ],
                    'Instructional Services Allotments' => [
                        'moe' => '232.80',
                        'conv' => '-7.00',
                        'net' => '225.80',
                    ],
                    'Auxiliary Services' => [
                        'moe' => '74.40',
                        'conv' => '0.00',
                        'net' => '74.40',
                    ],
                ],
                'totals' => [
                    'moe' => '376.20',
                    'conv' => '9.35',
                    'net' => '385.55',
                ]
            ],
            'totalMoe' => '780.94',
            'nonsalaryStudentCount' => 681,
            'nonsalary' => [
                [
                    'category_name' => 'State',
                    'data_link' => 'http://www2.wcpss.net/departments/allotments/downloads/supplies-total.docx',
                    'allotment_prog_code' => 'PRC 061',
                    'allotment_prog_desc' => 'Instructional Supplies',
                    'moe' => '21078.00',
                    'conversions' => '0.00',
                    'carryover' => '0.00',
                    'comments' => '$19,327 Instructional Supplies; $1,751.00 Science Allotment',
                ],
                [
                    'category_name' => 'Local',
                    'data_link' => 'http://www2.wcpss.net/departments/allotments/downloads/sp-progs-total.docx',
                    'allotment_prog_code' => 'PRC 032',
                    'allotment_prog_desc' => 'Special Programs',
                    'moe' => '73.87',
                    'conversions' => '0.00',
                    'carryover' => '0.00',
                    'comments' => '$75 for purchase of sanitation supplies for preschool classrooms; -$1.13 align year-end budget;',
                ],
                [
                    'category_name' => 'Local',
                    'data_link' => 'http://www2.wcpss.net/departments/allotments/downloads/supplies-total.docx',
                    'allotment_prog_code' => 'PRC 061',
                    'allotment_prog_desc' => 'Instructional Supplies, Copier, Athletic Funds, Band Equipment Repair',
                    'moe' => '30182.00',
                    'conversions' => '5555.00',
                    'carryover' => '0.00',
                    'comments' => '$29,051 Instructional Supplies; $1,131 Travel; School converted 1 MOE Teacher-Academics to $5,555 tutoring funds (during the day).',
                ],
                [
                    'category_name' => 'Local',
                    'data_link' => 'http://www2.wcpss.net/departments/allotments/downloads/at-risk-supply-dollars.doc',
                    'allotment_prog_code' => 'PRC 068/069',
                    'allotment_prog_desc' => 'At-Risk Student Services/Alternative Schools',
                    'moe' => '0.00',
                    'conversions' => '33323.00',
                    'carryover' => '0.00',
                    'comments' => 'School converted 6 MOE Teacher-Intervention to $33,330 tutoring funds (during the school day); -$7.00 to align budget for June closeout.',
                ],
                [
                    'category_name' => 'Local',
                    'data_link' => '',
                    'allotment_prog_code' => 'PRC 801',
                    'allotment_prog_desc' => 'Capital Outlay',
                    'moe' => '15486.50',
                    'conversions' => '0.00',
                    'carryover' => '0.00',
                    'comments' => 'Record Fund Balance Appropriation for Electronic Equipment',
                ],
                [
                    'category_name' => 'Grants/Contracts',
                    'data_link' => 'http://www2.wcpss.net/departments/allotments/downloads/title-one-supplies.doc',
                    'allotment_prog_code' => 'PRC 050',
                    'allotment_prog_desc' => 'Title I',
                    'moe' => '184576.37',
                    'conversions' => '0.00',
                    'carryover' => '0.00',
                    'comments' => 'Title I budget amount includes salary, benefit, and nonpersonnel dollars.',
                ],
                [
                    'category_name' => 'Enterprise',
                    'data_link' => 'http://www2.wcpss.net/departments/allotments/downloads/community-schools.doc',
                    'allotment_prog_code' => 'PRC 704',
                    'allotment_prog_desc' => 'Community Schools',
                    'moe' => '19480.42',
                    'conversions' => '0.00',
                    'carryover' => '0.00',
                    'comments' => '',
                ],
            ],
            'nonsalaryTotals' => [
                'total' => [
                    'moe' => '270877.16',
                    'conversions' => '38878.00',
                    'carryover' => '13881.48',
                    'net' => '309755.16'
                ],
                'State' => [
                    'moe' => '21078.00',
                    'conversions' => '0.00',
                    'carryover' => '0.00',
                    'net' => '21078.00'
                ],
                'Local' => [
                    'moe' => '45,742.37',
                    'conversions' => '38878.00',
                    'carryover' => '0.00',
                    'net' => '84620.37'
                ],
                'Grants/Contracts' => [
                    'moe' => '184576.37',
                    'conversions' => '0.00',
                    'carryover' => '0.00',
                    'net' => '184576.37'
                ],
                'Enterprise' => [
                    'moe' => ' 19480.42',
                    'conversions' => '0.00',
                    'carryover' => '0.00',
                    'net' => '19480.42'
                ],
            ],
        ],
        '947' => [
            'schoolId' => 947,
            'schoolYear' => 2018,
            'schoolYearDisplay' => '2018-2019',
            'schoolName' => 'Hilburn Academy',
            'schoolGrades' => [
                66 => 'K',
                67 => '01',
                68 => '02',
                69 => '03',
                70 => '04',
                71 => '05',
                72 => '06',
                73 => '07',
                74 => '08',
            ],
            'teacherLinkValue' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
            'taLinkValue' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
            'whatif' => [
                [
                    'grade' => 'K',
                    'studentcount' => 77
                ],
                [
                    'grade' => '01',
                    'studentcount' => 95
                ],
                [
                    'grade' => '02',
                    'studentcount' => 90
                ],
                [
                    'grade' => '03',
                    'studentcount' => 70
                ],
                [
                    'grade' => '04',
                    'studentcount' => 101
                ],
                [
                    'grade' => '05',
                    'studentcount' => 98
                ],
                [
                    'grade' => '06',
                    'studentcount' => 83
                ],
                [
                    'grade' => '07',
                    'studentcount' => 75
                ],
                [
                    'grade' => '08',
                    'studentcount' => 57
                ],
                [
                    'grade' => 'TOT',
                    'studentcount' => 746
                ],
            ],
            'whatifMoe' => [
                'teacherMoe' => '330.00',
                'taMoe' => '74.40'
            ],
            'planning' => [
                [
                    'grade' => 'K',
                    'studentcount' => 94
                ],
                [
                    'grade' => '01',
                    'studentcount' => 94
                ],
                [
                    'grade' => '02',
                    'studentcount' => 84
                ],
                [
                    'grade' => '03',
                    'studentcount' => 81
                ],
                [
                    'grade' => '04',
                    'studentcount' => 92
                ],
                [
                    'grade' => '05',
                    'studentcount' => 109
                ],
                [
                    'grade' => '06',
                    'studentcount' => 92
                ],
                [
                    'grade' => '07',
                    'studentcount' => 79
                ],
                [
                    'grade' => '08',
                    'studentcount' => 59
                ],
                [
                    'grade' => 'TOT',
                    'studentcount' => 784
                ],
            ],
            'planningMoe' => [
                'teacherMoe' => '350.00',
                'taMoe' => '83.70'
            ],
            'selfAllotment' => [
                'teacherMoe' => '0.00',
                'taMoe' => '0.00',
            ],
            'adjustments' => [
                'teacherMoe' => '-20.00',
                'taMoe' => '-9.30',
            ],
            'total' => [
                'teacherMoe' => '330.00',
                'taMoe' => '74.40'
            ],
            'membership' => [
                '01' => [
                    'membership' => [
                        [
                            'grade' => 'K',
                            'studentcount' => 74
                        ],
                        [
                            'grade' => '01',
                            'studentcount' => 90
                        ],
                        [
                            'grade' => '02',
                            'studentcount' => 88
                        ],
                        [
                            'grade' => '03',
                            'studentcount' => 67
                        ],
                        [
                            'grade' => '04',
                            'studentcount' => 98
                        ],
                        [
                            'grade' => '05',
                            'studentcount' => 97
                        ],
                        [
                            'grade' => '06',
                            'studentcount' => 83
                        ],
                        [
                            'grade' => '07',
                            'studentcount' => 74
                        ],
                        [
                            'grade' => '08',
                            'studentcount' => 57
                        ],
                        [
                            'grade' => 'TOT',
                            'studentcount' => 728
                        ],
                    ],
                    'teacherMoe' => 320.00,
                    'taMoe' => 74.40,
                ],
                '05' => [
                    'membership' => [
                        [
                            'grade' => 'K',
                            'studentcount' => 76
                        ],
                        [
                            'grade' => '01',
                            'studentcount' => 94
                        ],
                        [
                            'grade' => '02',
                            'studentcount' => 89
                        ],
                        [
                            'grade' => '03',
                            'studentcount' => 69
                        ],
                        [
                            'grade' => '04',
                            'studentcount' => 100
                        ],
                        [
                            'grade' => '05',
                            'studentcount' => 97
                        ],
                        [
                            'grade' => '06',
                            'studentcount' => 83
                        ],
                        [
                            'grade' => '07',
                            'studentcount' => 75
                        ],
                        [
                            'grade' => '08',
                            'studentcount' => 57
                        ],
                        [
                            'grade' => 'TOT',
                            'studentcount' => 740
                        ],
                    ],
                    'teacherMoe' => 330.00,
                    'taMoe' => 74.40,
                ],
                '07' => [
                    'membership' => [
                        [
                            'grade' => 'K',
                            'studentcount' => 77
                        ],
                        [
                            'grade' => '01',
                            'studentcount' => 95
                        ],
                        [
                            'grade' => '02',
                            'studentcount' => 90
                        ],
                        [
                            'grade' => '03',
                            'studentcount' => 70
                        ],
                        [
                            'grade' => '04',
                            'studentcount' => 101
                        ],
                        [
                            'grade' => '05',
                            'studentcount' => 98
                        ],
                        [
                            'grade' => '06',
                            'studentcount' => 83
                        ],
                        [
                            'grade' => '07',
                            'studentcount' => 75
                        ],
                        [
                            'grade' => '08',
                            'studentcount' => 57
                        ],
                        [
                            'grade' => 'TOT',
                            'studentcount' => 746
                        ],
                    ],
                    'teacherMoe' => 330.00,
                    'taMoe' => 74.40,
                ],
                '10' => [
                    'membership' => [
                        [
                            'grade' => 'K',
                            'studentcount' => 77
                        ],
                        [
                            'grade' => '01',
                            'studentcount' => 95
                        ],
                        [
                            'grade' => '02',
                            'studentcount' => 90
                        ],
                        [
                            'grade' => '03',
                            'studentcount' => 70
                        ],
                        [
                            'grade' => '04',
                            'studentcount' => 101
                        ],
                        [
                            'grade' => '05',
                            'studentcount' => 98
                        ],
                        [
                            'grade' => '06',
                            'studentcount' => 83
                        ],
                        [
                            'grade' => '07',
                            'studentcount' => 75
                        ],
                        [
                            'grade' => '08',
                            'studentcount' => 57
                        ],
                        [
                            'grade' => 'TOT',
                            'studentcount' => 746
                        ],
                    ],
                    'teacherMoe' => 330.00,
                    'taMoe' => 74.40,
                ],
            ],
            'variance' => [
                'teacherMoe' => '0.00',
                'taMoe' => '0.00',
            ],
            'conversions' => [
                'teacherMoe' => '-13.00',
                'taMoe' => '0.00',
            ],
            'serviceAllotments' => [
                'Area Superintendent Allotments' => [
                    [
                        'allotment_prog_desc' => 'Assistant Principal',
                        'dataLink' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
                        'moe' => '21.00',
                        'conv' => '0.00',
                        'net' => '21.00',
                        'comments' => '',
                    ],
                    [
                        'allotment_prog_desc' => 'Clerical',
                        'dataLink' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
                        'moe' => '58.00',
                        'conv' => '0.00',
                        'net' => '58.00',
                        'comments' => '12 Lead Sec, 12 Data Mgr, 12 Bkkper, 12 Cler. Asst., 10 Recept.',
                    ],
                    [
                        'allotment_prog_desc' => 'Principal',
                        'dataLink' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
                        'moe' => '12.00',
                        'conv' => '0.00',
                        'net' => 12.00,
                        'comments' => '',
                    ],
                ],
                'Instructional Services Allotments' => [
                    [
                        'allotment_prog_desc' => 'Academically/Intellectually Gifted',
                        'dataLink' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
                        'moe' => '10.00',
                        'conv' => '0.00',
                        'net' => '10.00',
                        'comments' => '',
                    ],
                    [
                        'allotment_prog_desc' => 'Alternative Learning Centers',
                        'dataLink' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
                        'moe' => '5.00',
                        'conv' => '0.00',
                        'net' => '5.00',
                        'comments' => '',
                    ],
                    [
                        'allotment_prog_desc' => 'Career Technical Education',
                        'dataLink' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
                        'moe' => '10.00',
                        'conv' => '0.00',
                        'net' => '10.00',
                        'comments' => '10 MOE Teacher-CTE',
                    ],
                ],
                'Auxiliary Services' => [
                    [
                        'allotment_prog_desc' => 'Custodial Services',
                        'dataLink' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
                        'moe' => '12.00',
                        'conv' => '0.00',
                        'net' => '12.00',
                        'comments' => '12 Head Custodian',
                    ],
                    [
                        'allotment_prog_desc' => 'School Nutrition',
                        'dataLink' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
                        'moe' => '30.00',
                        'conv' => '0.00',
                        'net' => '30.00',
                        'comments' => '10 CNS MANAGER, 10 CNS ASSISTANT MANAGER, 10 CASHIER/ASSISTANT',
                    ],
                ],
            ],
            'serviceAllotmentsUpdated' => '05-30-2019',
            'serviceAllotmentsTotals' => [
                'categories' => [
                    'Area Superintendent Allotments' => [
                        'moe' => '109.00',
                        'conv' => '0.00',
                        'net' => '109.00',
                    ],
                    'Instructional Services Allotments' => [
                        'moe' => '353.55',
                        'conv' => '13.00',
                        'net' => '366.55',
                    ],
                    'Auxiliary Services' => [
                        'moe' => '42.00',
                        'conv' => '0.00',
                        'net' => '42.00',
                    ],
                ],
                'totals' => [
                    'moe' => '504.55',
                    'conv' => '13.00',
                    'net' => '517.55',
                ]
            ],
            'totalMoe' => '908.95',
            'nonsalaryStudentCount' => 746,
            'nonsalary' => [
                [
                    'category_name' => 'State',
                    'data_link' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
                    'allotment_prog_code' => 'PRC 014',
                    'allotment_prog_desc' => 'Career Technical Education - Program Support Funds',
                    'moe' => '1244.17',
                    'conversions' => '0.00',
                    'carryover' => '0.00',
                    'comments' => '$1,500.00 CTE Allotment for supplies and material; $-252.78 Unspent funds revert back to CTE program; $-3.05 Unspent funds revert back to program',
                ],
                [
                    'category_name' => 'State',
                    'data_link' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
                    'allotment_prog_code' => 'PRC 131',
                    'allotment_prog_desc' => 'Textbook and Digital Resources',
                    'moe' => '776.43',
                    'conversions' => '0.00',
                    'carryover' => '0.00',
                    'comments' => '$1751.00 Science Allotment for ES, $1800.00 Science Allotment for MS; $-2,774.57 Unspent funds revert',
                ],
                [
                    'category_name' => 'Local',
                    'data_link' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
                    'allotment_prog_code' => 'PRC 032',
                    'allotment_prog_desc' => 'Children with Special Needs',
                    'moe' => '1272.25',
                    'conversions' => '0.00',
                    'carryover' => '0.00',
                    'comments' => '$150.00 Health and Sanitation supplies; $250.00  Pre-School Health and Sanitation; $150.00 CBI funds; $360.00 Special Olympics funds; $362.25 Special Olympics',
                ],
                [
                    'category_name' => 'Local',
                    'data_link' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
                    'allotment_prog_code' => 'PRC 061',
                    'allotment_prog_desc' => 'Classroom Materials/Instructional Supplies and Equipment',
                    'moe' => '49490.00',
                    'conversions' => '0.00',
                    'carryover' => '0.00',
                    'comments' => '$50,960.00 Instructional Supplies; $1,000 Instrument Repair;; $-2,470.00 Adjustment for 10 Day student membership',
                ],
                [
                    'category_name' => 'Grants/Contracts',
                    'data_link' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
                    'allotment_prog_code' => 'PRC 050',
                    'allotment_prog_desc' => 'ESEA Title I - Basic Program',
                    'moe' => '122113.31',
                    'conversions' => '0.00',
                    'carryover' => '0.00',
                    'comments' => 'Salaries, benefits and non personnel dollars',
                ],
                [
                    'category_name' => 'Grants/Contracts',
                    'data_link' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
                    'allotment_prog_code' => 'PRC 115',
                    'allotment_prog_desc' => 'ESEA Title I - School Improvement - TSI',
                    'moe' => '9762.39',
                    'conversions' => '0.00',
                    'carryover' => '0.00',
                    'comments' => '$9,762.39 To record budget;',
                ],
                [
                    'category_name' => 'Enterprise',
                    'data_link' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
                    'allotment_prog_code' => 'PRC 701',
                    'allotment_prog_desc' => 'Before/After School Care',
                    'moe' => '170096.00',
                    'conversions' => '0.00',
                    'carryover' => '51791.83',
                    'comments' => '',
                ],

                [
                    'category_name' => 'Enterprise',
                    'data_link' => 'https://drive.google.com/file/d/0B6KzNM46NlBda3NramkteHpuSFk/view',
                    'allotment_prog_code' => 'PRC 704',
                    'allotment_prog_desc' => 'Community Schools',
                    'moe' => '9150.48',
                    'conversions' => '0.00',
                    'carryover' => '8340.31',
                    'comments' => '$8,340.31 Carryover;$2,001.26 4th Quarter Disbursement; $4,229.68  1st Quarter Disbursement; $1,939.48 2nd Quarter Disbursement; $980.06 3rd Quarter Disbursement',
                ],
            ],
            'nonsalaryTotals' => [
                'total' => [
                    'moe' => '363905.03',
                    'conversions' => '0.00',
                    'carryover' => '60132.14',
                    'net' => ' 424037.17'
                ],
                'State' => [
                    'moe' => '2020.60',
                    'conversions' => '0.00',
                    'carryover' => '0.00',
                    'net' => '2020.60'
                ],
                'Local' => [
                    'moe' => '50762.25',
                    'conversions' => '0.00',
                    'carryover' => '0.00',
                    'net' => '50762.25'
                ],
                'Grants/Contracts' => [
                    'moe' => '131875.70',
                    'conversions' => '0.00',
                    'carryover' => '0.00',
                    'net' => '131875.70'
                ],
                'Enterprise' => [
                    'moe' => ' 179246.48',
                    'conversions' => '0.00',
                    'carryover' => '60132.14',
                    'net' => ' 239378.62'
                ],
            ],
        ],
        '143' => [
            'schoolId' => 143,
            'schoolYear' => 2013,
            'schoolYearDisplay' => '2013-2014',
            'schoolName' => 'Wake Young Womens Leadership Academy',
            'schoolGrades' => [
                7 => '06',
                8 => '07',
                9 => '08',
                10 => '09',
                11 => '10',
            ],
            'teacherLinkValue' => 'http://www2.wcpss.net/allotments/downloads/adm_teacher.doc',
            'taLinkValue' => 'http://www2.wcpss.net/allotments/downloads/elem_teacher_assistant.doc',
            'whatif' => [
                [
                    'grade' => '06',
                    'studentcount' => 56
                ],
                [
                    'grade' => '07',
                    'studentcount' => 58
                ],
                [
                    'grade' => '08',
                    'studentcount' => 55
                ],
                [
                    'grade' => '09',
                    'studentcount' => 50
                ],
                [
                    'grade' => '10',
                    'studentcount' => 42
                ],
                [
                    'grade' => 'TOT',
                    'studentcount' => 261
                ],
            ],
            'whatifMoe' => [
                'teacherMoe' => '100.00',
                'taMoe' => '0.00',
            ],
            'planning' => [
                [
                    'grade' => '06',
                    'studentcount' => 52
                ],
                [
                    'grade' => '07',
                    'studentcount' => 57
                ],
                [
                    'grade' => '08',
                    'studentcount' => 54
                ],
                [
                    'grade' => '09',
                    'studentcount' => 45
                ],
                [
                    'grade' => '10',
                    'studentcount' => 47
                ],
                [
                    'grade' => 'TOT',
                    'studentcount' => 255
                ],
            ],
            'planningMoe' => [
                'teacherMoe' => '100.00',
                'taMoe' => '0.00',
            ],
            'selfAllotment' => [
                'teacherMoe' => '0.00',
                'taMoe' => '0.00',
            ],
            'adjustments' => [
                'teacherMoe' => '-10.00',
                'taMoe' => '0.00',
            ],
            'total' => [
                'teacherMoe' => '90.00',
                'taMoe' => '0.00',
            ],
            'membership' => [
                '01' => [
                    'membership' => [
                        [
                            'grade' => '06',
                            'studentcount' => 58
                        ],
                        [
                            'grade' => '07',
                            'studentcount' => 53
                        ],
                        [
                            'grade' => '08',
                            'studentcount' => 48
                        ],
                        [
                            'grade' => '09',
                            'studentcount' => 46
                        ],
                        [
                            'grade' => '10',
                            'studentcount' => 41
                        ],
                        [
                            'grade' => 'TOT',
                            'studentcount' => 246
                        ],
                    ],
                    'teacherMoe' => 90.00,
                    'taMoe' => '0.00',
                ],
                '05' => [
                    'membership' => [
                        [
                            'grade' => '06',
                            'studentcount' => 59
                        ],
                        [
                            'grade' => '07',
                            'studentcount' => 54
                        ],
                        [
                            'grade' => '08',
                            'studentcount' => 49
                        ],
                        [
                            'grade' => '09',
                            'studentcount' => 46
                        ],
                        [
                            'grade' => '10',
                            'studentcount' => 42
                        ],
                        [
                            'grade' => 'TOT',
                            'studentcount' => 250
                        ],
                    ],
                    'teacherMoe' => 90.00,
                    'taMoe' => '0.00',
                ],
                '07' => [
                    'membership' => [
                        [
                            'grade' => '06',
                            'studentcount' => 59
                        ],
                        [
                            'grade' => '07',
                            'studentcount' => 54
                        ],
                        [
                            'grade' => '08',
                            'studentcount' => 49
                        ],
                        [
                            'grade' => '09',
                            'studentcount' => 46
                        ],
                        [
                            'grade' => '10',
                            'studentcount' => 43
                        ],
                        [
                            'grade' => 'TOT',
                            'studentcount' => 251
                        ],
                    ],
                    'teacherMoe' => 90.00,
                    'taMoe' => '0.00',
                ],
                '10' => [
                    'membership' => [
                        [
                            'grade' => '06',
                            'studentcount' => 58
                        ],
                        [
                            'grade' => '07',
                            'studentcount' => 54
                        ],
                        [
                            'grade' => '08',
                            'studentcount' => 49
                        ],
                        [
                            'grade' => '09',
                            'studentcount' => 46
                        ],
                        [
                            'grade' => '10',
                            'studentcount' => 42
                        ],
                        [
                            'grade' => 'TOT',
                            'studentcount' => 249
                        ],
                    ],
                    'teacherMoe' => 90.00,
                    'taMoe' => '0.00',
                ],
            ],
            'variance' => [
                'teacherMoe' => '0.00',
                'taMoe' => '0.00',
            ],
            'conversions' => [
                'teacherMoe' => '-14.25',
                'taMoe' => '0.00',
            ],
            'serviceAllotments' => [
                'Area Superintendent Allotments' => [
                    [
                        'allotment_prog_desc' => 'Assistant Principal',
                        'dataLink' => 'http://www2.wcpss.net/departments/allotments/downloads/assistant_principal.doc',
                        'moe' => '10.00',
                        'conv' => '2.00',
                        'net' => '12.00',
                        'comments' => 'School converted 2.34 MOE Teacher to 1 MOE Asst. Principal-Early Emp and 1 MOE Asst. Principal-Ext Emp.',
                    ],
                    [
                        'allotment_prog_desc' => 'Clerical',
                        'dataLink' => 'http://www2.wcpss.net/departments/allotments/downloads/clerical.doc',
                        'moe' => '29.00',
                        'conv' => '4.00',
                        'net' => '33.00',
                        'comments' => '5 Clerical Asst, 12 Student Information Data Mgr, 12 Lead Sec; School converted 2.65 MOE Teacher to 4 MOE Clerical Asst.',
                    ],
                    [
                        'allotment_prog_desc' => 'Other Teacher',
                        'dataLink' => 'http://www2.wcpss.net/allotments/downloads/other_teacher.doc',
                        'moe' => '50.00',
                        'conv' => '4.50',
                        'net' => 54.50,
                        'comments' => '10 MOE Teacher for 2013-14 only; School converted 4 MOE Teacher to 4 MOE Coordinating Teacher, and .5 MOE Teacher to .5 MOE Coordinating Teacher-Ext. Emp.',
                    ],
                ],
                'Instructional Services Allotments' => [
                    [
                        'allotment_prog_desc' => 'Academically Gifted',
                        'dataLink' => 'http://www2.wcpss.net/allotments/downloads/ag.doc',
                        'moe' => '4.00',
                        'conv' => '0.00',
                        'net' => '4.00',
                        'comments' => 'Can not be converted',
                    ],
                    [
                        'allotment_prog_desc' => 'Academics Allotment',
                        'dataLink' => 'http://www2.wcpss.net/departments/allotments/downloads/academics-total.docx',
                        'moe' => '11.00',
                        'conv' => '0.00',
                        'net' => 11.00,
                        'comments' => '8 (MS); 3 (HS); 5 MOE Academics-IRT Allotment',
                    ],
                    [
                        'allotment_prog_desc' => 'Career &amp; Technical Ed',
                        'dataLink' => 'http://www2.wcpss.net/allotments/downloads/career_tech_ed.doc',
                        'moe' => '20.00',
                        'conv' => '0.00',
                        'net' => 20.00,
                        'comments' => '5 CD Coordinator, 15 CTE Teacher; School converted 5 MOE CTE Teacher to 5 MOE CD Coordinator.',
                    ],
                ],
            ],
            'serviceAllotmentsUpdated' => '04-11-2014',
            'serviceAllotmentsTotals' => [
                'categories' => [
                    'Area Superintendent Allotments' => [
                        'moe' => '101.00',
                        'conv' => '10.50',
                        'net' => '111.50',
                    ],
                    'Instructional Services Allotments' => [
                        'moe' => '102.25',
                        'conv' => '0.50',
                        'net' => '102.75',
                    ],
                ],
                'totals' => [
                    'moe' => '203.25',
                    'conv' => '11.00',
                    'net' => '214.25',
                ]
            ],
            'totalMoe' => '290.00',
            'nonsalaryStudentCount' => 249,
            'nonsalary' => [
                [
                    'category_name' => 'State',
                    'data_link' => 'http://www2.wcpss.net/departments/allotments/downloads/cte-state.doc',
                    'allotment_prog_code' => 'PRC 014',
                    'allotment_prog_desc' => 'Career and Technical Education',
                    'moe' => '825.39',
                    'conversions' => '0.00',
                    'carryover' => '0.00',
                    'comments' => '',
                ],
                [
                    'category_name' => 'State',
                    'data_link' => 'http://www2.wcpss.net/departments/allotments/downloads/supplies-total.docx',
                    'allotment_prog_code' => 'PRC 061',
                    'allotment_prog_desc' => 'Instructional Supplies',
                    'moe' => '10463.20',
                    'conversions' => '0.00',
                    'carryover' => '0.00',
                    'comments' => 'Instructional supplies, Science material allotment, Common Core Math printing allotment',
                ],
                [
                    'category_name' => 'Local',
                    'data_link' => 'http://www2.wcpss.net/departments/allotments/downloads/sp-progs-total.docx',
                    'allotment_prog_code' => 'PRC 032',
                    'allotment_prog_desc' => 'Special Programs ',
                    'moe' => '583.50',
                    'conversions' => '0.00',
                    'carryover' => '0.00',
                    'comments' => '',
                ],
                [
                    'category_name' => 'Local',
                    'data_link' => 'http://www2.wcpss.net/departments/allotments/downloads/supplies-total.docx',
                    'allotment_prog_code' => 'PRC 061',
                    'allotment_prog_desc' => 'Instructional Supplies, Copier, Athletic Funds, Band Equipment Repair',
                    'moe' => '11609.66',
                    'conversions' => '23541.00',
                    'carryover' => '0.00',
                    'comments' => 'Instructional Supplies, Travel, Common Core Professional Development Carryover; School converted 1.5 MOE Teacher to $8,289 Inst. Supplies, 1.3 MOE Teacher to $7,184 Tutoring Funds, and 1.46 MOE Teacher to $8,068 Curriculum Develpment Pay.',
                ],
                [
                    'category_name' => 'Local',
                    'data_link' => 'http://www2.wcpss.net/departments/allotments/downloads/startup-new-schools.doc',
                    'allotment_prog_code' => 'PRC 848',
                    'allotment_prog_desc' => 'Startup Dollars for New Schools',
                    'moe' => '2278.72',
                    'conversions' => '0.00',
                    'carryover' => '0.00',
                    'comments' => 'Carryover funds for start up staff development (0217). Funds must be spent by June 30, 2014.',
                ],
                [
                    'category_name' => 'Local',
                    'data_link' => null,
                    'allotment_prog_code' => 'PRC 859',
                    'allotment_prog_desc' => 'Building Program',
                    'moe' => '317914.66',
                    'conversions' => '0.00',
                    'carryover' => '0.00',
                    'comments' => '',
                ],
            ],
            'nonsalaryTotals' => [
                'total' => [
                    'moe' => ' 343675.13',
                    'conversions' => '23541.00',
                    'carryover' => '0.00',
                    'net' => ' 367216.13'
                ],
                'State' => [
                    'moe' => '11288.59',
                    'conversions' => '0.00',
                    'carryover' => '0.00',
                    'net' => '11288.59'
                ],
                'Local' => [
                    'moe' => ' 332386.54',
                    'conversions' => '23541.00',
                    'carryover' => '0.00',
                    'net' => '355927.54'
                ],
            ],
        ],
    ];

    public static function getSchoolData($schoolId)
    {
        if (isset(self::$schoolData[$schoolId])) {
            return self::$schoolData[$schoolId];
        }
        return [];
    }
}
