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
        Schema::create ('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('placa', 10);
            $table->enum('tipo', ['carro', 'moto', 'camioneta']);
            $table->string('propietario')->nullable();
            $table->text('observaciones')->nullable();
            $table->timestamp('hora_ingreso')->useCurrent();
            $table->boolean('activo')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
