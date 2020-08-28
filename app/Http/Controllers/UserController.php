<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
