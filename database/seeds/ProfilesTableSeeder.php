<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Profile;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profiles = [
            [
                'id' => '1',
                'profile' => 'Admin'
            ],
            [
                'id' => '2',
                'profile' => 'Supervisor'
            ],
            [
                'id' => '3',
                'profile' => 'Operário'
            ]
        ];
        Profile::insert($profiles);
    }
}
