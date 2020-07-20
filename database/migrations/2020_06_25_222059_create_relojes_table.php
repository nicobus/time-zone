<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelojesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relojes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
		    $table->string('color', 45)->nullable()->default(null);
		    $table->string('correa', 45)->nullable()->default(null);
		    $table->string('funciones', 45)->nullable()->default(null);
		    $table->string('garantia', 45)->nullable()->default(null);
		    $table->string('material_caja', 45)->nullable()->default(null);
            $table->string('movimiento', 45)->nullable()->default(null);
            $table->string('material_marco', 45)->nullable()->default(null);
		    $table->bigInteger('producto_id')->unsigned()->nullable()->default(null);
		    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relojes');
    }
}
