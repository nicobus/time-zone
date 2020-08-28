<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reloj extends Model
{
    public $table = "relojes";
    public $primaryKey = "id";
    public $timestamps = "false";
    public $guarded = [];
    
    /* public function producto(){
        return $this->belongsTo('App\Reloj', 'id');
    } */

    public function scopeRelojPorProductoId($query, $id){
        return $query->where('producto_id', '=', $id);
    }
}
