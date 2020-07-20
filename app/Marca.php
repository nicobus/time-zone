<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    public $table = "marcas";
    public $primaryKey = "id";
    public $timestamps = "false";
    public $guarded = [];

    
    public function productos(){
        return $this->hasMany('App\Producto', 'marca_id');
    }
}
