<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pedido;
use App\Models\ValoracionPlatillo;
use App\Models\ValoracionRepartidor;
use App\Models\valoracionRestaurante;

class Cliente extends Model
{
    use HasFactory;

    public $table = 'clientes';
    protected $fillable = [
        'clientes',
        'nombre',
        'apellidos',
        'email',
        'telefono',
        'telefono2',
    ];
    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'id_cliente', 'id');
    }
    public function valoracionPlatillo()
    {
        return $this->hasMany(ValoracionPlatillo::class, 'id_cliente', 'id');
    }
    public function valoracionRepartidor()
    {
        return $this->hasMany(ValoracionRepartidor::class, 'id_cliente', 'id');
    }
    public function valoracionRestaurante()
    {
        return $this->hasMany(ValoracionRestaurante::class, 'id_cliente', 'id');
    }
}
