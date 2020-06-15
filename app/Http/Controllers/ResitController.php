<?php

namespace App\Http\Controllers;

use App\Resit;
use Illuminate\Http\Request;

class ResitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        return view ('staff.resit');
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
     * @param  \App\Resit  $resit
     * @return \Illuminate\Http\Response
     */
    public function show(Resit $resit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resit  $resit
     * @return \Illuminate\Http\Response
     */
    public function edit(Resit $resit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resit  $resit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resit $resit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resit  $resit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resit $resit)
    {
        //
    }
}
