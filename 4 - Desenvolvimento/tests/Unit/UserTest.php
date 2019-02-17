<?php

namespace Tests\Unit;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use DatabaseTransactions;

    public function test_create_user(){
        $user = User::create([
            'name' => 'Admin user',
            'email' => 'admin@admin.com',
            'password' => bcrypt(123456),
            'enrolment_number' => '1200660'
        ]);


        $this->assertDatabaseHas('users', ['name' => 'Admin User']);

    }
}
