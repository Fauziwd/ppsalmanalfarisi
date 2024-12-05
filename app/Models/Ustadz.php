<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ustadz extends Model
{
    protected $fillable = [
        'nama',
        'asal',
        'ttl',
        'lulusan',
        'status_menikah',
        'alamat',
    ];
    //
}
