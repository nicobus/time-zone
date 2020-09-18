<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Compra extends Model
{
    public $table = "compras";
    public $primaryKey = "id";
    public $timestamps = "false";
    public $guarded = [];

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function productos(){
        return $this->belongsToMany('\App\Producto','compra_producto', 'compra_id', 'producto_id');
    }
}
