<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Subcategorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('subcategorias', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('nome',200);
      $table->integer('id_parente')->unsigned()->nullable();
      $table->foreign('id_parente')->references('id')->on('categorias');



      $table->timestamps();
      $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcategorias');
    }
}
