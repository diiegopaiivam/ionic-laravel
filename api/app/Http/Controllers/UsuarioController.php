<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Usuario::all();
    }

    public function store(Request $request, Usuario $usuario)
    {

        $usuario = new Usuario();
        $usuario->nome = $request->nome;
        $usuario->idade = $request->idade;
        $usuario->telefone = $request->telefone;
        $usuario->save();
        return response()->json($usuario, 201);
    }

}