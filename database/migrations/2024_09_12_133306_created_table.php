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
        Schema::create('trains', function(Blueprint $table){
            $table->id();
            $table->string('azienda'); // Azienda
            $table->string('stazione_di_partenza'); // Stazione di partenza
            $table->string('stazione_di_arrivo'); // Stazione di arrivo
            $table->time('orario_di_partenza'); // Orario di partenza
            $table->time('orario_di_arrivo'); // Orario di arrivo
            $table->string('codice_treno'); // Codice treno
            $table->integer('numero_carrozze'); // Numero di carrozze
            $table->boolean('in_orario')->default(true); // In orario
            $table->boolean('cancellato')->default(false); // Cancellato
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
