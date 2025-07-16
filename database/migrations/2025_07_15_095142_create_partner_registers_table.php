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
        Schema::create('partner_registers', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('fullName');
            $table->string('email');
            $table->string('phone');
            $table->string('businessType')->nullable();
            $table->string('website')->nullable();
            $table->text('message')->nullable();
            $table->boolean('agree')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner_registers');
    }
};
