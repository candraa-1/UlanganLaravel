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
        Schema::create('esports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tournament_esport_id')->constrained('tournament_esports');
            $table->string('nama_game');
            $table->string('nama_tim');
            $table->integer('jumlah_juara');
            $table->integer('total_hadiah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('esports');
    }
};
