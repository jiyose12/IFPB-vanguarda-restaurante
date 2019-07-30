<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ItensFormRequest;
use App\Itens;
use App\Pedido;

class PedidosController extends Controller {

    public static function getFromSession(Request $request){

        $sessionid = $request->session()->getId();
        $pedidoid = $request->session()->get('id');

        if(isset($sessionid) && (int)$pedidoid > 0){
            $pedido = Pedido::find($pedidoid);
        } 
        else{
            $pedido = Pedido::where('dessessionid', $sessionid)->first();
  
            if($pedido == NULL){
                $pedido = PedidosController::createCart($request);
            }
        }
        return $pedido;
    }
    
    public static function createCart(Request $request){
        $pedido = Pedido::create([
            'mesa' => $request->mesa,   
            'dessessionid' => $request->session()->getId()
        ]);
        return $pedido;
    }

    // public function listarCart(Request $request){
    //     $pedido = PedidosController::getFromSession($request);
    //     var_dump($pedido);
    //     return view('pedidos.cart', compact('pedido'));
    // }

    public function listarMenu(Request $request)
    {
        return view('pedidos.menu');
    }
    
    public function findByName(Request $request)
    {
        $lowerP = mb_strtolower($request->pesquisa);

        if ($lowerP !== "bebida" && $lowerP !== "comida") {
            $itens = Itens::where('nome', 'LIKE', "{$lowerP}%")->get();
        } else
            $itens = Itens::where('categoria', 'LIKE', "{$lowerP}%")->get();
 
        return view('pedidos.menu', compact('itens'));
    }

}
