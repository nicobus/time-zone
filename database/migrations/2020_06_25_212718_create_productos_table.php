<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('marca_id')->unsigned()->nullable()->default(null);
            $table->bigInteger('categoria_id')->unsigned()->nullable()->default(null);
            $table->string('modelo', 45);
            $table->string('descripcion', 500)->nullable()->default(null);
            $table->integer('precio')->unsigned()->nullable()->default(null);
            $table->integer('stock')->unsigned()->nullable()->default(null);
            $table->string('origen', 45)->nullable()->default(null);
            $table->string('nombre_imagen_1', 100)->nullable()->default(null);
		    $table->string('nombre_imagen_2', 100)->nullable()->default(null);
            $table->string('nombre_imagen_3', 100)->nullable()->default(null);
            $table->integer('novedad')->nullable()->default(null);
            $table->integer('oferta')->nullable()->default(null);
            $table->boolean('status')->default(true);
            
        });
            
    }
       

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
