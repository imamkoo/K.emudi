<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use App\Models\halaman;
use App\Models\trainer;
use App\Models\kendaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = jadwal::with('trainer', 'kendaraan')
            ->orderBy('tanggal', 'desc')
            ->get();
        return view('dashboard.jadwal.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataKendaraan = kendaraan::all();
        return view('dashboard.jadwal.create', compact('dataKendaraan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('tanggal', $request->tanggal);
        Session::flash('waktu', $request->waktu);

        $request->validate(
            [
                'tanggal' => 'required',
                'waktu' => 'required',
            ],
            [
                'tanggal.required' => 'tanggal Required!',
                'waktu.required' => 'waktu Required!',
            ],
        );

        $data = [
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
        ];

        $kendaraan = kendaraan::findOrFail($request->kendaraan_id);
        $kendaraan->jadwal()->create($data);

        return redirect()
            ->route('jadwal.index')
            ->with('success', 'Data Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = jadwal::where('id', $id)->first();
        return view('dashboard.jadwal.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'tanggal' => 'required',
                'waktu' => 'required',
            ],
            [
                'tanggal.required' => 'tanggal Required!',
                'waktu.required' => 'waktu Required!',
            ],
        );

        $data = [
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
        ];

        jadwal::where('id', $id)->update($data);

        return redirect()
            ->route('jadwal.index')
            ->with('success', 'Data Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        jadwal::where('id', $id)->delete();
        return redirect()
            ->route('jadwal.index')
            ->with('success', 'Data Deleted!');
    }

    public function cari(Request $request)
    {
        $logo_id = get_meta_value('_logo');
        $logo_data = halaman::where('id', $logo_id)->first();

        $cari = $request->cari;
        $cariWaktu = $request->waktu;
        $cariMobil = $request->mobil;

        $jadwal = jadwal::whereHas('kendaraan', function ($query) use ($cari,  $cariWaktu, $cariMobil) {
            $query->Where('title', 'LIKE', '%' . $cariMobil . '%')->orWhere('tanggal', 'LIKE', '%' . $cari . '%')->orWhere('waktu', 'LIKE', '%' . $cariWaktu . '%');
        })
            ->Where('waktu', 'LIKE', '%' . $cariWaktu . '%')
            ->orWhere('tanggal', 'LIKE', '%' . $cari . '%')

            ->paginate();

        return view('frontend.search', ['jadwal' => $jadwal])->with([
            'logo' => $logo_data

        ]);
    }
}