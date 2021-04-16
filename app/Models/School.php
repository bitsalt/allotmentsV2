<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_num',
        'school_year',
        'school_name',
        'magnet_ind',
        'restart_ind',
        'school_grade_level_id',
        'school_type_id',
        'has_schedule_assistance',
        'schedule_assistance_hours',
        'grandfathered',
        'grandfathered_moe',
    ];
}
