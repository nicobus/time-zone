<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*   public function __construct()
    {
        $this->middleware('auth');
    } */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $novedades = Producto::novedades()->inRandomOrder()->take(4)->get();
        $ofertas = Producto::ofertas()->inRandomOrder()->take(4)->get();
        $vac = compact("ofertas", "novedades");

        return view('pages.home', $vac);
    }
}
