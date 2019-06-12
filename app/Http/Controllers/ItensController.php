<?php namespace App\Http\Controllers;
use App\Http\Requests\ItensFormRequest;
use Illuminate\Support\Facades\DB;
use Request as OldRequest;
use App\Itens;
use Illuminate\Http\Request;


class ItensController extends Controller {

    public function listarItens(Request $request){
        // $itens = DB::select('select * from itens');
        $itens = Itens::all();
        $mensagem = $request->session()->get('mensagem');
        // return view('listar-itens')->with('itens', $itens);
        return view('listar-itens', compact('itens', 'mensagem'));
    }

    public function mostrarItens(){
        $id = OldRequest::route('id');
        $itens = DB::select('select * from itens where id = ?', [$id]);
       
        return view('detalhes-itens')->with('p', $itens[0]);  
    }

    public function novosItens(){
        return view('adicionar-itens');
      }

    public function adicionaItens(ItensFormRequest $request){
    // pegar dados do formulario
    // salvar no banco de dados
    // retornar alguma view 

    // $nome = Request::input('nome');
    // $descricao = Request::input('descricao');
    // $preco_bruto = Request::input('preco_bruto');
    // $quantidade = Request::input('quantidade');
    // $categoria = Request::input('categoria');

//     DB::insert('insert into itens (nome, preco_bruto, quantidade) 
// values (?, ?, ?, ?)', array($nome, $preco_bruto, $quantidade));
        $itens = Itens::create([
            'preco_bruto' => $request->preco_bruto,
            'nome' => $request->nome,
            'quantidade' => $request->quantidade,
            'categoria' => $request->categoria
        ]);
        $request->session()->flash(
            'mensagem',
            "Item {$itens->id} criad@ com sucesso {$itens->nome}"
        );
        // return redirect('/itens')->withInput(Request::only('nome'));
        return  redirect('/itens');
    }

    public function removeItens(Request $request){
        Itens::destroy($request->id);
        $request->session()->flash(
            'mensagem',
            "Item removido com sucesso"
        );
        return  redirect('/itens');
    }

}