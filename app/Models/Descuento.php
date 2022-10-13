<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurante;
use App\Models\Envio;

class Descuento extends Model
{
    use HasFactory;

    public $table = 'descuentos';
    protected $fillable = [
        'id_restaurant',
        'nombre',
        'descuento',
        'inicio',
        'fin',
        'contador',
    ];
    public function restaurant()
    {
        return $this->belongsTo(Restaurante::class, 'id_restaurant', 'id');
    }
    public function envio()
    {
        return $this->hasMany(Envio::class, 'id_descuento', 'id');
    }
}
