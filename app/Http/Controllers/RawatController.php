<?php

namespace App\Http\Controllers;

use App\RawatPesakit;
use App\Pesakit;
use App\Servis;
use App\Stock;
use App\Ubat;
use Illuminate\Http\Request;
use Illuminate\Http\Requestinput;
use DB; 

class RawatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function rawat_pesakit()
    {
        $data= Pesakit::all();
        return view ('rawat_pesakit',['data'=>$data]);
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
     * @param  \App\RawatPesakit  $rawatPesakit
     * @return \Illuminate\Http\Response
     */
    public function show(RawatPesakit $rawatPesakit, $id)
    {
       
        $ubat = DB::table('stocks')
                ->join('ubats', 'stocks.ubat_id', '=', 'ubats.ubat_id')
                ->select('stocks.*', 'ubats.*')
                ->get();
        
        $servis = Servis::where('servis_id', $id)->with('makmal')->with('pesakit')->with('cutiSakit')->with('jenisPenyakit')->get()->first()->toArray();
        return view ('doktors.viewdoktor', ['data'=>$servis, 'ubat' => $ubat]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RawatPesakit  $rawatPesakit
     * @return \Illuminate\Http\Response
     */
    public function edit(RawatPesakit $rawatPesakit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RawatPesakit  $rawatPesakit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RawatPesakit $rawatPesakit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RawatPesakit  $rawatPesakit
     * @return \Illuminate\Http\Response
     */
    public function destroy($table_id)
    {
        $pesakit = Pesakit::find($table_id);
        $pesakit->delete();

      return redirect('/doktors')->with('success', 'Maklumat Servis berjaya di Padam');
    
    }
}
