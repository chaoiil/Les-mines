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
        Schema::create('mines', function (Blueprint $table) {
            $table->id();
            $table->string("name",39);
            $table->string("longitude",15,12);
            $table->string("latitude",15,12);
            $table->biginteger('concession_id');
            $table->timestamps();

            $table->foreign('concession_id')->references('id')->on('concession');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mines');
    }
};
