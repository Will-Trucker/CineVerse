<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;
use App\Providers\RouteServiceProvider;
use DB;

class ListadoController extends Controller
{
    //
    public function index(){
      $query = DB::table('movies');
      return view('listado', ['datos'=>$query]);
    }


    public function edit($id){
      $campos = DB::table('movies')->find($id);

      return view('edit', compact('campos'));
    }

    public function delete($id){
        Horario::find($id)->delete();
        return redirect()->back();
    }
}
