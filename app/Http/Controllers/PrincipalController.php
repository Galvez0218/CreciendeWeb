<?php
namespace App\Http\Controllers;

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

}