<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //tipo 1- cliente 2-repartidores 3-restaurant
        $data = [
            [
                
                'email'     => 'winalllpz@gmail.com',
                'password'  => Hash::make(1234),
                'tipo' => '1',
            ],
            [
                
                'email'     => 'repartidor@gmail.com',
                'password'  => Hash::make(1234),
                'tipo' => '2',
            ],
            [
                
                'email'     => 'casalove@gmail.com',
                'password'  => Hash::make(1234),
                'tipo' => '3',
            ],
            [
                
                'email'     => 'laparrila@gmail.com',
                'password'  => Hash::make(1234),
                'tipo' => '3',
            ],
            [
                
                'email'     => 'macoco@gmail.com',
                'password'  => Hash::make(1234),
                'tipo' => '3',
            ],
            [
                
                'email'     => 'esspreso@gmail.com',
                'password'  => Hash::make(1234),
                'tipo' => '3',
            ],
            [
                
                'email'     => 'terraza@gmail.com',
                'password'  => Hash::make(1234),
                'tipo' => '3',
            ],
            [
                
                'email'     => 'restaurant@gmail.com',
                'password'  => Hash::make(1234),
                'tipo' => '3',
            ],

        ];
        DB::table('users')->insert($data);
    }
}
