<?php namespace App\Http\Controllers;

use App\Http\Requests\ItensFormRequest;
use Illuminate\Support\Facades\DB;
use Request as OldRequest;
use App\Itens;
use Illuminate\Http\Request;

class ItensController extends Controller
{

    public function listarItens(Request $request)
    {
        // $itens = DB::select('select * from itens');
        $itens = Itens::all();
        $mensagem = $request->session()->get('mensagem');
        // return view('listar-itens')->with('itens', $itens);
        return view('itens.listar-itens', compact('itens', 'mensagem'));
    }

    public function mostrarItens(Request $request)
    {
        $item = Itens::find($request->id);
  
        return view('itens.detalhes-itens', compact('item'));
    }

    public function novosItens()
    {
        return view('itens.adicionar-itens');
    }

    public function adicionaItens(ItensFormRequest $request)
    {
        // $nome = Request::input('nome');
        // $descricao = Request::input('descricao');
        // $preco_bruto = Request::input('preco_bruto');
        // $quantidade = Request::input('quantidade');
        // $categoria = Request::input('categoria');

        //     DB::insert('insert into itens (nome, preco_bruto, quantidade) 
        // values (?, ?, ?, ?)', array($nome, $preco_bruto, $quantidade));

        // Handle File Upload
        if($request->hasFile('img_itens')){
            // Get filename with the extension
            $filenameWithExt = $request->file('img_itens')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('img_itens')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('img_itens')->storeAs('public/img_itens', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.png';
        }

        $itens = Itens::create([
            'preco_bruto' => $request->preco_bruto,
            'nome' => mb_strtolower($request->nome),
            'quantidade' => $request->quantidade,
            'categoria' => mb_strtolower($request->categoria),
            'img_itens' => $fileNameToStore
        ]);
        $request->session()->flash(
            'mensagem',
            "Item {$itens->id} criad@ com sucesso {$itens->nome}"
        );
        // return redirect('/itens')->withInput(Request::only('nome'));
        return  redirect()->route('listar_itens');
    }

    public function removeItens(Request $request)
    {
        Itens::destroy($request->id);
        $request->session()->flash(
            'mensagem',
            "Item removido com sucesso"
        );
        return  redirect()->route('listar_itens');
    }
}
