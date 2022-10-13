<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Repartidor;
use App\Models\Cliente;

class ValoracionRepartidor extends Model
{
    use HasFactory;

    public $table = 'valoracion_repartidores';
    protected $fillable = [
        'id_repartidor',
        'id_cliente',
        'estrellas',
        'texto',
        'fecha',
    ];
    public function repartidor()
    {
        return $this->belongsTo(Repartidor::class, 'id_repartidor', 'id');
    }
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente', 'id');
    }
}
