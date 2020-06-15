<?php

namespace App\Http\Controllers;

use App\CutiSakit;
use Illuminate\Http\Request;

class CutiSakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cutisakits= CutiSakit::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'total_cuti' => 'required',
            'date_from' => 'required',
            'date_until' => 'required',
        ]);
        
        CutiSakit::create($request->all());
        
       // return redirect()->route('doktors.rawat')->with('success', 'Maklumat Pesakit berjaya disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CutiSakit  $cutiSakit
     * @return \Illuminate\Http\Response
     */
    public function show(CutiSakit $cutiSakit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CutiSakit  $cutiSakit
     * @return \Illuminate\Http\Response
     */
    public function edit(CutiSakit $cutiSakit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CutiSakit  $cutiSakit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CutiSakit $cutiSakit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CutiSakit  $cutiSakit
     * @return \Illuminate\Http\Response
     */
    public function destroy(CutiSakit $cutiSakit)
    {
        //
    }
}
