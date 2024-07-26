<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $view = view("sistema.login");
        return view('layouts.app', [
            'conten' => $view
        ]);
    }

    public function store(Request $request){
        $nombre = $request['nombre'];
        $contrasena = $request['contrasena'];

        if ($nombre == 'root' && $contrasena == 'root') {
            $view = view("index");
        }
        else {
            $view = view("sistema.errorPage");
        }
        
        return view('layouts.app', [
            'conten' => $view
        ]);
    }

    public function create()
    {
        $view = view("sistema.addUser");
        return view('layouts.app', [
            'conten' => $view
        ]);
    }

    public function submit(Request $request)
    {
        if ($request->input('action') === 'button_pressed') {
            // Aquí manejas la lógica cuando se presiona el botón
            // dd($request->all());
            $view = view("index");
            return view('layouts.app', [
                'conten' => $view
            ]);
        }
    }
}
