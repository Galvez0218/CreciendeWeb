<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\Usuario;

class PrincipalController extends Controller
{
    public function Welcome()
    {
        session()->forget('nombres');
        return view('welcome');
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
        // $wsp="https://bit.ly/import-gratis";
        Session::flash('wsp', 'registro completo');
        return redirect()->route('prin.registro');
    }
}
