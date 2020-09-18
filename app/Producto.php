<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $table = "productos";
    public $primaryKey = "id";
    public $timestamps = "false";
    public $guarded = [];

    public function marca(){
        return $this->belongsTo('App\Marca', 'marca_id');
    }

    public function categoria(){
        return $this->belongsTo('App\Categoria', 'categoria_id');
    }

    public function reloj(){
        return $this->hasOne('App\Reloj', 'producto_id', 'id');
    }
    public function scopeProductosCategoria($query, $categoria){
        return $query->select('productos.*')->join('categorias', 'categoria_id', '=', 'categorias.id')
        ->where('categorias.nombre', '=', "$categoria")->disponibles();
    }
    public function scopeDisponibles($query){
        return $query->where('status', '=', true)->where('stock', '>', 0);
    }
    public function scopeNoDisponibles($query){
        return $query->where('status', '=', false);
    }
    public function scopeSinStock($query){
        return $query->where('stock', '=', 0);
    }
    public function scopeNovedades($query){
        return $query->where('novedad', '=', '1')->disponibles();
    }
    public function scopeOfertas($query){
        return $query->where('oferta', '=', '1')->disponibles();
    }
}
