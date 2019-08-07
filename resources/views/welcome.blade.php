<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Tangerine&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Playball&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('css/inicio.css')}}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            
            
           

           
            
           
        </style>
    </head>
    @extends('layouts.app')
    <body>
   
            
            
       <div class="container-fluid">
       
            <video id="vd" src="{{asset('video/videorest.mp4')}}" autoplay="true" loop="true"></video>

            
       </div>


       <div class="container"  style="position: absolute;
       margin-top: 129px;">
            
                    
                    <div class="col-8">
                            <div class="absolute">
                                <a href="http://" id="logo"> Restaurante </a>
                                <a href="http://"id="bem-vindo">Bem Vindo</a>
                             
                             
                            </div>
                             
                            <div id="fundo-titulo"></div>
                        
                    </div>
                    
                
       </div>

       
      
        
      
    </body>
</html>