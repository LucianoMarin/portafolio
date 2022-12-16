<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posteos;
use DB;

class PosteosController extends Controller
{
    

public function index(){


}

public function store(Request $request){
    try{
    $request->validate([
        'correo'=>'required| email',
        'nombre'=>'required',
        'mensaje'=>'required'
    ],[

'correo.required'=>'Ingrese un correo valido',
'nombre.required'=>'Ingrese un nombre valido',
'mensaje.required'=>'Ingrese un mensaje valido'

    ]);

    $posteos =new posteos;
    $posteos->id=0;
    $posteos->correo=$request->correo;
    $posteos->nombre=$request->nombre;
    $posteos->mensaje=$request->mensaje;

    $estado=$posteos->save();
if($estado==1){
return redirect('/')->with('success','Se envio correctamente el mensaje!');
}
else{
return redirect('/')->with('errors','No se pudo enviar el mensaje');

}
    }catch(\Illuminate\Database\QueryException $ex){
        return redirect('/')->with('ePk','ERROR: hubo un error en la conexion');


    }
}

public function destroy(){



}


}
