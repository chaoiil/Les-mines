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
        Schema::create('equipement_mine', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('equipement_id');
            $table->BigInteger('mines_id');
            $table->date_time('date_begin');
            $table->date_time('date_end');
            $table->foreign('equipement_id')->on('equipements')->references('id');
            $table->foreign('mine_id')->on('mines')->references('id');
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipement_mine');
    }
};
