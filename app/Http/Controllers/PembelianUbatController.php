<?php

namespace App\Http\Controllers;

use App\PembelianUbat;
use Illuminate\Http\Request;

class PembelianUbatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PembelianUbat::all();
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
     * @param  \App\PembelianUbat  $pembelianUbat
     * @return \Illuminate\Http\Response
     */
    public function show(PembelianUbat $pembelianUbat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PembelianUbat  $pembelianUbat
     * @return \Illuminate\Http\Response
     */
    public function edit(PembelianUbat $pembelianUbat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PembelianUbat  $pembelianUbat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PembelianUbat $pembelianUbat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PembelianUbat  $pembelianUbat
     * @return \Illuminate\Http\Response
     */
    public function destroy(PembelianUbat $pembelianUbat)
    {
        //
    }
}
