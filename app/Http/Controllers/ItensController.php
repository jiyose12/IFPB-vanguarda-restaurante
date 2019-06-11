<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use App\Itens;

class ItensController extends Controller {

    public function listarItens(){

        // $itens = DB::select('select * from itens');
        $itens = Itens::all();

        return view('listar-itens')->with('itens', $itens);
    }

    public function mostrarItens(){
        $id = Request::route('id');
        $itens = DB::select('select * from itens where id = ?', [$id]);
        return view('detalhes-itens')->with('p', $itens[0]);;
    }

    public function novosItens(){
        return view('adicionar-itens');
      }

      public function adicionaItens(){
        // pegar dados do formulario
        // salvar no banco de dados
        // retornar alguma view 

        $nome = Request::input('nome');
        // $descricao = Request::input('descricao');
        $preco_bruto = Request::input('preco_bruto');
        $quantidade = Request::input('quantidade');
        $categoria = Request::input('categoria');

    //     DB::insert('insert into itens (nome, preco_bruto, quantidade) 
    // values (?, ?, ?, ?)', array($nome, $preco_bruto, $quantidade));
        $itens = Itens::create([
            'preco_bruto' => $preco_bruto,
            'nome' => $nome,
            'quantidade' => $quantidade,
            'categoria' => $categoria
        ]);

        return redirect('/itens')->withInput(Request::only('nome'));;
      }

}