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
        Schema::create('pays', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('regions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('pay_id');
            $table->foreign('pay_id')->references('id')->on('pays')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('villes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('coefCorrection');
            $table->unsignedBigInteger('region_id');
            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
            $table->timestamps();
        });

    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pays');
        Schema::dropIfExists('villes');
        Schema::dropIfExists('regions');

    }
};
