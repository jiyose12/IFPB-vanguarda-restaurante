<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PedidosController;
use App\Itens;
use App\Pedido;
use App\ItensPedido;

class ItensPedidosController extends Controller
{
    public static function addToCart(Int $iditem, Int $idpedido)
    {
        $item = Itens::find($iditem);
        $pedido = Pedido::find($idpedido);

        $pedido->itens()->attach($item);
    }

    public static function removeFromCart(Int $iditem, Int $idpedido, $all = false)
    {

        if ($all) {
            $itenspedidos = ItensPedido::where('itens_id', $iditem)
                ->where('pedido_id', $idpedido)
                ->where('dtremoved', NULL)
                ->update(['dtremoved' => NOW()]);

            return $itenspedidos;
        } else {
            $itempedido = ItensPedido::where('itens_id', $iditem)
                ->where('pedido_id', $idpedido)
                ->where('dtremoved', NULL)
                ->first();

            $itempedido->update(['dtremoved' => NOW()]);
            // $itenspedidos = DB::update("update itens_pedidos set dtremoved = NOW() where itens_id = ? and pedido_id = ? and dtremoved is NULL limit 1", [$iditem, $idpedido]);
            return $itempedido;
        }
    }

    public function add(Request $request)
    {

        $pedido = PedidosController::getFromSession($request);

        ItensPedidosController::addToCart($request->iditem, $pedido->id);

        return  redirect()->route('cart');
    }

    public function removeOne(Request $request)
    {

        $pedido = PedidosController::getFromSession($request);

        $itenspedidos = ItensPedidosController::removeFromCart($request->iditem, $pedido->id);

        $request->session()->flash(
            'mensagem',
            "Item removido com sucesso"
        );
        return  redirect()->route('cart');
    }

    public function removeAll(Request $request)
    {

        $pedido = PedidosController::getFromSession($request);

        $itenspedidos = ItensPedidosController::removeFromCart($request->iditem, $pedido->id, true);

        $request->session()->flash(
            'mensagem',
            "Itens removidos com sucesso"
        );
        return  redirect()->route('cart');
    }

    public function listCart(Request $request)
    {

        $pedido = PedidosController::getFromSession($request);
        $mensagem = $request->session()->get('mensagem');

        $cart = DB::table('itens_pedidos')
            ->join('itens', 'itens_pedidos.itens_id', '=', 'itens.id')
            ->where('itens_pedidos.pedido_id', $pedido->id)
            ->whereNull('itens_pedidos.dtremoved')
            ->select(
                'itens.id',
                'itens.nome',
                'itens.categoria',
                'itens.preco_bruto',
                'img_itens',
                DB::raw('count(*) as nrqtd'),
                DB::raw('SUM(itens.preco_bruto) as vltotal')
            )
            ->groupBy('itens.id', 'itens.nome', 'itens.categoria', 'itens.preco_bruto', 'img_itens')
            ->orderBy('itens.nome')
            ->get();

        $total = ItensPedidosController::getProductsTotal($pedido);

        return view('pedidos.cart', compact('pedido', 'mensagem', 'cart', 'total'));
    }

    public static function getProductsTotal($pedido)
    {
        $total = DB::table('itens_pedidos')
        ->join('itens', 'itens_pedidos.itens_id', '=', 'itens.id')
        ->where('itens_pedidos.pedido_id', $pedido->id)
        ->whereNull('itens_pedidos.dtremoved')
        ->select(
            DB::raw('SUM(itens.preco_bruto) as vlsoma')
        )->get();
        return $total;
    }
}
