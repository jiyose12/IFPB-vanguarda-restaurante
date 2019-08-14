@extends('layouts.app')



@section('content')
<link href="{{ asset('css/styles2.css') }}" rel="stylesheet">
<div class="container contact">
    <div class="row" style="margin-top: -21px;margin-bottom: 36px;">
        <div class="col-md-3 md3">
            <div class="contact-info">
                
                <i class="fas fa-user-plus fa-10x"></i>
                <h2>Cadastro de Cliente</h2>
                <h4>Preencha todos os campos !!</h4>
            </div>
        </div>
        <div class="col-md-9">
            <div class="contact-form">

                <form method="POST" action="{{ route('register') }}"> 
                    @csrf

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Nome Completo:</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nome Completo">
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-3">
                                <label for="inputEstado">Sexo:</label>
                                <select id="inputEstado" class="form-control">
                                  <option selected>Masculino</option>
                                  <option>Feminino</option>
                                </select>

                        </div>

                        <div class="form-group col-md-3">
                                <label for="inputEstado">Est. Civil:</label>
                                <select id="inputEstado" class="form-control">
                                  <option selected>Solteiro(a)</option>
                                  <option> Casado(a)</option>
                                  <option>divorciado(a)</option>
                                  <option>Viúvo(a)</option>
                                  <option>Outro</option>
                                </select>

                        </div>

                    </div>

                    <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="inputEmail4">E-mail</label>
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">
                              @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                           
                    </div>

                    <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputPassword4">Senha</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">Confirmar Senha</label>
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                           
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">CPF</label>
                            <input type="text" class="form-control" id="cpf" placeholder="CPF">
                        </div>
                        <div class="form-group col-md-4">
                                <label for="inputEmail4">RG</label>
                                <input type="text" class="form-control" id="cpf" placeholder="RG">
                            </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">Data de Nascimento</label>
                            <input type="date" class="form-control" id="data" placeholder="01/01/2019">
                        </div>
                        

                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Endereço </label>
                        <input type="text" class="form-control" id="inputAddress2"
                            placeholder="Rua dos Bobos, nº 0">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Cidade</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEstado">Estado</label>
                            <select id="inputEstado" class="form-control">
                                <option selected>Escolher...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputCEP">CEP</label>
                            <input type="text" class="form-control" id="inputCEP">
                        </div>
                    </div>

                    



                   
                    <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
