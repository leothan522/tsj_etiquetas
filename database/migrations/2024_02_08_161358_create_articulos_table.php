<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique();
            $table->string('descripcion');
            $table->bigInteger('categorias_id')->unsigned()->nullable();
            $table->bigInteger('procedencias_id')->unsigned()->nullable();
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->string('serial')->nullable();
            $table->string('color')->nullable();
            $table->string('identificador')->nullable();
            $table->text('adicional')->nullable();
            $table->text('imagen')->nullable();
            $table->text('mini')->nullable();
            $table->text('detail')->nullable();
            $table->text('cart')->nullable();
            $table->text('banner')->nullable();
            $table->foreign('categorias_id')->references('id')->on('categorias')->nullOnDelete();
            $table->foreign('procedencias_id')->references('id')->on('procedencias')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articulos');
    }
};
