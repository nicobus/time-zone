<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suscriptor extends Model
{
    public $table = "suscriptores";
    public $primaryKey = "id";
    public $guarded = [];
}
