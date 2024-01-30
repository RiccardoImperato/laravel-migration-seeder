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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 20);
            $table->string('stazione_partenza', 50);
            $table->time('orario_partenza', $precision = 0);
            $table->string('stazione_arrivo', 50);
            $table->time('orario_arrivo', $precision = 0);
            $table->date('data');
            $table->string('codice_treno', 10)->nullable();
            $table->tinyInteger('carrozze')->unsigned()->nullable();
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);
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
