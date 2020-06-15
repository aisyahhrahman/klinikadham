<?php

namespace App\Http\Controllers;

use App\Temujanjiadmin;
use Illuminate\Http\Request;

class TemujanjiadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('temujanjiadmin.temujanji_admin');
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
     * @param  \App\Temujanjiadmin  $temujanjiadmin
     * @return \Illuminate\Http\Response
     */
    public function show(Temujanjiadmin $temujanjiadmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Temujanjiadmin  $temujanjiadmin
     * @return \Illuminate\Http\Response
     */
    public function edit(Temujanjiadmin $temujanjiadmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Temujanjiadmin  $temujanjiadmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Temujanjiadmin $temujanjiadmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Temujanjiadmin  $temujanjiadmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Temujanjiadmin $temujanjiadmin)
    {
        //
    }
}
