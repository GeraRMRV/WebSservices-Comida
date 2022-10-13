<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurante;

class Horario extends Model
{
    use HasFactory;

    public $table = 'horarios';
    protected $fillable = [
        'id_restaurant',
        'dia',
        'hora_e',
        'hora_s',
    ];
    public function restaurant()
    {
        return $this->belongsTo(Restaurante::class, 'id_restaurant', 'id');
    }
}
