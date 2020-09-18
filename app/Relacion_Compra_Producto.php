<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relacion_Compra_Producto extends Model
{
    public $table = "compra_producto";
    public $primaryKey = "id";
    public $timestamps = "false";
    public $guarded = [];
}
