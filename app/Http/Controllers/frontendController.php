<?php

namespace App\Http\Controllers;

use App\Models\halaman;
use App\Models\jadwal;
use App\Models\trainer;
use App\Models\kendaraan;
use App\Models\paketJasa;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    function __construct()
    {
        $this->_tipeTrainer = 'Trainer';
        $this->_tipePengurus = 'Pengurus';
    }

    public function index()
    {
        $logo_id = get_meta_value('_logo');
        $logo_data = halaman::where('id', $logo_id)->first();

        $judul_id = get_meta_value('_judul');
        $judul_data = halaman::where('id', $judul_id)->first();

        $manual1_id = get_meta_value('_manual1');
        $manual1_data = paketJasa::where('id', $manual1_id)->first();
        $manual2_id = get_meta_value('_manual2');
        $manual2_data = paketJasa::where('id', $manual2_id)->first();
        $manual3_id = get_meta_value('_manual3');
        $manual3_data = paketJasa::where('id', $manual3_id)->first();
        $manual4_id = get_meta_value('_manual4');
        $manual4_data = paketJasa::where('id', $manual4_id)->first();

        $matic1_id = get_meta_value('_matic1');
        $matic1_data = paketJasa::where('id', $matic1_id)->first();
        $matic2_id = get_meta_value('_matic2');
        $matic2_data = paketJasa::where('id', $matic2_id)->first();
        $matic3_id = get_meta_value('_matic3');
        $matic3_data = paketJasa::where('id', $matic3_id)->first();
        $matic4_id = get_meta_value('_matic4');
        $matic4_data = paketJasa::where('id', $matic4_id)->first();

        $jadwal_tanggal = jadwal::all();
        $jadwal_kendaraan = kendaraan::all();
        $data_kendaraan = kendaraan::get();
        $data_trainer = trainer::where('tipe', $this->_tipeTrainer)->get();
        $data_pengurus = trainer::where('tipe', $this->_tipePengurus)->get();

        return view('frontend.index')->with(
            [
                'logo' => $logo_data,
                'judul' => $judul_data,
                'jadwalTanggal' => $jadwal_tanggal,
                'jadwalKendaraan' => $jadwal_kendaraan,
                'kendaraan' => $data_kendaraan,
                'trainer' => $data_trainer,
                'pengurus' => $data_pengurus,
                'manual1' => $manual1_data,
                'manual2' => $manual2_data,
                'manual3' => $manual3_data,
                'manual4' => $manual4_data,
                'matic1' => $matic1_data,
                'matic2' => $matic2_data,
                'matic3' => $matic3_data,
                'matic4' => $matic4_data,

            ]
        );
    }

    public function contact()
    {
        $logo_id = get_meta_value('_logo');
        $logo_data = halaman::where('id', $logo_id)->first();

        return view('frontend.contact')->with([
            'logo' => $logo_data
        ]);
    }
}