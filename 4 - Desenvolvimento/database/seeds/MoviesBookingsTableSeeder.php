<?php

use Illuminate\Database\Seeder;
use App\Models\Genre;

class MoviesBookingsTableSeeder extends Seeder
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
        Genre::create(['name'=>'Animação']);
        Genre::create(['name'=>'Aventura']);
        Genre::create(['name'=>'Comédia']);
        Genre::create(['name'=>'Documentário']);
        Genre::create(['name'=>'Drama']);
        Genre::create(['name'=>'Ficção']);
        Genre::create(['name'=>'Guerra']);
        Genre::create(['name'=>'Musical']);
        Genre::create(['name'=>'Policial']);
        Genre::create(['name'=>'Romance']);
        Genre::create(['name'=>'Suspense']);
        Genre::create(['name'=>'Terror']);
    }
}
