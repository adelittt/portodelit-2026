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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            // Section Home & About
            $table->string('name')->default('Adellita Meliana Putri');
            $table->string('title')->default('Mahasiswa Sistem Informasi');
            $table->text('bio');
            $table->string('avatar')->nullable(); // Untuk foto profil kamu

            // Section Contact & Sosmed
            $table->string('email')->nullable();
            $table->string('github')->nullable();
            $table->string('instagram')->nullable();
            $table->string('tiktok')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
