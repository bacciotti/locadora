<?php

use Illuminate\Database\Seeder;
use App\Models\Distributor;

class DistributorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('genres')->delete();

        Distributor::create([
            'corporate_name'=>'Empresa fake 1',
            'cnpj'=>12345678901234,
            'address'=>'Rua Exemplo, 1, Bairro, Cidade-UF',
            'phone'=>'27999994444',
            'contact_person'=>'Welington Mothé de Oliveira',
        ]);
        Distributor::create([
            'corporate_name'=>'Empresa fake 2',
            'cnpj'=>91234567890123,
            'address'=>'Rua Exemplo, 2, Bairro, Cidade-UF',
            'phone'=>'81555554444',
            'contact_person'=>'Carlos',
        ]);
        Distributor::create([
            'corporate_name'=>'Empresa fake 3',
            'cnpj'=>98765432100123,
            'address'=>'Rua Exemplo, 3, Bairro, Cidade-UF',
            'phone'=>'22888884444',
            'contact_person'=>'Lucas',
        ]);
    }
}
