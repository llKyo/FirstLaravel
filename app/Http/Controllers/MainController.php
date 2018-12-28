<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Disco;
use Response;
class MainController extends Controller
{
    public function get($id){
       $disco = Disco::findOrFail($id);
       return Response::json($disco);
    }

    public function store(Request $request){
      //return Input::get("nombre");
      $disco = new Disco();
      $disco->nombre = $request->get("nombre");
      $disco->cantidad_canciones = $request->get("cantidad_canciones");
      $disco->save();
      return redirect()->back()->with("mensaje","Disco ingresado");
    }
    public function create(){
      return view("create");
    }
    public function index(){
      $discos = Disco::all();
      return view("index", compact("discos"));
      //return Response::json($discos); convierte la ruta en un endpoint
      //de una api restful
    }
}
