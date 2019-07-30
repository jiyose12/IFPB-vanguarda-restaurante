<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Itens;
use App\Pedido;
use App\ItensPedido;

class ItensPedidoController extends Controller
{
    public static function addToCart(Int $iditem, Int $idpedido){
        $item = App\Itens::find($iditem);
        $pedido = App\Pedido::find($idpedido);

        $item->pedidos()->attach($pedido);
        $pedido->itens()->attach($item);
    }

    public static function removeFromCart(Int $iditem, Int $idpedido, $all = false){

        if($all){
        $updateCart = App\ItensPedido::updateOrCreate(
            ['itens_id' => $iditem, 'pedido_id' => $idpedido], 
            ['dtremoved' => NOW()]);
        } else {
        $updateCart = App\ItensPedido::where('itens_id', $iditem)
        ->where('pedido_id', $idpedido)
        ->where('dtremoved', NULL)
        ->limit(1)
        ->update(['dtremoved' => NOW()]);
        }
    }
}
