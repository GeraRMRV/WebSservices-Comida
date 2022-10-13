<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Platillo;
use App\Models\Cliente;

class ValoracionPlatillo extends Model
{
    use HasFactory;

    public $table = 'valoracion_platillos';
    protected $fillable = [
        'id_platillo',
        'id_cliente',
        'estrellas',
        'texto',
        'fecha',
    ];
    
    public function platillo()
    {
        return $this->belongsTo(Platillo::class, 'id_platillo', 'id');
    }
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente', 'id');
    }
}
