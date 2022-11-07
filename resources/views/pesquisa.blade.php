@extends('layouts.main')
@section('title', 'Pesquisa')
@section('content')

   @if($busca != null)
        <div class="container bg-dark text-light shadow rounded my-5 p-5">
           <h1> Resultado da pesquisa: {{$busca}}</h1>
        </div>  
        @elseif($busca == null)
        <div class="container bg-dark text-light shadow rounded my-5 p-5">
             <h1> Digite para começar a busca</h1>
        </div>            
    @endif

    

@endsection