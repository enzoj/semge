<?php

use App\Address;
use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::create([
            'user_id' => '1',
            'street' => 'Salvador',
            'complement' => 'casa',
            'number' => '0',
            'city' => 'Salvador',
            'state' => 'Bahia',
            'country' => 'Brazil',
            'cep' => '11111111',
        ]);
    }
}
