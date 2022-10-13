<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pedido;
use App\Models\Repartidor;
use App\Models\Restaurante;
use App\Models\Cupon;
use App\Models\Descuento;
use App\Models\PedidoPlatillo;

class Envio extends Model
{
    use HasFactory;

    public $table = 'envios';
    protected $fillable = [
        'id_pedido',
        'id_repartidor',
        'id_restaurant',
        'id_cupon',
        'id_descuento',
        'status',
        'observaciones',
        'total',
        'envio',
    ];
    public function pedidos()
    {
        return $this->belongsTo(Pedido::class, 'id_pedido', 'id');
    }
    public function repartidor()
    {
        return $this->belongsTo(Repartidor::class, 'id_repartidor', 'id');
    }
    public function restaurant()
    {
        return $this->belongsTo(Restaurante::class, 'id_restaurant', 'id');
    }
    public function cupon()
    {
        return $this->belongsTo(Cupon::class, 'id_cupon', 'id');
    }
    public function descuentos()
    {
        return $this->belongsTo(Descuento::class, 'id_descuento', 'id');
    }
    public function pedidoPlatillo()
    {
        return $this->hasMany(PedidoPlatillo::class, 'id_envio', 'id');
    }
}
