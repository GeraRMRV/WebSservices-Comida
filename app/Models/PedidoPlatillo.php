<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pedido;
use App\Models\Platillo;
use App\Models\Envio;

class PedidoPlatillo extends Model
{
    use HasFactory;

    public $table = 'pedido_platillos';
    protected $fillable = [
        'id_pedido',
        'id_platillo',
        'id_envio',
        'cantidad',
        'precio',
    ];
    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'id_pedido', 'id');
    }
    public function platillo()
    {
        return $this->belongsTo(Platillo::class, 'id_platillo', 'id');
    }
    public function envios()
    {
        return $this->belongsTo(Envio::class, 'id_envio', 'id');
    }
}
