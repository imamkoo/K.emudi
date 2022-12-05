<?php

namespace App\Http\Controllers;

use App\Models\metadata;
use App\Models\paketJasa;
use Illuminate\Http\Request;

class settingPaketJasaController extends Controller
{
    public function index()
    {
        $dataPaketJasa = paketJasa::orderBy('type', 'asc')->get();
        return view('dashboard.settingPaketJasa.index')->with('dataPaketJasa', $dataPaketJasa);
    }

    public function update(Request $request)
    {
        metadata::updateOrCreate(['meta_key' => '_manual1'], ['meta_value' => $request->_manual1]);
        metadata::updateOrCreate(['meta_key' => '_manual2'], ['meta_value' => $request->_manual2]);
        metadata::updateOrCreate(['meta_key' => '_manual3'], ['meta_value' => $request->_manual3]);
        metadata::updateOrCreate(['meta_key' => '_manual4'], ['meta_value' => $request->_manual4]);
        metadata::updateOrCreate(['meta_key' => '_matic1'], ['meta_value' => $request->_matic1]);
        metadata::updateOrCreate(['meta_key' => '_matic2'], ['meta_value' => $request->_matic2]);
        metadata::updateOrCreate(['meta_key' => '_matic3'], ['meta_value' => $request->_matic3]);
        metadata::updateOrCreate(['meta_key' => '_matic4'], ['meta_value' => $request->_matic4]);

        return redirect()->route('settingPaketJasa.index')->with('success', 'Data Added!');
    }
}