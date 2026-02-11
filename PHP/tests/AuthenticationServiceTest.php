<?php

declare(strict_types=1);

use ParallelChange\AuthenticationService;
use PHPUnit\Framework\TestCase;

class AuthenticationServiceTest extends TestCase
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
