<?php


namespace App\Services;


use App\Models\Allotment;
use App\Models\Category;
use App\Models\School;
use DateTime;

class ServiceAllotments
{
    private $school;
    private $dataSet;


    public function __construct(School $school)
    {
        $this->school = $school;

        $this->prepareDataSet();

        // part of the header
        $this->appendToDataSet('lastUpdate', $this->getLastUpdateDate());
    }

    public function buildTableData()
    {
        $this->appendToDataSet('serviceAllotments', $this->getServiceAllotments());
    }

    public function getTotalMoe()
    {
        $allotments = new AllotmentCalculations($this->school);
        $total = $allotments->getAllotmentTotals();
        $conversions = $allotments->getConversionData();
        $service = $this->getServiceAllotmentTotals();
        return floatval($total['teacherMoe']) + floatval($conversions['teacherMoe'])
            + floatval($total['taMoe']) + floatval($conversions['taMoe']) + floatval($service['totals']['net']);
    }

    public function getServiceAllotments()
    {
        $serviceAllotments = [];
        $serviceAllotmentsTotals = [];
        $categories = Category::where('salary_nonsalary_ind', 'S')
            ->where('school_year', $this->school->school_year)
            ->orderBy('display_order')
            ->get();

        foreach ($categories as $category) {
            $allotments = Allotment::select('allotment_types.allotment_prog_desc', 'allotment_types.data_link',
                                            'allotments.*')
                ->join('allotment_types', function ($join) use ($category) {
                    $join->on('allotments.allotment_type_id', '=', 'allotment_types.id')
                        ->where('allotment_types.category_id', $category->category_id);
                })
                ->where('allotments.school_id', $this->school->id)
                ->orderBy('allotment_types.allotment_prog_desc')
                ->get();

            $serviceAllotments[$category->category_name] = [];

            foreach ($allotments as $allotment) {
                // skip what's not used
                if ($allotment->moe == '0.00' && $allotment->conversions == '0.00' && $allotment->comments == '') {
                    continue;
                }
                if (!isset($serviceAllotmentsTotals['categories'][$category->category_name])) {
                    $serviceAllotmentsTotals['categories'][$category->category_name] = [
                        'moe' => 0,
                        'conv' => 0,
                        'net' => 0
                    ];
                }

                $moe = (isset($allotment->moe)) ? $allotment->moe : 0;
                $conversions = (isset($allotment->conversions)) ? $allotment->conversions : 0;

                $serviceAllotments[$category->category_name][] = [
                    'allotment_prog_desc' => trim($allotment->allotment_prog_desc),
                    'dataLink' => $allotment->data_link,
                    'moe' => $moe,
                    'conv' => $conversions,
                    'net' => ($moe + $conversions),
                    'comments' => $allotment->comments
                ];

                $serviceAllotmentsTotals['categories'][$category->category_name]['moe'] += $moe;
                $serviceAllotmentsTotals['categories'][$category->category_name]['conv'] += $conversions;
                $serviceAllotmentsTotals['categories'][$category->category_name]['net']
                    += ($moe + $conversions);
            }
        }

        // store totals in dataSet
        $this->appendToDataSet('serviceAllotmentsTotals', $serviceAllotmentsTotals);

        return $serviceAllotments;
    }

    public function getServiceAllotmentTotals()
    {
        if (!isset($this->dataSet['serviceAllotments'])) {
            $this->appendToDataSet('serviceAllotments', $this->getServiceAllotments());
        }

        $totals = [
            'moe' => 0,
            'conv' => 0,
            'net' => 0
        ];

        foreach ($this->dataSet['serviceAllotmentsTotals']['categories'] as $catName => $data) {
            $totals['moe'] += $data['moe'];
            $totals['conv'] += $data['conv'];
            $totals['net'] += $data['net'];
        }

        return ['totals' => $totals];
    }

    public function getLastUpdateDate()
    {
        $lastRecord = Allotment::where('school_id', $this->school->id)
            ->where('date_modified', '!=', null)
            ->orderBy('date_modified', 'DESC')
            ->first();
        if ($lastRecord) {
            $date = DateTime::createFromFormat('Y-m-d H:i:s', $lastRecord->date_modified);
        } else {
            $lastRecord = Allotment::where('school_id', $this->school->id)
                ->orderBy('date_created', 'DESC')
                ->first();
            $date = DateTime::createFromFormat('Y-m-d H:i:s', $lastRecord->date_created);
        }

        return $date->format('m-d-Y');
    }

    private function prepareDataSet()
    {
        $this->dataSet = [
            'schoolId' => $this->school->id,
            'schoolName' => $this->school->school_name,
            'schoolNum' => $this->school->school,
        ];
    }

    private function appendToDataSet($key, $value)
    {
        $this->dataSet[$key] = $value;
    }
}
