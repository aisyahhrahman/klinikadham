<?php

namespace App\Http\Controllers;

use App\Ubat;
use Illuminate\Http\Request;

class UbatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ubats = Ubat::latest()->paginate(5);
  
        return view('ubats.index',compact('ubats'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ubatNum = 'U' . mt_rand(1000, 9999);
        return view('ubats.create' , ['num' => $ubatNum]);
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
            //'ubat_id' => 'required',
            'description' => 'required',
            'harga' => 'required'
        ]);
  
        Ubat::create($request->all());
   
        return redirect()->route('ubats.index')
                        ->with('success','Maklumat ubat berjaya disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ubat  $ubat
     * @return \Illuminate\Http\Response
     */
    public function show(Ubat $ubat)
    {
        return view('ubats.show',compact('ubat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ubat  $ubat
     * @return \Illuminate\Http\Response
     */
    public function edit(Ubat $ubat)
    {
        return view('ubats.edit',compact('ubat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ubat  $ubat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ubat $ubat)
    {
        $request->validate([
            //'ubat_id' => 'required',
            'description' => 'required',
            'harga' => 'required'
          
        ]);
  
        $ubat->update($request->all());
  
        return redirect()->route('ubats.index')
                        ->with('success','Maklumat ubat berjaya dikemaskini');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ubat  $ubat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ubat $ubat)
    {
        $ubat->delete();
  
        return redirect()->route('ubats.index')
                        ->with('success','Maklumat ubat berjaya di Padam');
    }
}
