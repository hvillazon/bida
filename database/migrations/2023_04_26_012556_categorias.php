<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id')->onDelete('cascade');
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->text('imagen')->nullable();
            $table->
            $table->timestamps();
            $table->date_timestamp_get();
        });
        
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
};
