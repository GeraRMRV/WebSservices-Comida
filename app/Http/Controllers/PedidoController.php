<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\PedidoPlatillo;

class PedidoController extends Controller
{
    //
    public function show($id_restaurante, $status)
    {
        $pedidos = PedidoPlatillo::with('pedido.cliente')
        ->with('platillo.restaurant')
        ->whereRelation('pedido', 'status', $status)
        ->whereRelation('platillo.restaurant', 'id', $id_restaurante)->get();
        return $pedidos;
    }

    public function pedidos($id_restaurante, $status)
    {
        $pedidos = Pedido::with('cliente')
        ->with('pedidoPlatillo.platillo')
        ->whereRelation('pedidoPlatillo.platillo.restaurant', 'id', $id_restaurante)
        ->where('status', $status)->get();
        return json_encode(['datos' => $pedidos]);
    }
}
