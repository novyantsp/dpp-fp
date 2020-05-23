<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormAll;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formAll = FormAll::all();
        // dd($formAll);
        return view('pages.daftar_pasien', compact('formAll'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.input_data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'sex'=>'required|numeric|digits:1',
            'no_rm'=>'required',
            'birth'=>'required',
            'usia'=>'required',
            'alamat'=>'required',
            'tgl_asesmen' => 'required'
        ]);

        $formAll = new FormAll([
            'nama' => $request->get('nama'),
            'sex' => $request->get('sex'),
            'no_rm' => $request->get('no_rm'),
            'birth' => $request->get('birth'),
            'usia' => $request->get('usia'),
            'alamat' => $request->get('alamat'),
            'tgl_asesmen' => $request->get('tgl_asesmen')
        ]);
        // dd($formAll);
        $formAll->save();
        return redirect('/pasien')->with('success', 'Pasien saved!');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
