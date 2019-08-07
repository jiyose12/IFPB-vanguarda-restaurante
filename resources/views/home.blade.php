@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">
        
        <div class="col-md-12">
            
                
                    @if(auth()->user()->is_admin == 1)
                    <link rel="stylesheet" type="text/css" href="{{asset('css/styles1.css')}}">
                    
                   
                    <div class="container">
                   

                            <div class="row">
                                <div class="col-2"></div>

                            <div class="col-sm">
                                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                                <div class="card-header">
                                    <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-address-card fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge "></div>
                                        <div class="ng-binding"> Cadastro de Funcionários </div>
                                    </div>
                                    </div>


                                </div>
                                <div class="card-body">
                                    <a href="/cadastrofuncionario">
                                    <span>Cadastrar</span>
                                    <span>
                                        <i class="fa fa-arrow-circle-right"></i>
                                    </span>
                                    <div class="clearfix"></div>
                                    </a>
                                </div>
                                </div>
                            </div>


                            <div class="col-sm">
                                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                                    <div class="card-header">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-concierge-bell fa-6x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                        <div class="huge "></div>
                                        <div class="ng-binding"> Cadastro de Itens </div>
                                        </div>
                                    </div>


                                    </div>
                                    <div class="card-body">
                                    <a href="/itens/novositens">
                                        <span>Cadastrar</span>
                                        <span>
                                        <i class="fa fa-arrow-circle-right"></i>
                                        </span>
                                        <div class="clearfix"></div>
                                    </a>
                                    </div>
                                </div>
                                </div>

                            <!-- 

                            <div class="col-sm">
                                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                                <div class="card-header">
                                    <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-concierge-bell fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge "></div>
                                        <div class="ng-binding">Cadastro de Itens</div>
                                    </div>
                                    </div>


                                </div>
                                <div class="card-body">
                                    <a href="">
                                    <span>Cadastrar</span>
                                    <span>
                                        <i class="fa fa-arrow-circle-right"></i>
                                    </span>
                                    <div class="clearfix"></div>
                                    </a>
                                </div>
                                </div>

                            </div> -->
                            <div class="col-2"></div>



                            </div>



                            <div class="row">
                                <div class="col-2"></div>

                            <div class="col-sm">
                                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                                <div class="card-header">
                                    <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa  fa-search fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge "></div>
                                        <div class="ng-binding">Tela de Pesquisa</div>
                                    </div>
                                    </div>


                                </div>
                                <div class="card-body">
                                    <a href="/itens">
                                    <span>Pesquisar</span>
                                    <span>
                                        <i class="fa fa-arrow-circle-right"></i>
                                    </span>
                                    <div class="clearfix"></div>
                                    </a>
                                </div>
                                </div>
                            </div>





                            <div class="col-sm">
                                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                                <div class="card-header">
                                    <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-retweet fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge "></div>
                                        <div class="ng-binding"> Alterar / Editar Pedidos</div>
                                    </div>
                                    </div>


                                </div>
                                <div class="card-body">
                                    <a href="">
                                    <span>Editar</span>
                                    <span>
                                        <i class="fa fa-arrow-circle-right"></i>
                                    </span>
                                    <div class="clearfix"></div>
                                    </a>
                                </div>
                                </div>

                            </div>
                            <div class="col-2"></div>
                            </div>
                            <button type="submit" class="btn btn-danger btn-lg">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                                     
                                        {{ __('sair') }}
                                    </a>


                            </button>

                            <a href="http://"></a>
                            </div>





                    @else

                    <div class="row">
                    
                    <div class="col-md-3"></div>
                    
                   
                       
                        <div class="col-md-6" align="center">
                            <h1>Escolha uma mesa</h1>

                            <form action="/menu" class="styles">
                                <div class="form-group">
                                
                                <input type="text" class="form-control"  style="width:250px;font-size: 13px"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mesa" >
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form> 
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                        
                      
                
                
                    
                    @endif
                
            
        </div>
    </div>
</div>
@endsection
