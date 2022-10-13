<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurante;
use App\Models\Envio;
use App\Models\ValoracionRepartidor;

class Repartidor extends Model
{
    use HasFactory;

    public $table = 'repartidores';
    protected $fillable = [
        'id_restaurant',
        'razon_social',
        'nombre',
        'clave',
        'telefono',
        'email',
        'horario',
    ];
    public function restaurant()
    {
        return $this->belongsTo(Restaurante::class, 'id_restaurant', 'id');
    }
    public function envios()
    {
        return $this->hasMany(Envio::class, 'id_repartidor', 'id');
    }
    public function valoracionRepartidor()
    {
        return $this->hasMany(ValoracionRepartidor::class, 'id_repartidor', 'id');
    }
}
