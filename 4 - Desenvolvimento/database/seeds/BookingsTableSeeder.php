<?php

use Illuminate\Database\Seeder;
use App\Models\Booking;

class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('bookings')->delete();

        Booking::create([
            'date'=>'2001-12-21',
            'user_id'=>1,
        ]);
        Booking::create([
            'date'=>'2001-12-22',
            'user_id'=>2,
        ]);
    }
}
