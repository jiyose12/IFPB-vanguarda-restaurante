<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itens extends Model
{
    public $timestamps = false;
    protected $fillable = [
    'nome',
    'categoria',
    'preco_bruto',
    'preco_liquido',
    'desconto',
    'quantidade',
    'img_itens'
];

public function pedidos()
{
    return $this->belongsToMany('App\Pedido', 'itens_pedidos');
}

}
