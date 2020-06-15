<?php

namespace App\Http\Controllers;

use App\JenisPenyakit;
use Illuminate\Http\Request;

class JenisPenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenispenyakits= JenisPenyakit::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view ('doktors.viewdoktor');
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
            'jenis_penyakit' => 'required',
            'catatan' => 'required',
        ]);
        
        JenisPenyakit::create($request->all());
        
       //return redirect()->route('doktors.rawat')->with('success', 'Maklumat Pesakit berjaya disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JenisPenyakit  $jenisPenyakit
     * @return \Illuminate\Http\Response
     */
    public function show(JenisPenyakit $jenisPenyakit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JenisPenyakit  $jenisPenyakit
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisPenyakit $jenisPenyakit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JenisPenyakit  $jenisPenyakit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisPenyakit $jenisPenyakit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JenisPenyakit  $jenisPenyakit
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisPenyakit $jenisPenyakit)
    {
        $jenisPenyakit->delete();
  
       // return redirect()->route('doktors.rawat_pesakit')
                        //->with('success','Maklumat Pesakit berjaya di Padam'); 
    }
}
