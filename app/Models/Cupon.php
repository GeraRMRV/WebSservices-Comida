<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurante;
use App\Models\Envio;

class Cupon extends Model
{
    use HasFactory;

    public $table = 'cupones';
    protected $fillable = [
        'id_restaurant',
        'clave',
        'descuento',
        'inicio',
        'fin',
        'limite',
        'contador',
    ];
    public function restaurant()
    {
        return $this->belongsTo(Restaurante::class, 'id_restaurant', 'id');
    }
    public function envios()
    {
        return $this->hasMany(Envio::class, 'id_cupon', 'id');
    }
}
