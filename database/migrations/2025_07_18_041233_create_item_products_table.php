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
        Schema::create('item_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade')->unique();;
            $table->string(column: 'product_image');
            $table->string('banner_title');
            $table->string('banner_subtitle')->nullable();
            $table->text('banner_description')->nullable();
            $table->longText('product_features')->change(); // or longText()// Supports Summernote HTML
            $table->string('banner_image')->nullable();   // Single banner image
            $table->string('tech_title')->nullable();       // Multiple images (JSON array)
            $table->json('tech_images')->nullable();       // Multiple images (JSON array)
            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_products');
    }
};
