<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Enzo',
            'last_name' => 'Teixeira',
            'email' => 'enzo@teixeira.com',
            'password' => Hash::make('senhasupersecreta'),
            'cpf' => '04057202544',
            'birth_date' => '1998/06/04',
            'phone_number' => '71984208186',
            'profile_id' => '1',
        ]);
    }
}
