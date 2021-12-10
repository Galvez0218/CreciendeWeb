<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuario;

class PrincipalController extends Controller
{
    public function Welcome()
    {
        // dd(session()->all());
        // $origenes = Origen::select('id', 'nombre_origen')
        //     ->get();
        // $orders = Order::all();
        // dd($orders);

        session()->forget('usuario_dni');
        session()->forget('email');
        session()->forget('clave');
        session()->forget('nombres');
        return view('welcome'/*, compact('origenes', 'orders')*/);
    }

    public function Registro()
    {
        return view('Registro'/*, compact('origenes', 'orders')*/);
    }

    public function guardar_usuario(Request $request)
    {
        // dd($request);
        $nombres = $request->nombres;
        $celular = $request->celular;
        $email = $request->email;

        Usuario::create(array(
            'nombres' => $nombres,
            'celular' => $celular,
            'email' => $email,
        ));

        return redirect()->route('prin.registro');
    }
}
