<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Platillo;
use App\Models\Cupon;
use App\Models\Descuento;
use App\Models\Envio;
use App\Models\Repartidor;
use App\Models\Horario;
use App\Models\ValoracionRestaurante;

class Restaurante extends Model
{
    use HasFactory;

    public $table = 'restaurantes';

    protected $fillable = [
        'razon_social',
        'nombre_contacto',
        'clabe',
        'direccion',
        'telefono',
        'email',
        'facebook',
        'twitter',
        'instagram',
        'logotipo',
        'status',
        'ubicacion_lat',
        'ubicacion_long',
        'verificado',
    ];

    public function platillos()
    {
        return $this->hasMany(Platillo::class, 'id_restaurant', 'id');
    }
    public function cupones()
    {
        return $this->hasMany(Cupon::class, 'id_restaurant', 'id');
    }
    public function descuentos()
    {
        return $this->hasMany(Descuento::class, 'id_restaurant', 'id');
    }
    public function envios()
    {
        return $this->hasMany(Envio::class, 'id_restaurant', 'id');
    }
    public function repartidores()
    {
        return $this->hasMany(Repartidor::class, 'id_restaurant', 'id');
    }
    public function horarios()
    {
        return $this->hasMany(Horario::class, 'id_restaurant', 'id');
    }
    public function valoracionRestaurante()
    {
        return $this->hasMany(ValoracionRestaurante::class, 'id_restaurant', 'id');
    }
}
