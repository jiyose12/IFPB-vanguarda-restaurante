<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'mesa',
        'status',
        'valor',
        'pago',
        'dessessionid'
    ];
    
    public function itens()
    {
        return $this->belongsToMany('App\Itens', 'itens_pedidos');
    }
    
}
