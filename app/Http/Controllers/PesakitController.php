<?php

namespace App\Http\Controllers;

use App\Pesakit;
use App\Servis;
use App\Temujanji;
use Illuminate\Http\Request;

class PesakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesakits = Pesakit::latest()->paginate(5);

        return view('pesakits.index', compact('pesakits'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pesakitNum = 'P' . mt_rand(1000, 9999);
        return view('pesakits.create', ['num' => $pesakitNum]);
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
            'nama_pesakit' => 'required',
            'nombor_id' => 'required',
            'kad_pengenalan' => 'required|numeric|min:0|not_in:0',
            'jantina' => 'required',
            'alamat' => 'required',
            'nombor_fon' => 'required|numeric|min:0|not_in:0',
            'email' => 'required',
        ]);
        $input = $request->all();
        $input['status'] = 0;
        
        $pesakitId  = Pesakit::create($input);
        $id = $pesakitId->table_id;
        if(!empty($id)){
            Servis::create(['table_id' => $id]);
        }
        return redirect()->route('pesakits.index')->with('success', 'Maklumat Pesakit berjaya disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pesakit  $pesakit
     * @return \Illuminate\Http\Response
     */
    public function show(Pesakit $pesakit)
    {
        return view('pesakits.show', compact('pesakit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pesakit  $pesakit
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesakit $pesakit)
    {
        return view('pesakits.edit', compact('pesakit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pesakit  $pesakit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pesakit $pesakit)
    {
        $request->validate([
            'nama_pesakit' => 'required',
            'nombor_id' => 'required',
            'kad_pengenalan' => 'required|numeric|min:0|not_in:0',
            'jantina' => 'required',
            'alamat' => 'required',
            'nombor_fon' => 'required|numeric|min:0|not_in:0',
            'email' => 'required',
        ]);

        $pesakit->update($request->all());

        return redirect()->route('pesakits.index')
            ->with('success', 'Maklumat Pesakit berjaya dikemaskini');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pesakit  $pesakit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesakit $pesakit)
    {
        //dd($pesakit->table_id);
        $user = Servis::where('table_id', $pesakit->table_id)->first();
        //dd($user->table_id);
        if(!empty($user->table_id)){
            Servis::where('table_id', $user->table_id)->delete();
        }
        
        if(!empty($pesakit->table_id)){
            Temujanji::where('table_id', $pesakit->table_id)->delete();
        }
        Pesakit::where('table_id', $pesakit->table_id)->delete();
        return redirect()->route('pesakits.index')->with('success', 'Maklumat Pesakit berjaya di Padam');
    }

    public function changeStatus($status)
    {
        Pesakit::where('table_id', $status)->update(['status' => 1]);
        return redirect()->route('staff');
    }
}
