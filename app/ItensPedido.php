<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItensPedido extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'itens_id',
        'pedido_id',
        'dtremoved'
    ];
}
