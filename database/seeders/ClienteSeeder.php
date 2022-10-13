<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nombre'            =>'Miguel',
                'apellidos'         =>'Lopez Lopez',
                'email'             =>'miguel@gmail.com',
                'telefono'          =>'9191509051',
                'telefono2'         =>'9191321908',
            ],
            [
                'nombre'            =>'Ruben',
                'apellidos'         =>'Gutierrez Lopez',
                'email'             =>'ruben@gmail.com',
                'telefono'          =>'9191609957',
                'telefono2'         =>'9191141958',
            ],
            [
                'nombre'            =>'Wilberth',
                'apellidos'         =>'Lopez Peñate',
                'email'             =>'wilberth@gmail.com',
                'telefono'          =>'9191113456',
                'telefono2'         =>'9191234809',
            ],
            [
                'nombre'            =>'Santiago',
                'apellidos'         =>'Diaz Hernandez',
                'email'             =>'santiago@gmail.com',
                'telefono'          =>'9191027900',
                'telefono2'         =>'9191005076',
            ],
            [
                'nombre'            =>'Lorenzo',
                'apellidos'         =>'Diaz Lopez',
                'email'             =>'lopez@gmail.com',
                'telefono'          =>'9191324345',
                'telefono2'         =>'9191193407',
            ],
            [
                'nombre'            =>'Panfilo',
                'apellidos'         =>'Perez Guzman',
                'email'             =>'panfilo@gmail.com',
                'telefono'          =>'9191806654',
                'telefono2'         =>'9191004067',
            ],
            [
                'nombre'            =>'Anastacio',
                'apellidos'         =>'Villalobos Landa',
                'email'             =>'anas@gmail.com',
                'telefono'          =>'9191142223',
                'telefono2'         =>'9191909052',
            ],
            [
                'nombre'            =>'Pompilio',
                'apellidos'         =>'Espinoza Lore',
                'email'             =>'pompi@gmail.com',
                'telefono'          =>'9191607677',
                'telefono2'         =>'9191435657',
            ],
            [
                'nombre'            =>'Alan',
                'apellidos'         =>'Brito Delgado',
                'email'             =>'alan@gmail.com',
                'telefono'          =>'9192346678',
                'telefono2'         =>'9191097348',
            ],
            [
                'nombre'            =>'Armando',
                'apellidos'         =>'Bulla',
                'email'             =>'armando@gmail.com',
                'telefono'          =>'9191876654',
                'telefono2'         =>'9191234455',
            ],
        ];
        DB::table('clientes')->insert($data);
    }
}
