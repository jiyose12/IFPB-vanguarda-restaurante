<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PedidosController;
use App\Itens;
use App\Pedido;
use App\ItensPedido;

class ItensPedidosController extends Controller
{
    public static function addToCart(Int $iditem, Int $idpedido){
        $item = \App\Itens::find($iditem);
        $pedido = \App\Pedido::find($idpedido);

        $pedido->itens()->attach($item);
    }

    public static function removeFromCart(Int $iditem, Int $idpedido, $all = false){

        if($all){
        $updatedCart = App\ItensPedidos::updateOrCreate(
            ['itens_id' => $iditem, 'pedido_id' => $idpedido], 
            ['dtremoved' => NOW()]);
        } else {
        $updatedCart = App\ItensPedidos::where('itens_id', $iditem)
        ->where('pedido_id', $idpedido)
        ->where('dtremoved', NULL)
        ->limit(1)
        ->update(['dtremoved' => NOW()]);
        }
        return $updatedCart;
    }

    public function add(Request $request){

        $pedido = PedidosController::getFromSession($request);

        ItensPedidosController::addToCart($request->iditem, $pedido->id);
        
        return  redirect()->route('cart');
    }

    public function removeOne(Request $request){

        $pedido = PedidosController::getFromSession($request);

        $updatedCart = ItensPedidosController::removeFromCart($request->id, $pedido->id);

        $request->session()->flash(
            'mensagem',
            "Item removido com sucesso"
        );
        return  redirect()->route('cart');
    }

    public function removeAll(Request $request){

        $pedido = PedidosController::getFromSession($request);

        $updatedCart = ItensPedidosController::removeFromCart($request->iditem, $pedido->id, true);
        
        $request->session()->flash(
            'mensagem',
            "Item removido com sucesso"
        );
        return  redirect()->route('cart');
    }

    public function listCart(Request $request){

        $pedido = PedidosController::getFromSession($request);
        $mensagem = $request->session()->get('mensagem');

        $cart = DB::table('itens_pedido')
            ->join('itens', 'itens_pedido.itens_id', '=', 'itens.id')
            ->where('itens_pedido.pedido_id', $pedido->id)
            ->whereNull('itens_pedido.dtremoved')
            ->select('itens.id', 'itens.nome', 'itens.categoria', 'itens.preco_bruto', 'img_itens', 
            DB::raw('count(*) as nrqtd'),
            DB::raw('SUM(itens.preco_bruto) as vltotal'))
            ->groupBy('itens.id', 'itens.nome', 'itens.categoria', 'itens.preco_bruto', 'img_itens')
            ->orderBy('itens.nome')
            ->get();

            var_dump($cart);

        return view('pedidos.cart', compact('pedido', 'mensagem', 'cart'));
    }

}
