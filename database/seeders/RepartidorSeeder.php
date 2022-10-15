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
                'id_restaurant'         =>4,
                'razon_social'          =>'motoservicio',
                'nombre'                =>'Antonio Guillen',
                'clave'                 =>'927282',
                'telefono'              =>'9191457890',
                'email'                 =>'ant@gmail.com',
                'horario'               =>'12:00-6:00',
            ],
            [
                'id_restaurant'         =>3,
                'razon_social'          =>'motorapi',
                'nombre'                =>'Antonio Alvarez',
                'clave'                 =>'927283',
                'telefono'              =>'9197890561',
                'email'                 =>'tony@gmail.com',
                'horario'               =>'12:00-8:00',
            ],
            [
                'id_restaurant'         =>2,
                'razon_social'          =>'servifast',
                'nombre'                =>'Leo Suarez',
                'clave'                 =>'927284',
                'telefono'              =>'9199874632',
                'email'                 =>'leo@gmail.com',
                'horario'               =>'4:00-10:00',
            ],
            [
                'id_restaurant'         =>1,
                'razon_social'          =>'espres',
                'nombre'                =>'Ramon Alvarez',
                'clave'                 =>'927285',
                'telefono'              =>'9198974501',
                'email'                 =>'ram@gmail.com',
                'horario'               =>'1:00-3:00',
            ],


            [
                'id_restaurant'         =>5,
                'razon_social'          =>'rapifast',
                'nombre'                =>'Julian Martinez',
                'clave'                 =>'927286',
                'telefono'              =>'9194447802',
                'email'                 =>'julian@gmail.com',
                'horario'               =>'12:00-4:00',
            ],
            [
                'id_restaurant'         =>4,
                'razon_social'          =>'motosanton',
                'nombre'                =>'Antonio Díaz',
                'clave'                 =>'927287',
                'telefono'              =>'9198745210',
                'email'                 =>'antoniodiaz@gmail.com',
                'horario'               =>'12:00-6:00',
            ],
            [
                'id_restaurant'         =>3,
                'razon_social'          =>'externosrapi',
                'nombre'                =>'Jesus Alvarez',
                'clave'                 =>'927288',
                'telefono'              =>'9631478520',
                'email'                 =>'chuy@gmail.com',
                'horario'               =>'12:00-8:00',
            ],
            [
                'id_restaurant'         =>2,
                'razon_social'          =>'fastrun',
                'nombre'                =>'Mayela Martinez',
                'clave'                 =>'927289',
                'telefono'              =>'9197820145',
                'email'                 =>'maye@gmail.com',
                'horario'               =>'4:00-10:00',
            ],
            [
                'id_restaurant'         =>1,
                'razon_social'          =>'fariusfast',
                'nombre'                =>'Gerardo Lopez',
                'clave'                 =>'927290',
                'telefono'              =>'9191778896',
                'email'                 =>'gera@gmail.com',
                'horario'               =>'1:00-6:00',
            ],
        ];
        DB::table('repartidores')->insert($data);
    }
}
