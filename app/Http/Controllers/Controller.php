<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage()
    {
        return view('welcome');
    }

    public function fazerPedido(){
        
        return view('user.pedido');
    }

    public function administrar(){
        return view('user.adm');
    }

    /**
     * VIEW DO LOGIN!!!
     */

    public function telaLogin(){
        return view('user.login');
       
    }

    public function telaCadastraFunc(){
        return view('user.cadastraFunc');
    }
}
