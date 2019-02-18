<?php

use Illuminate\Database\Seeder;
use App\Models\MediaType;

class MediaTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('media_types')->delete();

        MediaType::create(['name'=>'VHS','price'=>10]);
        MediaType::create(['name'=>'CD','price'=>3]);
        MediaType::create(['name'=>'DVD','price'=>5]);
        MediaType::create(['name'=>'Blu-ray','price'=>7]);
    }
}
