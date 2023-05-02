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
        Schema::create('bet_slips', function (Blueprint $table) {
            $table->id();
            $table->integer("userId");
            $table->integer("gameId");
            $table->string("gameName");
            $table->string("market");
            $table->integer("odd");
            $table->string("status");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bet_slips');
    }
};
