<?php

declare(strict_types=1);

use ParallelChange\AuthenticationService;

class AuthenticationServiceTest extends PHPUnit_Framework_TestCase
{
    public function testAdministratorIsAlwaysAuthenticated()
    {
        $authenticationService = new AuthenticationService();
        $adminId = 12345;
        $this->assertTrue($authenticationService->isAuthenticated($adminId));
    }

    public function testNormalUserIsNotInitiallyAuthenticated()
    {
        $authenticationService = new AuthenticationService();
        $userId = 11111;
        $this->assertFalse($authenticationService->isAuthenticated($userId));
    }
}
