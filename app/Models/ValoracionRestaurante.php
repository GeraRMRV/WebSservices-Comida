<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurante;
use App\Models\Cliente;

class ValoracionRestaurante extends Model
{
    use HasFactory;

    public $table = 'valoracion_restaurantes';
    protected $fillable = [
        'id_restaurante',
        'id_cliente',
        'estrellas',
        'texto',
        'fecha',
    ];
    public function restaurant()
    {
        return $this->belongsTo(Restaurante::class, 'id_restaurant', 'id');
    }
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente', 'id');
    }
}
