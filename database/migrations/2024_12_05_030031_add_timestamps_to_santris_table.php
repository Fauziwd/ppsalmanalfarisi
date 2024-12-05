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

        // Membuat tabel santris jika belum ada
        if (!Schema::hasTable('santris')) {
            Schema::create('santris', function (Blueprint $table) {
                $table->id(); // Primary key
                $table->integer('no')->unique(); // Nomor unik
                $table->integer('nis')->unique(); // NIS unik
                $table->string('nama'); // Nama Santri
                $table->string('lulusan'); // Lulusan
                $table->string('asal'); // Asal
                $table->date('ttl'); // Tanggal Lahir
                $table->integer('anak_ke'); // Anak ke berapa
                $table->boolean('status_yatim_piatu')->default(0); // Status Yatim/Piatu
                $table->string('bapak'); // Nama bapak
                $table->string('pekerjaan_bapak'); // Pekerjaan bapak
                $table->string('no_hp_bapak'); // Nomor HP bapak
                $table->string('ibu'); // Nama ibu
                $table->string('pekerjaan_ibu'); // Pekerjaan ibu
                $table->string('no_hp_ibu'); // Nomor HP ibu
                $table->text('alamat'); // Alamat
                $table->string('kelurahan'); // Kelurahan
                $table->string('kecamatan'); // Kecamatan
                $table->string('kota'); // Kota
                $table->string('provinsi'); // Provinsi
                $table->string('kode_pos'); // Kode Pos
                $table->timestamps(); // Kolom created_at dan updated_at
            });
        }
    }

    /**
     * Hapus migrasi.
     */
    public function down(): void
    {
        // Hapus tabel sesuai urutan dependensi
        if (Schema::hasTable('santris')) {
            Schema::dropIfExists('santris');
        }

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
