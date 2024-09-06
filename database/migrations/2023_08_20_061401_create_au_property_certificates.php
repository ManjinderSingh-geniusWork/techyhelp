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
        Schema::create('au_property_certificates', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('builder');
            $table->string('product_used')->nullable();
            $table->string('sn')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('au_property_certificates');
    }
};
