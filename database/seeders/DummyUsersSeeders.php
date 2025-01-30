<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Company 1',
                'email' => 'company1@gmail.com',
                'password' => bcrypt('1234'),
            ],
            [
                'name' => 'Company 2',
                'email' => 'company2@gmail.com',
                'password' => bcrypt('1234'),
            ],
            [
                'name' => 'Company 3',
                'email' => 'company3@gmail.com',
                'password' => bcrypt('1234'),
            ],
        ];

        foreach($user as $key => $value){
            User::create($value);
        }

    }
}
