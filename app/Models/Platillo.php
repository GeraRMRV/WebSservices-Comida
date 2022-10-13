<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurante;
use App\Models\ValoracionPlatillo;
use App\Models\PedidoPlatillo;

class Platillo extends Model
{
    use HasFactory;

    public $table = 'platillos';

    protected $fillable = [
        'id_restaurant',
        'nombre',
        'descripcion',
        'precio',
        'imagen',
        'categoria',
        'status',
    ];

    public function scopePlatillo($query, $platillo)
    {
        if($platillo){
            return $query->where('nombre', 'like', '%'.$platillo.'%');
        }
    }
    public function scopePrecio($query, $precio)
    {
        if($precio){
            return $query->where('precio', '=', $precio);
        }
    }
    public function scopeCategoria($query, $categoria)
    {
        if($categoria){
            return $query->where('categoria', $categoria);
        }
    }
    public function scopePrecioMin($query, $precioMin)
    {
        if($precioMin){
            return $query->where('precio', '>=', $precioMin);
        }
    }

    public function scopePrecioMax($query, $precioMax)
    {
        if($precioMax){
            return $query->where('precio', '<=', $precioMax);
        }
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurante::class, 'id_restaurant', 'id');
    }
    public function valoracionPlatillos()
    {
        return $this->hasMany(ValoracionPlatillo::class, 'id_platillo', 'id');
    }
    public function pedidoPlatillos()
    {
        return $this->hasMany(PedidoPlatillo::class, 'id_platillo', 'id');
    }
}