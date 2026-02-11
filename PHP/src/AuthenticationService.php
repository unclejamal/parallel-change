<?php

namespace ParallelChange;

class AuthenticationService
{
    // The goal is to replace the following method with:
    // public function isAuthenticated($role, $id) {
    public function isAuthenticated($id): bool
    {
        return $id === 12345;
    }
}
