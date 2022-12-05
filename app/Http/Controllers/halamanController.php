<?php

namespace App\Http\Controllers;

use App\Models\halaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class halamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = halaman::orderBy('updated_at', 'desc')->get();
        return view('dashboard.halaman.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.halaman.create');
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
        Session::flash('text', $request->text);

        $request->validate(
            [
                'title' => 'required',
                'text' => 'required'
            ],
            [
                'title.required' => 'Title Required!',
                'text.required' => 'Text Required!'
            ]
        );

        $data = [
            'title' => $request->title,
            'text' => $request->text
        ];

        halaman::create($data);

        return redirect()->route('halaman.index')->with('success', 'Data Added!');
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
        $data = halaman::where('id', $id)->first();
        return view('dashboard.halaman.edit')->with('data', $data);
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
                'text' => 'required'
            ],
            [
                'title.required' => 'Title Required!',
                'text.required' => 'Text Required!'
            ]
        );

        $data = [
            'title' => $request->title,
            'text' => $request->text
        ];

        halaman::where('id', $id)->update($data);

        return redirect()->route('halaman.index')->with('success', 'Data Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        halaman::where('id', $id)->delete();
        return redirect()->route('halaman.index')->with('success', 'Data Deleted!');
    }
}