<?php

namespace Tests\Unit;

use App\Models\CurrentUser;
use App\Services\EnvironmentService;
use Tests\TestCase;

class EnvironmentServiceTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function dontDoIt() // testCanGetCurrentUser()
    {

        $currentUser = new CurrentUser();
        EnvironmentService::getcurrentUser($currentUser, []);

        $this->assertIsNumeric($currentUser->getPersonId());
        $this->assertIsString($currentUser->getName());
        $this->assertIsArray($currentUser->getManagers());
    }
}
