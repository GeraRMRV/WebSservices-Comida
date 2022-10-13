<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PedidoSeeder extends Seeder
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
                'id_cliente'        => 1,
                'fecha'             => '2022-09-10',
                'ubicacion_lat'     => '81.23657',
                'ubicacion_long'    => '80.25678',
                'status'            => 'pedido',
                'iva'               => 23.5,
                'total'             => 455,
                'forma_pago'        => 'efectivo',
                'envios'            => 04.00,

            ],
            [
                'id_cliente'        => 2,
                'fecha'             => '2022-10-10',
                'ubicacion_lat'     => '82.23657',
                'ubicacion_long'    => '79.25678',
                'status'            => 'entrega parcial',
                'iva'               => 23.5,
                'forma_pago'        => 'efectivo',
                'total'             => 345,
                'envios'            => 06.00,

            ],
            [
                'id_cliente'        => 3,
                'fecha'             => '2022-08-11',
                'ubicacion_lat'     => '83.23657',
                'ubicacion_long'    => '81.25678',
                'status'            => 'entregado',
                'iva'               => 30.0,
                'forma_pago'        => 'efectivo',
                'total'             => 445,
                'envios'            => 03.00,

            ],
            [
                'id_cliente'        => 4,
                'fecha'             => '2022-09-10',
                'ubicacion_lat'     => '82.23657',
                'ubicacion_long'    => '79.25678',
                'status'            => 'pedido',
                'iva'               => 23.5,
                'forma_pago'        => 'efectivo',
                'total'             => 556,
                'envios'            => 04.00,


            ],
            [
                'id_cliente'        => 5,
                'fecha'             => '2022-02-11',
                'ubicacion_lat'     => '81.23657',
                'ubicacion_long'    => '80.25678',
                'status'            => 'pedido',
                'iva'               => 23.5,
                'forma_pago'        => 'efectivo',
                'total'             => 400,
                'envios'            => 05.00,

            ],
            [
                'id_cliente'        => 6,
                'fecha'             => '2022-10-09',
                'ubicacion_lat'     => '80.23657',
                'ubicacion_long'    => '80.25678',
                'status'            => 'entrega parcial',
                'iva'               => 30.5,
                'forma_pago'        => 'efectivo',
                'total'             => 335,
                'envios'            => 01.00,

            ],
            [
                'id_cliente'        => 7,
                'fecha'             => '2022-08-11',
                'ubicacion_lat'     => '83.23657',
                'ubicacion_long'    => '81.25678',
                'status'            => 'entregado',
                'iva'               => 40.0,
                'forma_pago'        => 'efectivo',
                'total'             => 530,
                'envios'            => 03.00,

            ],
            [
                'id_cliente'        => 8,
                'fecha'             => '2022-01-10',
                'ubicacion_lat'     => '81.23657',
                'ubicacion_long'    => '80.25678',
                'status'            => 'pedido',
                'iva'               => 39.00,
                'forma_pago'        => 'efectivo',
                'total'             => 506,
                'envios'            => 08.00,
                

            ],
            [
                'id_cliente'        => 9,
                'fecha'             => '2022-04-04',
                'ubicacion_lat'     => '61.23657',
                'ubicacion_long'    => '60.25678',
                'status'            => 'pedido',
                'iva'               => 50.60,
                'forma_pago'        => 'efectivo',
                'total'             => 300,
                'envios'            => 04.00,

            ],
            [
                'id_cliente'        => 10,
                'fecha'             => '2022-04-12',
                'ubicacion_lat'     => '70.23657',
                'ubicacion_long'    => '65.25678',
                'status'            => 'entrega parcial',
                'iva'               => 10.0,
                'forma_pago'        => 'efectivo',
                'total'             => 245,
                'envios'            => 02.00,

            ],
            [
                'id_cliente'        => 1,
                'fecha'             => '2022-02-01',
                'ubicacion_lat'     => '81.23657',
                'ubicacion_long'    => '81.25678',
                'status'            => 'entregado',
                'iva'               => 10.0,
                'forma_pago'        => 'efectivo',
                'total'             => 645,
                'envios'            => 03.00,

            ],
            [
                'id_cliente'        => 2,
                'fecha'             => '2022-09-10',
                'ubicacion_lat'     => '82.23657',
                'ubicacion_long'    => '79.25678',
                'status'            => 'pedido',
                'iva'               => 12.00,
                'forma_pago'        => 'electronico',
                'total'             => 706,
                'envios'            => 07.00,


            ],
            [
                'id_cliente'        => 3,
                'fecha'             => '2022-02-11',
                'ubicacion_lat'     => '81.32657',
                'ubicacion_long'    => '81.34778',
                'status'            => 'pedido',
                'iva'               => 20.5,
                'forma_pago'        => 'efectivo',
                'total'             => 300,
                'envios'            => 02.00,

            ],
            [
                'id_cliente'        => 4,
                'fecha'             => '2022-10-09',
                'ubicacion_lat'     => '84.423657',
                'ubicacion_long'    => '84.25678',
                'status'            => 'entrega parcial',
                'iva'               => 10.40,
                'forma_pago'        => 'efectivo',
                'total'             => 400,
                'envios'            => 04.00,

            ],
            [
                'id_cliente'        => 5,
                'fecha'             => '2022-03-03',
                'ubicacion_lat'     => '79.23657',
                'ubicacion_long'    => '79.25678',
                'status'            => 'entregado',
                'iva'               => 20.0,
                'forma_pago'        => 'efectivo',
                'total'             => 130,
                'envios'            => 01.00,

            ],
            [
                'id_cliente'        => 6,
                'fecha'             => '2022-03-10',
                'ubicacion_lat'     => '76.23657',
                'ubicacion_long'    => '77.25678',
                'status'            => 'pedido',
                'iva'               => 23.00,
                'forma_pago'        => 'efectivo',
                'total'             => 206,
                'envios'            => 02.00,
                

            ],
            [
                'id_cliente'        => 7,
                'fecha'             => '2022-07-07',
                'ubicacion_lat'     => '81.23657',
                'ubicacion_long'    => '80.25678',
                'status'            => 'pedido',
                'iva'               => 23.5,
                'forma_pago'        => 'efectivo',
                'total'             => 555,
                'envios'            => 04.00,

            ],
            [
                'id_cliente'        => 8,
                'fecha'             => '2022-08-08',
                'ubicacion_lat'     => '81.23657',
                'ubicacion_long'    => '79.25678',
                'status'            => 'entrega parcial',
                'iva'               => 14.00,
                'forma_pago'        => 'efectivo',
                'total'             => 240,
                'envios'            => 06.00,

            ],
            [
                'id_cliente'        => 9,
                'fecha'             => '2022-02-10',
                'ubicacion_lat'     => '80.23657',
                'ubicacion_long'    => '81.25678',
                'status'            => 'entregado',
                'iva'               => 30.0,
                'forma_pago'        => 'efectivo',
                'total'             => 450,
                'envios'            => 03.00,

            ],
            [
                'id_cliente'        => 10,
                'fecha'             => '2022-03-10',
                'ubicacion_lat'     => '71.23657',
                'ubicacion_long'    => '75.25678',
                'status'            => 'pedido',
                'iva'               => 25.5,
                'forma_pago'        => 'electronico',
                'total'             => 556,
                'envios'            => 05.00,


            ],
            [
                'id_cliente'        => 1,
                'fecha'             => '2022-02-03',
                'ubicacion_lat'     => '71.23657',
                'ubicacion_long'    => '72.25678',
                'status'            => 'pedido',
                'iva'               => 20.60,
                'forma_pago'        => 'efectivo',
                'total'             => 410,
                'envios'            => 03.00,

            ],
            [
                'id_cliente'        => 2,
                'fecha'             => '2022-12-12',
                'ubicacion_lat'     => '81.23657',
                'ubicacion_long'    => '81.25678',
                'status'            => 'entrega parcial',
                'iva'               => 10.00,
                'forma_pago'        => 'efectivo',
                'total'             => 435,
                'envios'            => 01.00,

            ],
            [
                'id_cliente'        => 3,
                'fecha'             => '2022-08-07',
                'ubicacion_lat'     => '73.23657',
                'ubicacion_long'    => '71.25678',
                'status'            => 'entregado',
                'iva'               => 20.0,
                'forma_pago'        => 'efectivo',
                'total'             => 420,
                'envios'            => 03.00,

            ],
            [
                'id_cliente'        => 4,
                'fecha'             => '2022-01-12',
                'ubicacion_lat'     => '71.23657',
                'ubicacion_long'    => '70.25678',
                'status'            => 'pedido',
                'iva'               => 13.00,
                'forma_pago'        => 'efectivo',
                'total'             => 106,
                'envios'            => 02.00,
                

            ],
            [
                'id_cliente'        => 5,
                'fecha'             => '2022-09-10',
                'ubicacion_lat'     => '81.23657',
                'ubicacion_long'    => '80.25678',
                'status'            => 'pedido',
                'iva'               => 23.5,
                'forma_pago'        => 'efectivo',
                'total'             => 455,
                'envios'            => 04.00,

            ],
            [
                'id_cliente'        => 6,
                'fecha'             => '2022-10-10',
                'ubicacion_lat'     => '82.23657',
                'ubicacion_long'    => '79.25678',
                'status'            => 'entrega parcial',
                'iva'               => 23.5,
                'forma_pago'        => 'efectivo',
                'total'             => 345,
                'envios'            => 06.00,

            ],
            [
                'id_cliente'        => 7,
                'fecha'             => '2022-08-11',
                'ubicacion_lat'     => '83.23657',
                'ubicacion_long'    => '81.25678',
                'status'            => 'entregado',
                'iva'               => 30.0,
                'forma_pago'        => 'efectivo',
                'total'             => 445,
                'envios'            => 03.00,

            ],
            [
                'id_cliente'        => 8,
                'fecha'             => '2022-09-10',
                'ubicacion_lat'     => '82.23657',
                'ubicacion_long'    => '79.25678',
                'status'            => 'pedido',
                'iva'               => 23.5,
                'forma_pago'        => 'electronico',
                'total'             => 556,
                'envios'            => 04.00,


            ],
            [
                'id_cliente'        => 9,
                'fecha'             => '2022-02-11',
                'ubicacion_lat'     => '81.23657',
                'ubicacion_long'    => '80.25678',
                'status'            => 'pedido',
                'iva'               => 23.5,
                'forma_pago'        => 'efectivo',
                'total'             => 400,
                'envios'            => 05.00,

            ],
            [
                'id_cliente'        => 10,
                'fecha'             => '2022-10-09',
                'ubicacion_lat'     => '80.23657',
                'ubicacion_long'    => '80.25678',
                'status'            => 'entrega parcial',
                'iva'               => 30.5,
                'forma_pago'        => 'efectivo',
                'total'             => 335,
                'envios'            => 10.00,

            ],
            [
                'id_cliente'        => 1,
                'fecha'             => '2022-08-11',
                'ubicacion_lat'     => '83.23657',
                'ubicacion_long'    => '81.25678',
                'status'            => 'entregado',
                'iva'               => 40.0,
                'forma_pago'        => 'efectivo',
                'total'             => 530,
                'envios'            => 03.00,

            ],
            [
                'id_cliente'        => 2,
                'fecha'             => '2022-01-10',
                'ubicacion_lat'     => '81.23657',
                'ubicacion_long'    => '80.25678',
                'status'            => 'pedido',
                'iva'               => 39.00,
                'forma_pago'        => 'efectivo',
                'total'             => 506,
                'envios'            => 08.00,
                

            ],
            [
                'id_cliente'        => 3,
                'fecha'             => '2022-09-10',
                'ubicacion_lat'     => '81.23657',
                'ubicacion_long'    => '80.25678',
                'status'            => 'pedido',
                'iva'               => 23.5,
                'forma_pago'        => 'efectivo',
                'total'             => 455,
                'envios'            => 04.00,

            ],
            [
                'id_cliente'        => 4,
                'fecha'             => '2022-10-10',
                'ubicacion_lat'     => '82.23657',
                'ubicacion_long'    => '79.25678',
                'status'            => 'entrega parcial',
                'iva'               => 23.5,
                'forma_pago'        => 'efectivo',
                'total'             => 350,
                'envios'            => 06.00,

            ],
            [
                'id_cliente'        => 5,
                'fecha'             => '2022-08-10',
                'ubicacion_lat'     => '81.23657',
                'ubicacion_long'    => '81.25678',
                'status'            => 'entregado',
                'iva'               => 30.0,
                'forma_pago'        => 'efectivo',
                'total'             => 405,
                'envios'            => 03.00,

            ],
            [
                'id_cliente'        => 6,
                'fecha'             => '2022-02-05',
                'ubicacion_lat'     => '82.23657',
                'ubicacion_long'    => '79.25678',
                'status'            => 'pedido',
                'iva'               => 30.00,
                'forma_pago'        => 'electronico',
                'total'             => 676,
                'envios'            => 05.00,


            ],
            [
                'id_cliente'        => 7,
                'fecha'             => '2022-03-10',
                'ubicacion_lat'     => '80.23657',
                'ubicacion_long'    => '80.25678',
                'status'            => 'pedido',
                'iva'               => 15.5,
                'forma_pago'        => 'efectivo',
                'total'             => 400,
                'envios'            => 05.00,

            ],
            [
                'id_cliente'        => 8,
                'fecha'             => '2022-01-09',
                'ubicacion_lat'     => '80.23657',
                'ubicacion_long'    => '80.25678',
                'status'            => 'entrega parcial',
                'iva'               => 20.50,
                'forma_pago'        => 'efectivo',
                'total'             => 135,
                'envios'            => 06.00,

            ],
            [
                'id_cliente'        => 9,
                'fecha'             => '2022-08-11',
                'ubicacion_lat'     => '83.23657',
                'ubicacion_long'    => '81.25678',
                'status'            => 'entregado',
                'iva'               => 40.0,
                'forma_pago'        => 'efectivo',
                'total'             => 530,
                'envios'            => 03.00,

            ],
            [
                'id_cliente'        => 10,
                'fecha'             => '2022-02-01',
                'ubicacion_lat'     => '80.43157',
                'ubicacion_long'    => '80.24778',
                'status'            => 'pedido',
                'iva'               => 20.00,
                'forma_pago'        => 'efectivo',
                'total'             => 560,
                'envios'            => 08.00,
                

            ],

        ];
        DB::table('pedidos')->insert($data);
    }
}
