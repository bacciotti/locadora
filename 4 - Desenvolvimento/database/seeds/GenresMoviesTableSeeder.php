<?php

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenresMoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('genres')->delete();

        Genre::create([
            'name'=>'Ação',
            'name'=>'Aventura',
            'name'=>'Ficção',
            'name'=>'Romance',
            'name'=>'Terror',
        ]);
    }
}
