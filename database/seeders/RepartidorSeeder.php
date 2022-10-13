<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RepartidorSeeder extends Seeder
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
                'id_restaurant'         =>5,
                'razon_social'          =>'mandaditos',
                'nombre'                =>'Oscar Alvarez',
                'clave'                 =>'927281',
                'telefono'              =>'9191509988',
                'email'                 =>'chuz@gmail.com',
                'horario'               =>'1:00-4:00',
            ],
            [
                'id_restaurant'         =>6,
                'razon_social'          =>'mandaditos',
                'nombre'                =>'Enrique Peña Nieto',
                'clave'                 =>'889302',
                'telefono'              =>'9191383309',
                'email'                 =>'peña@gmail.com',
                'horario'               =>'11:00-4:00',
            ],
            [
                'id_restaurant'         =>1,
                'razon_social'          =>'fast',
                'nombre'                =>'Leo Diario',
                'clave'                 =>'8732821',
                'telefono'              =>'9191765453',
                'email'                 =>'leo@gmail.com',
                'horario'               =>'12:00-6:00',
            ],
            [
                'id_restaurant'         =>4,
                'razon_social'          =>'fast',
                'nombre'                =>'Aitor Tilla',
                'clave'                 =>'879299',
                'telefono'              =>'9191129932',
                'email'                 =>'aitor@gmail.com',
                'horario'               =>'9:00-4:00',
            ],
            [
                'id_restaurant'         =>2,
                'razon_social'          =>'fast',
                'nombre'                =>'Manuel Avila',
                'clave'                 =>'918928',
                'telefono'              =>'9191411477',
                'email'                 =>'manuel@gmail.com',
                'horario'               =>'8:00-2:00',
            ],
            [
                'id_restaurant'         =>3,
                'razon_social'          =>'rappid',
                'nombre'                =>'Samuel Contreras',
                'clave'                 =>'762519',
                'telefono'              =>'9191143132',
                'email'                 =>'samuel@gmail.com',
                'horario'               =>'1:00-9:00',
            ],
            [
                'id_restaurant'         =>5,
                'razon_social'          =>'mandaditos',
                'nombre'                =>'Daniel Perez',
                'clave'                 =>'897635',
                'telefono'              =>'9191232233',
                'email'                 =>'daniel@gmail.com',
                'horario'               =>'10:00-4:00',
            ],
            [
                'id_restaurant'         =>2,
                'razon_social'          =>'rappid',
                'nombre'                =>'Homero Ballinas',
                'clave'                 =>'345241',
                'telefono'              =>'9191765542',
                'email'                 =>'homero@gmail.com',
                'horario'               =>'3:00-8:00',
            ],
            [
                'id_restaurant'         =>1,
                'razon_social'          =>'fast',
                'nombre'                =>'Javier Arcos',
                'clave'                 =>'125473',
                'telefono'              =>'9192543765',
                'email'                 =>'javier@gmail.com',
                'horario'               =>'12:00-9:00',
            ],
            [
                'id_restaurant'         =>4,
                'razon_social'          =>'mandaditos',
                'nombre'                =>'Kevin De Bruyne',
                'clave'                 =>'783932',
                'telefono'              =>'9191608721',
                'email'                 =>'kevin@gmail.com',
                'horario'               =>'11:00-6:00',
            ],
        ];
        DB::table('repartidores')->insert($data);
    }
}
