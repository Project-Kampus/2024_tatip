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
        Schema::create('tartips', function (Blueprint $table) {
            $table->id();
            $table->enum('tatip', ['Umum', 'Keamanan dan Ketertiban', 'Kebersihan Lingkungan', 'Iuran Warga', 'Kegiatan Sosial']);
            $table->text('text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tartips');
    }
};
