<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Envio;
use App\Models\Pago;
use App\Models\Cliente;
use App\Models\PedidoPlatillo;

class Pedido extends Model
{
    use HasFactory;

    public $table = 'pedidos';
    protected $fillable = [
        'id_cliente',
        'fecha',
        'ubicacion_lat',
        'ubicacion_long',
        'status',
        'iva',
        'forma_pago',
        'total',
        'envios',
    ];
    public function envio()
    {
        return $this->hasMany(Envio::class, 'id_pedido', 'id');
    }
    public function pagos()
    {
        return $this->hasMany(Pago::class, 'id_pedido', 'id');
    }
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente', 'id');
    }
    public function pedidoPlatillo()
    {
        return $this->hasMany(PedidoPlatillo::class, 'id_pedido', 'id');
    }
}
