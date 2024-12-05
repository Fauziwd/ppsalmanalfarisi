<?php

namespace App\Http\Controllers;

use App\Models\Ustadz;
use Illuminate\Http\Request;

class UstadzController extends Controller
{
    public function create()
    {
        return view('ustadz.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'asal' => 'required|string',
            'ttl' => 'required|date',
            'lulusan' => 'required|string',
            'status_menikah' => 'required|boolean',
            'alamat' => 'required|string',
        ]);

        Ustadz::create($request->all());

        return redirect()->route('ustadz.create')->with('success', 'Data Ustadz berhasil disimpan!');
    }
}
