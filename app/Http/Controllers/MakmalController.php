<?php

namespace App\Http\Controllers;

use App\Makmal;
use Illuminate\Http\Request;

class MakmalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $makmals = Makmal::all();
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
            'makmal_name' => 'required',
            'harga' => 'required',
        ]);
        
        Makmal::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Makmal  $makmal
     * @return \Illuminate\Http\Response
     */
    public function show(Makmal $makmal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Makmal  $makmal
     * @return \Illuminate\Http\Response
     */
    public function edit(Makmal $makmal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Makmal  $makmal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Makmal $makmal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Makmal  $makmal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Makmal $makmal)
    {
        //
    }
}
