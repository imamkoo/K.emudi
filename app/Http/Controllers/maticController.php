<?php

namespace App\Http\Controllers;

use App\Models\kendaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class maticController extends Controller
{
    function __construct()
    {
        $this->_tipe = 'matic';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = kendaraan::where('tipe', $this->_tipe)->orderBy('updated_at', 'desc')->get();
        return view('dashboard.matic.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.matic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('title', $request->title);

        $request->validate(
            [
                'title' => 'required',
                'foto' => 'mimes:jpeg,jpg,png,gif|required',
            ],
            [
                'title.required' => 'Title Required!',
                'foto.required' => 'Foto Required!',
                'foto.mimes' => 'Foto yang dimasukkan hanya diperbolehkan JPEG, JPG, PNG, dan GIF',
            ]
        );

        if ($request->hasFile('foto')) {
            $foto_file = $request->file('foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_baru = date('ymdhis') . ".$foto_ekstensi";
            $foto_file->move(public_path('foto'), $foto_baru);
        }

        $data = [
            'foto' => $foto_baru,
            'tipe' => $this->_tipe,
            'title' => $request->title,
        ];

        kendaraan::create($data);

        return redirect()->route('matic.index')->with('success', 'Data Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = kendaraan::where('id', $id)->where('tipe', $this->_tipe)->first();
        return view('dashboard.matic.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'title' => 'required',
                'foto' => 'mimes:jpeg,jpg,png,gif|required',
            ],
            [
                'title.required' => 'Title Required!',
                'foto.required' => 'Foto Required!',
                'foto.mimes' => 'Foto yang dimasukkan hanya diperbolehkan JPEG, JPG, PNG, dan GIF',
            ]
        );

        $cek = kendaraan::find($id);
        #Check if uploaded file already exist in Folder
        if ($request->hasFile('foto')) {

            #Get Image Path from Folder
            $path = (public_path('foto') . "/" . $cek->foto);
            if (File::exists($path)) {
                File::delete($path);
            }
            // If File is new and not Exist in Folder
            $foto_file = $request->file('foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_baru = date('ymdhis') . ".$foto_ekstensi";
            $foto_file->move(public_path('foto'), $foto_baru);
        }

        $data = [
            'foto' => $foto_baru,
            'tipe' => $this->_tipe,
            'title' => $request->title,
        ];

        kendaraan::where('id', $id)->update($data);

        return redirect()->route('matic.index')->with('success', 'Data Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cek = kendaraan::find($id);
        $image_path = public_path('foto') . "/" . $cek->foto;
        if (file_exists($image_path)) {
            File::delete($image_path);
        }

        kendaraan::where('id', $id)->where('tipe', $this->_tipe)->delete();
        return redirect()->route('matic.index')->with('success', 'Data Deleted!');
    }
}