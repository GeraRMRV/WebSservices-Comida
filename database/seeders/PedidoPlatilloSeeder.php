<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PedidoPlatilloSeeder extends Seeder
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
                'id_pedido'     => 1,
                'id_platillo'   => 1,
                'id_envio'      => null,
                'cantidad'      => 2,
                'precio'        => 254,

            ],
            [
                'id_pedido'     => 2,
                'id_platillo'   => 2,
                'id_envio'      => null,
                'cantidad'      => 3,
                'precio'        => 243,

            ],
            [
                'id_pedido'     => 3,
                'id_platillo'   => 3,
                'id_envio'      => null,
                'cantidad'      => 5,
                'precio'        => 203,

            ],
        ];
        DB::table('pedido_platillos')->insert($data);
    }
}
