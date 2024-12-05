<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        // Membuat tabel users jika belum ada
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->id(); // Primary key
                $table->string('name'); // Nama user
                $table->string('email')->unique(); // Email unik
                $table->timestamp('email_verified_at')->nullable(); // Waktu verifikasi email
                $table->string('password'); // Password user
                $table->rememberToken(); // Token untuk fitur "remember me"
                $table->timestamps(); // Kolom created_at dan updated_at
            });
        }

        // Membuat tabel password_reset_tokens jika belum ada
        if (!Schema::hasTable('password_reset_tokens')) {
            Schema::create('password_reset_tokens', function (Blueprint $table) {
                $table->string('email')->primary(); // Email sebagai primary key
                $table->string('token'); // Token reset password
                $table->timestamp('created_at')->nullable(); // Catatan waktu token dibuat
            });
        }

        // Membuat tabel sessions jika belum ada
        if (!Schema::hasTable('sessions')) {
            Schema::create('sessions', function (Blueprint $table) {
                $table->string('id')->primary(); // ID sesi sebagai primary key
                $table->foreignId('user_id')->nullable()->index(); // Relasi ke tabel users (nullable)
                $table->string('ip_address', 45)->nullable(); // Menyimpan alamat IP
                $table->text('user_agent')->nullable(); // Menyimpan User Agent (Browser/Device)
                $table->longText('payload'); // Payload sesi
                $table->integer('last_activity')->index(); // Aktivitas terakhir dalam timestamp
            });
        }
    }

    /**
     * Hapus migrasi.
     */
    public function down(): void
    {
        // Hapus tabel sesuai urutan dependensi
        if (Schema::hasTable('sessions')) {
            Schema::dropIfExists('sessions');
        }

        if (Schema::hasTable('password_reset_tokens')) {
            Schema::dropIfExists('password_reset_tokens');
        }

        if (Schema::hasTable('users')) {
            Schema::dropIfExists('users');
        }
    }
    
};
