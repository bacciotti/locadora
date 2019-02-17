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

        $userProfile = UserProfile::create([
            'user_id' => $user->id,
            'gender' => 'M',
            'cpf' => '06744148977',
            'zip' => 'home_phone',
        ])


        $this->assertDatabaseHas('users', ['name' => 'Admin User']);
        $this->assertDatabaseHas('user_profile', [
            'user_id' => $user->id,
            'address'])

    }
}
