<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/banco', [EventController::class, 'banco']);
Route::get('/events/create', [EventController::class, 'create']); // *create --> nome do metodo que contem os comandos/variaveis
Route::post('/events', [EventController::class, 'store']); // fique atento ao metodo usado e direct do request
Route::get('/contato', [EventController::class, 'contato']);

//colocando parametros na URL da pagina
Route::get('/produtos/{id}/{value}',function($id=null, $value=null){
      return view('produtos', ['id' => $id, 'value' => $value]);
});

//maneira de usar os parametros para fazer uma busca pelo { search? } da URL da pagina
Route::get('/pesquisa', function(){
    $busca = request('search');
    return view('pesquisa', ['busca' => $busca]);
});