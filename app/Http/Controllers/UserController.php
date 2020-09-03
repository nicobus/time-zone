<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function logout(){
        Auth::logout();
        session()->flush();
        return redirect(route('home'));
    }
    public function panelAdmin(){
        return view('admin.panelAdmin');
    }

    public function listAdmin(){
        $usuarios = User::paginate(8);
        $titulo = 'Lista de usuarios';
        $vac = compact('usuarios', 'titulo');
        return view('admin.listausuarios', $vac);
    }

    public function editarUser($id){
        $usuario = User::find($id);
        $vac = compact('usuario');
        return view('admin.editarUsuario', $vac);
    }

    public function crearBusqueda(){
        $titulo = 'Busqueda Usuario';
        $vac = compact('titulo');
        return view('admin.busquedaUsuario', $vac);
    }

    public function resultadosBusqueda(Request $req){
        $titulo = 'Busqueda usuario';
        $campo = $req['busqueda'];
        $usuarios = User::where('id', "=", $campo)->orWhere('name', 'like', "%$campo%")->orWhere('email', 'like', "%$campo%")->paginate(8);
        $vac = compact('titulo', 'usuarios');
        return view('admin.busquedaUsuario', $vac);
    }
}
