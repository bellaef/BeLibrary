<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $userData = [
            //admin
            [
                'email' => 'bella@gmail.com',
                'nama' => 'Bella Ervina',
                'username' => 'bella2209',
                'password' => 'berru2209',
                'alamat' => 'Jl. Mastrip 3, Kabupaten Jember',
                'role' => 'admin',
                'telepon' => "08953569"
            ],

            //pelanggan
            [
                'email' => 'oikawa@gmail.com',
                'nama' => 'Oikawa Tooru',
                'username' => 'TooruOik',
                'password' => '123',
                'alamat' => 'Miyagi District, Japan',
                'role' => 'pengunjung',
                'telepon' => "082337344156"
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
