<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('santris', function (Blueprint $table) {
            $table->integer('no');
            $table->integer('nis');
            $table->string('nama');
            $table->string('lulusan');
            $table->string('asal');
            $table->date('ttl');
            $table->integer('anak_ke');
            $table->boolean('status_yatim_piatu');
            $table->string('bapak');
            $table->string('pekerjaan_bapak');
            $table->string('no_hp_bapak');
            $table->string('ibu');
            $table->string('pekerjaan_ibu');
            $table->string('no_hp_ibu');
            $table->text('alamat');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('provinsi');
            $table->integer('kode_pos');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('santris', function (Blueprint $table) {
            //
        });
    }
};
