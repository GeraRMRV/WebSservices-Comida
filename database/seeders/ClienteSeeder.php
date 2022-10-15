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
                'nombre'            =>'Maribel',
                'apellidos'         =>'Gómez Gómez',
                'email'             =>'maribel@gmail.com',
                'telefono'          =>'9191154790',
                'telefono2'         =>'9191457893',
            ],
            [
                'nombre'            =>'Roberto',
                'apellidos'         =>'Ruiz Sanchez',
                'email'             =>'roberto@gmail.com',
                'telefono'          =>'9199874520',
                'telefono2'         =>'9193567412',
            ],
            [
                'nombre'            =>'Lucy',
                'apellidos'         =>'lopez santiz',
                'email'             =>'lucy@gmail.com',
                'telefono'          =>'9191657080',
                'telefono2'         =>'9191475630',
            ],
            [
                'nombre'            =>'Gerardo',
                'apellidos'         =>'Gómez Martínez',
                'email'             =>'gera@gmail.com',
                'telefono'          =>'9631801113',
                'telefono2'         =>'9632303978',
            ],
            [
                'nombre'            =>'Selina',
                'apellidos'         =>'Carrillo Lopez',
                'email'             =>'selina@gmail.com',
                'telefono'          =>'9631457890',
                'telefono2'         =>'9193214789',
            ],
            [
                'nombre'            =>'Muricio',
                'apellidos'         =>'Hernandez Sanchez',
                'email'             =>'mau@gmail.com',
                'telefono'          =>'9195647890',
                'telefono2'         =>'9190258963',
            ],
            [
                'nombre'            =>'Ricardo',
                'apellidos'         =>'Diamante Magallanes',
                'email'             =>'ricardodiam@gmail.com',
                'telefono'          =>'9631478520',
                'telefono2'         =>'9199637001',
            ],
            [
                'nombre'            =>'Gabriela',
                'apellidos'         =>'Torres Gonzales',
                'email'             =>'gaby@gmail.com',
                'telefono'          =>'9199687410',
                'telefono2'         =>'9193276197',
            ],
            [
                'nombre'            =>'Eugenio',
                'apellidos'         =>'Ruiz Lancelot',
                'email'             =>'keno@gmail.com',
                'telefono'          =>'9191997855',
                'telefono2'         =>'9193669710',
            ],
        ];
        DB::table('clientes')->insert($data);
    }
}
