@extends('layouts.app')


   
@section('content')

<link href="{{ asset('css/styles.css') }}" rel="stylesheet"> 
<div class="container">
    <div class="d-flex justify-content-center h-100">
        
            <div class="card">
                <div class="card-header" style="color: white;font-size: 29px;">{{ __('Entra') }}</div>
                
                <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
				
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        
                                    </div>

                                    <input id="email" type="email" placeholder="E-MAIL" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                    
                                </div>



                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    
                                    <input id="password" type="password" placeholder="SENHA" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>

                               

                               




                                

                                



                                <div class="row align-items-center remember">
                                            <div>
                                                <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label  for="remember">
                                                    {{ __('Lembre de mim') }}
                                                </label>
                                            </div>  
                                </div>









                                <div class="form-group ">
                                        <div >
                                            
                                            <input type="submit" value="{{('Login')}}" class="btn float-right login_btn">
                    
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>


                        </form>
                </div>
            </div>
        
    </div>
</div>
@endsection
