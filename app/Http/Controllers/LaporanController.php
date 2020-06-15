<?php

namespace App\Http\Controllers;

use App\Laporan;
use App\LaporanKewangan;
use App\LaporanPenyakit;
use App\LaporanPerubatan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kewangan()
    {
        $data = LaporanKewangan::all();
        return view ('laporan.kewangan', ['data' => $data]);
    }

    public function perubatan()
    {
        $data = LaporanPerubatan::all();
        return view ('laporan.perubatan', ['data' => $data]);
    }

    public function penyakit()
    {
        $data = LaporanPenyakit::all();
        return view ('laporan.penyakit', ['data' => $data]);
    }

    public function graf_laporan()
    {
        return view ('laporan.graf_laporan');
    }

    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $laporan)
    {
        //
    }
}
