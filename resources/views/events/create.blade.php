@extends('layouts.main')
@section('title', 'Criar Evento')
@section('content')

  <div class="container bg-dark text-light shadow rounded my-5 p-5">
      <h1>Crie seu evento</h1>
      <form action="/events" method="POST" enctype="multipart/form-data">
         @csrf {{-- é uma diretiva de proteção ao formulario, sem isso não sera possivel enviar os dados--}}
         <div class="form-group my-3"> 
             <label for="image">Capa do Evento:</label>
             <input type="file" class="form-control form-control-sm" id="image" name="image">
         </div> 
         <div class="form-group"> 
             <label for="title">Evento:</label>
             <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
         </div> 
         <div class="form-group"> 
             <label for="title">Cidade:</label>
             <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
         </div> 
         <div class="form-group"> 
             <label for="title">O evento é privado?</label>
             <select name="private" id="private" class="form-control">
                 <option value="0">Não</option>
                 <option value="1">Sim</option>
             </select> 
         </div> 
         <div class="form-group"> 
             <label for="title">Descrição:</label>
             <textarea class="form-control" id="description" name="description" placeholder="O que vai contecer no evento?"></textarea>
         </div> 
         <input type="submit" class="btn btn-primary my-3" value="Criar evento">
      </form>
  </div>

@endsection