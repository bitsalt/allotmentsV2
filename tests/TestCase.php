<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

//    protected $testSchoolName = 'Adams Elementary';
//    protected $testSchoolYear = 2020;
//    protected $testSchoolName = 'Apex Elementary';
//    protected $testSchoolYear = 2014;
//    protected $testSchoolName = 'Hilburn Academy';
//    protected $testSchoolYear = 2018;
    protected $testSchoolName = 'Wake Young Womens Leadership Academy';
    protected $testSchoolYear = 2013;
}
