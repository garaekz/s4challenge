<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersWithOrdersTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    public function test_all_users_are_seeded(): void
    {
        $this->assertDatabaseCount('users', 10);
    }

    public function test_returns_all_users_with_orders(): void
    {
        $service = new \App\Services\UserService();
        $users = $service->getAllUsersWithOrders();

        $this->assertCount(10, $users);
    }
}
