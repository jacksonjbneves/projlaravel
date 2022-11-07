<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\facades\DB;

class EventController extends Controller
{

    public function banco(){
        //$events = Event::all();
        //$users = DB::select('select * from events where id = ?',[8]);        
        $aviso = session('msgm','Atualizado o evento!');
        $sql = DB::update('update events set title = "Criar Jogos para CONSOLES" where id=?', [8]);
        $users = DB::select('select * from events');
        
    return view('events.banco', [/*'events'=>$events,*/ 'aviso'=>$aviso, 'users'=>$users] );
    }

    public function index(){

        $events = Event::all();
        $name = "Jackson Neves-laravel";

        return view('welcome', ['events'=>$events, 'name'=>$name]);
        
        /*$pessoas = ["jackson", "janete", "jayson", "sandy", "thor", "trica"];
        $list = ["volante", "pneu", "retrovisor", "aro35", "óleo", "Câmara"];
        $show = "";
    
    
        $plus = 200; 
        $soma = 10 + 15 + $plus;
        $nome = "jackson1";
    
        return view('welcome', ['nome' => $nome,
                                'somaView' => $soma,
                                'list' => $list,
                                'pessoas' => $pessoas,
                                'show' => $show
                            ]);*/
    }

    public function create(){
        return view('events.create'); // *events/create --> endereço url
    }
    
    //salva o formulario no DB
    public function store(Request $request){ //não precisa digitar o nome 'store',
                                             //é apenas uma convenção aos padrões de laravel
        $event = new Event;
        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        //Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage=$request->image;
            $extension=$requestImage->extension();
            $imageName=md5($requestImage->getClientOriginalName().strtotime("now")).".".$extension;

            $requestImage->move(public_path('img/events'), $imageName);
            $event->image=$imageName;
        }

        $event->save(); //metodo que salva os valores dos parametros no banco

        //return redirect('/'); --> redireciona para a pagina desejada(home)
        return redirect('/')->with('msg','Evento criado com sucesso!'); // aqui se criar tipo uma session que ira enviar a mensagem
    }

    public function contato(){
        return view('contato');
    }
}
