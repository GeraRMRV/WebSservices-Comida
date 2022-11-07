<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestauranteSeeder extends Seeder
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
                    'razon_social'      => 'Juan Lopez',
                    'nombre_contacto'   =>'Casa Love',
                    'clabe'             =>'78945612308520',
                    'direccion'         =>'calle central, avenida central',
                    'telefono'          =>'9192348613' ,
                    'email'             =>'casalove@gmail.com',
                    'facebook'          =>'casalove',
                    'twitter'           =>'@casalove',
                    'instagram'         =>'@casalove',
                    'logotipo'          =>'logotipos/casalove.jpg',
                    'status'            =>'ABIERTO',
                    'ubicacion_lat'     =>'16.90326966829491' ,
                    'ubicacion_long'    =>'-92.08363579675276',
                    'verificado'        =>'RECHAZADO',
                    'created_at'        =>'2022-10-19',
                ],
                [
                    'razon_social'      => 'Roberto Ramirez',
                    'nombre_contacto'   =>'Esspreso',
                    'clabe'             =>'78945612308520',
                    'direccion'         =>'calle central, avenida central',
                    'telefono'          =>'9192348613' ,
                    'email'             =>'esspreso@gmail.com',
                    'facebook'          =>'esspresooficial',
                    'twitter'           =>'@esspresooco',
                    'instagram'         =>'@esspresooficial',
                    'logotipo'          =>'logotipos/esspreso.jpg',
                    'status'            =>'ABIERTO',
                    'ubicacion_lat'     =>'16.91484859122835' ,
                    'ubicacion_long'    =>'-92.0708041093976',
                    'verificado'        =>'SOLICITUD',
                    'created_at'        =>'2022-10-19',
                ],
                [
                    'razon_social'      => 'Monica Lopez',
                    'nombre_contacto'   =>'restaurant',
                    'clabe'             =>'78945612308520',
                    'direccion'         =>'calle central, avenida central',
                    'telefono'          =>'9192348613' ,
                    'email'             =>'restaurant@gmail.com',
                    'facebook'          =>'restaurant_oficial',
                    'twitter'           =>'@rest_of',
                    'instagram'         =>'@rest-oco',
                    'logotipo'          =>'logotipos/restaurant.jpg',
                    'status'            =>'ABIERTO',
                    'ubicacion_lat'     =>'16.907917663185177' ,
                    'ubicacion_long'    =>'-92.075009757876',
                    'verificado'        =>'SOLICITUD',
                    'created_at'        =>'2022-10-19',
                ],
                [
                    'razon_social'      => 'Francisco Lopez',
                    'nombre_contacto'   =>'Terraza',
                    'clabe'             =>'78945612308520',
                    'direccion'         =>'calle central, avenida central',
                    'telefono'          =>'9192348613' ,
                    'email'             =>'terraza@gmail.com',
                    'facebook'          =>'terraza_oficial',
                    'twitter'           =>'@terra_of',
                    'instagram'         =>'@terraza-oco',
                    'logotipo'          =>'logotipos/terraza.jpg',
                    'status'            =>'ABIERTO',
                    'ubicacion_lat'     =>'16.901512153932998' ,
                    'ubicacion_long'    =>'-92.08951514471003',
                    'verificado'        =>'APROBADO',
                    'created_at'        =>'2022-10-19',
                ],
                [
                    'razon_social'      => 'Luis Martínez',
                    'nombre_contacto'   =>'La parrilla',
                    'clabe'             =>'78945612308520',
                    'direccion'         =>'calle central, avenida central',
                    'telefono'          =>'9197648613' ,
                    'email'             =>'laparrila@gmail.com',
                    'facebook'          =>'laparrilla_oficial',
                    'twitter'           =>'@parrilla',
                    'instagram'         =>'@parrilla_ofi',
                    'logotipo'          =>'logotipos/laparrila.jpg',
                    'status'            =>'ABIERTO',
                    'ubicacion_lat'     =>'16.914158719237474',
                    'ubicacion_long'    =>'-92.09020179024063',
                    'verificado'        =>'APROBADO',
                    'created_at'        =>'2022-10-19',
                ],
                [
                    'razon_social'      => 'Crecencio Martínez',
                    'nombre_contacto'   =>'Macoco',
                    'clabe'             =>'78945612308520',
                    'direccion'         =>'calle central, avenida central',
                    'telefono'          =>'9194448613' ,
                    'email'             =>'macoco@gmail.com',
                    'facebook'          =>'macoco',
                    'twitter'           =>'@macoco_of',
                    'instagram'         =>'@macoco-oco',
                    'logotipo'          =>'logotipos/macoco.jpg',
                    'status'            =>'ABIERTO',
                    'ubicacion_lat'     =>'16.914240837018294',  
                    'ubicacion_long'    =>'-92.08239119733',
                    'verificado'        =>'APROBADO',
                    'created_at'        =>'2022-10-19',
                ],
        ];
        DB::table('restaurantes')->insert($data);
    }
}
