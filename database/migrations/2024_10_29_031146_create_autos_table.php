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
        Schema::create('autos', function (Blueprint $table) {
            $table->id('auto_id');
            $table->string('marca', 50);
            $table->string('modelo', 50); 
            $table->string('tipo', 30);
            $table->string('color', 30);
            $table->string('anio_fabricacion', 4);
            $table->double('precio');
            $table->string('estado', 20);
            $table->integer('stock');  
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autos');
    }
};
