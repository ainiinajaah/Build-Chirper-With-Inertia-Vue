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
        Schema::table('chirps', function (Blueprint $table) {
            $table->string('image')->nullable(); // Menambahkan kolom 'image' yang bisa bernilai null
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('chirps', function (Blueprint $table) {
            $table->dropColumn('image'); // Menghapus kolom 'image' jika migrasi dibatalkan
        });
    }
};
