<?php

namespace App\Http\Controllers;

use App\Models\paketJasa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class paketJasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = paketJasa::orderBy('updated_at', 'desc')->get();
        return view('dashboard.paketJasa.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = paketJasa::all();
        return view('dashboard.paketJasa.create', compact('data'));
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
        Session::flash('price', $request->price);
        Session::flash('type', $request->type);
        Session::flash('text', $request->text);

        $request->validate(
            [
                'title' => 'required',
                'price' => 'required',
                'type' => 'required',
                'text' => 'required'
            ],
            [
                'title.required' => 'Title Required!',
                'price.required' => 'Price Required!',
                'type.required' => 'Type Required!',
                'text.required' => 'Text Required!'
            ]
        );

        $data = [
            'title' => $request->title,
            'price' => $request->price,
            'type' => $request->type,
            'text' => $request->text
        ];

        paketJasa::create($data);

        return redirect()->route('paketJasa.index')->with('success', 'Data Added!');
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
        $data = paketJasa::where('id', $id)->first();
        return view('dashboard.paketJasa.edit')->with('data', $data);
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
                'price' => 'required',
                'type' => 'required',
                'text' => 'required'
            ],
            [
                'title.required' => 'Title Required!',
                'price.required' => 'Price Required!',
                'type.required' => 'Type Required!',
                'text.required' => 'Text Required!'
            ]
        );

        $data = [
            'title' => $request->title,
            'price' => $request->price,
            'type' => $request->type,
            'text' => $request->text
        ];

        paketJasa::where('id', $id)->update($data);

        return redirect()->route('paketJasa.index')->with('success', 'Data Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        paketJasa::where('id', $id)->delete();
        return redirect()->route('paketJasa.index')->with('success', 'Data Deleted!');
    }
}