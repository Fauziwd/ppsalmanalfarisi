<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    protected $fillable = [
        'no',
        'nis',
        'nama',
        'lulusan',
        'asal',
        'ttl',
        'anak_ke',
        'status_yatim_piatu',
        'bapak',
        'pekerjaan_bapak',
        'no_hp_bapak',
        'ibu',
        'pekerjaan_ibu',
        'no_hp_ibu',
        'alamat',
        'kelurahan',
        'kecamatan',
        'kota',
        'provinsi',
        'kode_pos',
    ];
    //
}
