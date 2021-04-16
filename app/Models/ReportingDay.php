<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportingDay extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_year',
        'report_days',
        'order_id',
    ];
}
