<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\User::class)->create([
            'email'=> 'admin@gmail.com',
            'enrolment_number' => 100000,
            'status' => 1
        ])->each(function (\App\Models\User $user){
            User::Role($user, User::ROLE_ADMIN);
            $user->save();
        });

        factory(\App\Models\User::class)->create([
            'email'=> 'cliente@gmail.com',
            'enrolment_number' => 100001,
            'status' => 1,
            'userable_type' => User::ROLE_CLIENT,
        ]);

        factory(\App\Models\User::class)->create([
            'email'=> 'dependente@gmail.com',
            'enrolment_number' => 100002,
            'status' => 1,
            'userable_type' => User::ROLE_DEPENDENT,
        ]);

        factory(\App\Models\User::class)->create([
            'email'=> 'wemomax@gmail.com',
            'enrolment_number' => 100003,
            'status' => 1,
            'userable_type' => User::ROLE_ADMIN,
        ]);
    }
}
