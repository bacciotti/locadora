<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(MediaTypesTableSeeder::class);
        $this->call(DistributorsTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        //$this->call(BookingsTableSeeder::class);
        //$this->call(LeasingsTableSeeder::class);
        //$this->call(PaymentsTableSeeder::class);
        //$this->call(CheckPaymentsTableSeeder::class);
        //$this->call(CardPaymentsTableSeeder::class);

        //$this->call(GenresMoviesTableSeeder::class);
        //$this->call(ItemsLeasingsTableSeeder::class);
        //$this->call(MoviesBookingsTableSeeder::class);
    }
}
