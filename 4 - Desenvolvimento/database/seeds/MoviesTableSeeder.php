<?php

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('movies')->delete();

        Movie::create([
            'original_title'=>'Title Origin 1',
            'pt_br_tittle'=>'Titulo em PT-BR UM',
            'countries'=>'Brasil',
            'year'=>2001,
            'director'=>'Welington',
            'cast'=>'Elenco 1',
            'sinopse'=>'Sinopse do filme 1',
            'duration'=>'2h',
        ]);
        Movie::create([
            'original_title'=>'Title Origin 2',
            'pt_br_tittle'=>'Titulo em PT-BR UM',
            'countries'=>'Espanha',
            'year'=>2002,
            'director'=>'Lucas',
            'cast'=>'Elenco 2',
            'sinopse'=>'Sinopse do filme 2',
            'duration'=>'2h30',
        ]);
        Movie::create([
            'original_title'=>'Title Origin 3',
            'pt_br_tittle'=>'Titulo em PT-BR UM',
            'countries'=>'Paraguai',
            'year'=>2003,
            'director'=>'Diego',
            'cast'=>'Elenco 3',
            'sinopse'=>'Sinopse do filme 3',
            'duration'=>'1h45',
        ]);
    }
}
