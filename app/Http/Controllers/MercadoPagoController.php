<?php

namespace App\Http\Controllers;

use App\Compra;
use App\Relacion_Compra_Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MercadoPagoController extends Controller
{
   public function success(Request $req){
    $titulo = "Pago exitoso";
    $compra = new Compra();
    $compra->usuario_id = Auth::user()->id;
    $compra->total = \Cart::session(Auth::user()->id)->getTotal();
    $compra->estado_pago = "aceptado";
    $compra->request_mp = json_encode($req->all());
    $compra->save();
    foreach (\Cart::session(Auth::user()->id)->getContent() as $producto) {
       $relacion_compra_producto = new Relacion_Compra_Producto();
       $relacion_compra_producto->compra_id = $compra->id;
       $relacion_compra_producto->producto_id = $producto->associatedModel->id;
       $relacion_compra_producto->save();
    }
    \Cart::session(Auth::user()->id)->clear();
    $vac = compact('titulo');
    return view('pages.pagoExitoso', $vac);
    
   }

   public function pending(Request $req){
      $titulo = "Pago pendiente";
      $compra = new Compra();
      $compra->usuario_id = Auth::user()->id;
      $compra->total = \Cart::session(Auth::user()->id)->getTotal();
      $compra->estado_pago = "pendiente";
      $compra->request_mp = json_encode($req->all());
      $compra->save();
      foreach (\Cart::session(Auth::user()->id)->getContent() as $producto) {
         $relacion_compra_producto = new Relacion_Compra_Producto();
         $relacion_compra_producto->compra_id = $compra->id;
         $relacion_compra_producto->producto_id = $producto->associatedModel->id;
         $relacion_compra_producto->save();
      }
      \Cart::session(Auth::user()->id)->clear();
      $vac = compact('titulo');
      return view('pages.pagoPendiente', $vac);
      
     }

     public function failure(Request $req){
      $titulo = "Pago fallido";
      $compra = new Compra();
      $compra->usuario_id = Auth::user()->id;
      $compra->total = \Cart::session(Auth::user()->id)->getTotal();
      $compra->estado_pago = "fallido";
      $compra->request_mp = json_encode($req->all());
      $compra->save();
      foreach (\Cart::session(Auth::user()->id)->getContent() as $producto) {
         $relacion_compra_producto = new Relacion_Compra_Producto();
         $relacion_compra_producto->compra_id = $compra->id;
         $relacion_compra_producto->producto_id = $producto->associatedModel->id;
         $relacion_compra_producto->save();
      }
      $vac = compact('titulo');
      return view('pages.pagoFallido', $vac);
      
     }
}
