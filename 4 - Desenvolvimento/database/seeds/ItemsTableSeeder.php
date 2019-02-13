<?php

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('items')->delete();

        Item::create([
            'date_acquisition'=>'2001-12-21',
            'serial_number'=>'mi7h98r237v729y8237by83c',
            'media_type_id'=>1,
            'movie_id'=>1,
            'distributor_id'=>3,
        ]);
        Item::create([
            'date_acquisition'=>'2001-12-22',
            'serial_number'=>'h78rfy7862tf8f7yn827y2fc2y',
            'media_type_id'=>4,
            'movie_id'=>3,
            'distributor_id'=>1,
        ]);
        Item::create([
            'date_acquisition'=>'2001-12-23',
            'serial_number'=>'h78rfy7862tf8f7yn827y2fc2y',
            'media_type_id'=>3,
            'movie_id'=>2,
            'distributor_id'=>3,
        ]);
    }
}
