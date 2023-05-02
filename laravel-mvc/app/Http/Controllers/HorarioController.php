<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Horario;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;


class HorarioController extends Controller
{
    //
    public function store(Request $request){

        try{

            $data = $request->all();
            //Validacion de campos

            $dia = $request->input('dia');
            $i = 1;
            while (Horario::where('dia', $dia)->exists()) {
                $dia = $request->input('dia') . '_' . $i;
                $i++;
            }

            $validator = Validator::make($data, [
            'nombre' => 'required|max:255',
            'dia' => 'required|date',
            'clasificacion' => 'required',
            'sinopsis' => 'required | max:500',
            'imagen' => 'required|file|mimes:jpeg,png,jpg',
            'trailer' => 'required|file|mimes:mp4',
            'hora' => 'required',
            'asientos'  => 'required | numeric | max:48',
            'sala' => 'required',
            'genero' => 'required'
            ], [
                'nombre.required' => 'El nombre es de cáracter obligatorio',
                'nombre.max' => 'El nombre sobrepasa el limite',
                'dia.required' => 'El dia es de cáracter obligatorio',
                'clasificacion.required' => 'La clasificacion es obligatoria',
                'sinopsis.required' => 'La sinopsis es obligatoria',
                'sinopsis.max' => 'La sinopsis sobrepasa el limite',
                'imagen.required' => 'La imagen es obligatoria',
                'imagen.file' => 'El archivo debe ser seleccionado como imagen',
                'imagen.mimes' => 'El archivo debe ser tipo .jpeg,.png,.jpg',
                'trailer.required' => 'El trailer es obligatorio',
                'trailer.file' => 'El trailer debe ser seleccionado como video',
                'trailer.mimes' => 'El trailer debe ser tipo .mp4',
                'hora.required' => 'La hora es de cáracter obligatorio',
                'asientos.required' => 'Los asientos es de cáracter obligatorio',
                'asientos.numeric' => 'El dato debe de ser tipo número',
                'asientos.max' => 'Los asientos sobrepasan del limite',
                'sala.required' => 'La sala es de cáracter obligatorio',
                'genero.required' => 'El genero es requerido'
            ]);

            if ($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }

        $movie = new Horario();
        $movie->nombre = $data['nombre'];
        $movie->dia = $dia;
        $movie->clasificacion = $data['clasificacion'];
        $movie->sinopsis = $data['sinopsis'];

      if ($request->hasFile('imagen')){ //hace referencia al name del input file
        $imagen = $request->file('imagen');
        $imagen->move(public_path().'/banners/',$imagen->getClientOriginalName()); //donde guardara la imagen
        $movie->image_path=$imagen->getClientOriginalName();
    }

     if ($request->hasFile('trailer')){
        $video = $request->file('trailer');
        $video->move(public_path().'/trailers/',$video->getClientOriginalName()); //donde guardara la imagen
        $movie->video_path=$video->getClientOriginalName();
     }

    $movie->hora = $data['hora'];
    $movie->asientos = $data['asientos'];
    $movie->sala = $data['sala'];
    $movie->genero = $data['genero'];
    $movie->save();

    } catch(Exception $e){
       return redirect()->back()->withErrors([$e->getMessage()]);
  }
   return back()->with('success', 'Agregado con exito');
}

  public function edit(Request $request, $id){
    $datos = Horario::find($id);


     if ($request->hasFile('imagen')){ //hace referencia al name del input file
        $imagen = $request->file('imagen');
        $imagen->move(public_path().'/banners/',$imagen->getClientOriginalName()); //donde guardara la imagen
        $datos->image_path=$imagen->getClientOriginalName();
    }

     if ($request->hasFile('trailer')){
        $video = $request->file('trailer');
        $video->move(public_path().'/trailers/',$video->getClientOriginalName()); //donde guardara la imagen
        $datos->video_path=$video->getClientOriginalName();
     }

      $datos->save();
      return redirect('Listado')->with('message', 'Gracias');
    }



}
