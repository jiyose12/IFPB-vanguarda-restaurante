<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ItensFormRequest;
use App\Itens;
use App\Pedido;

class PedidosController extends Controller
{
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
        // printf($itens);
        return view('pedidos.menu', compact('itens'));
    }
}
