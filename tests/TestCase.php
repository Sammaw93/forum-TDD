<?php

namespace Tests;

use App\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use function Tests\utilities\create;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    // function used for the authenticated user to be re-used throughout testing for readability
    protected function signIn($user = null)
    {
        $user = $user ?: create(User::class);

        $this->actingAs($user);

        return $this;
    }
}
