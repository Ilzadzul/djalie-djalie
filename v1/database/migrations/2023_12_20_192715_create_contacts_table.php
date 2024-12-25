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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Nama lengkap
            $table->string('email')->unique(); // Email dengan keunikan
            $table->string('phone')->nullable(); // Nomor telepon opsional
            $table->string('address')->nullable(); // Alamat opsional
            $table->text('message'); // Pesan atau keterangan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
