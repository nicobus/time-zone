<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reloj extends Model
{
    public $table = "relojes";
    public $primaryKey = "id";
    public $timestamps = "false";
    public $guarded = [];
    
    public function producto(){
        return $this->hasOne('App\Producto', 'producto_id');
    }
}
