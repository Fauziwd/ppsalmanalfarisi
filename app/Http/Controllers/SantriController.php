<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;
use App\Exports\SantriExport;
use Maatwebsite\Excel\Facades\Excel;

class SantriController extends Controller
{
    public function create()
    {
        return view('santri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no' => 'required|integer',
            'nis' => 'required|integer',
            'nama' => 'required|string',
            'lulusan' => 'required|string',
            'asal' => 'required|string',
            'ttl' => 'required|date',
            'anak_ke' => 'required|integer',
            'status_yatim_piatu' => 'required|boolean',
            'bapak' => 'required|string',
            'pekerjaan_bapak' => 'required|string',
            'no_hp_bapak' => 'required|numeric',
            'ibu' => 'required|string',
            'pekerjaan_ibu' => 'required|string',
            'no_hp_ibu' => 'required|numeric',
            'alamat' => 'required|string',
            'kelurahan' => 'required|string',
            'kecamatan' => 'required|string',
            'kota' => 'required|string',
            'provinsi' => 'required|string',
            'kode_pos' => 'required|numeric',
        ]);

        Santri::create($request->all());

        return redirect()->route('santri.create')->with('success', 'Data Santri berhasil disimpan!');
    }
    public function export() 
    {
        return Excel::download(new SantriExport, 'users.xlsx');
    }
}
