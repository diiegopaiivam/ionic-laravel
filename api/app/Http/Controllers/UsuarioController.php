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
        //return Perfil::orderBy('created_at', 'desc')->first();
        $usuario = new Usuario();
        $usuario->nome = $request->nome;
        $usuario->idade = $request->idade;
        $usuario->telefone = $request->telefone;
        $usuario->perfil = $request->perfil;
        $usuario->id_perfil = $request->id_perfil;
        $usuario->save();
        return response()->json($usuario->orderBy('created_at','desc')->first(), 201);
    }

    public function update(Request $request, $id){
        Usuario::find($id)->update($request->all());
        
        return $request->all();
    }

    public function deletar($id){
        Usuario::find($id)->delete();

        return Usuario::all();
    }

}