<?php

namespace App\Http\Controllers;

use App\Models\halaman;
use App\Models\metadata;
use Illuminate\Http\Request;

class settingHalamanController extends Controller
{
    public function index()
    {
        $dataHalaman = halaman::orderBy('title', 'asc')->get();
        return view('dashboard.settingHalaman.index')->with('dataHalaman', $dataHalaman);
    }

    public function update(Request $request)
    {
        metadata::updateOrCreate(['meta_key' => '_logo'], ['meta_value' => $request->_logo]);
        metadata::updateOrCreate(['meta_key' => '_judul'], ['meta_value' => $request->_judul]);

        return redirect()->route('settingHalaman.index')->with('success', 'Data Added!');
    }
}