@extends('layouts.main')
@section('title', 'Banco DB')
@section('content')

@if($aviso != null)
   <div class="alert alert-success" role="alert">
     {{ $aviso }}
   </div>
@endif

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Pesquise aqui...">
    </form>
</div>

@php //concatenação

$nome = "Roberto";

$nome.= " - Lope";

echo $nome;

@endphp

<div id="events-container" class="col-md-12 p-3">
    <h2>Proximos Eventos</h2>
    <p>Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row d-flex justify-content-center">        
        @foreach($users as $event)
        <div class="card col-md-3 mx-1">
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}"> 
            <div class="card-body">
                <p class="card-date">{{ $event->created_at }}<p>
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-participants">{{ $event->description }}</p>                
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        </div>                   
        @endforeach
    </div>    

</div>
@endsection        