<?php

namespace Tests\Unit;

use App\Services\Membership;
use App\Models\School;
use PHPUnit\Framework\TestCase;

class MembershipTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCanGetMembership()
    {
        $school = new School(1454); // 2021 Abbots Creek Elem
        $membership = new Membership($school);
        $this->assertTrue(true);
    }
}
