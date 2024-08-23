<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class RegistroController extends Controller
{
    public function showForm()
    {
        
        //Esto recupera los registros anteriores almacenados
        $registros=session('registros', []);
        return view('registro',['registros'=>$registros]);
    }

    public function registro(Request $request)
    {
        $name=$request->input('name');
        $telefono=$request->input('telefono');
        $dni=$request->input('dni');

        

        
        //Recuperar registros actuales de la sesion
        $registros=session('registros', []);

        //Ahora agregamos un nuevo registro
        $registros[]=['name'=>$name, 'telefono'=>$telefono, 'dni'=>$dni];

        //Guardamos los registros actualizados
        session(['registros'=> $registros]);

        //Redirigimos al formulario

        return redirect()->route('registro.show');
    }
}