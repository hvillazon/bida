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
        Schema::create('redes', function (Blueprint $table) {
            $table->increments('id')->onDelete('cascade');
            $table->string('nombre');
            $table->text('imagen')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('redes');
    }
};
