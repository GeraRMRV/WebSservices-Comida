<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pedido;

class Pago extends Model
{
    use HasFactory;

    public $table = 'pagos';
    protected $fillable = [
        'id_pedido',
        'fecha',
        'folio',
        'status',
    ];
    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'id_pedido', 'id');
    }
}
