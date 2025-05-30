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
        Schema::create('gallery_details', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('image'); // Assuming this is a URL or path to the image
            $table->string('title');
            $table->string('description2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery_details');
    }
};
