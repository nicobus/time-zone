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
        return $this->belongsTo('App\ProductoReloj', 'Id');
    }
}
