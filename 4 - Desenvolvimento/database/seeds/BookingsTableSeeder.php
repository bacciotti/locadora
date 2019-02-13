<?php

use Illuminate\Database\Seeder;
use App\Models\Genre;

class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('genres')->delete();

        Genre::create(['name'=>'Ação']);
        Genre::create(['name'=>'Aventura']);
        Genre::create(['name'=>'Ficção']);
        Genre::create(['name'=>'Romance']);
        Genre::create(['name'=>'Terror']);
    }
}
