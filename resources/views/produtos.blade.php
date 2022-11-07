@extends('layouts.main')
@section('title', 'Produtos')
@section('content')

   @if($id == null || $value == null)
        <div class="container bg-dark text-light shadow rounded my-5 p-5">
           <h1> Não tem produto</h1>
        </div>  
        @elseif($id > 0 || $value > 0)
        <div class="container bg-dark text-light shadow rounded my-5 p-5">
             <h1> Produto ID={{$id}}</h1>
             <h1> Produto Value={{$value}}</h1>
        </div>            
    @endif

    

@endsection