<?php

namespace App\Http\Controllers;

use App\Pekerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;



class PekerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pekerjas = Pekerja::latest()->paginate(5);

        return view('pekerjas.index', compact('pekerjas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pekerjas.create');
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
            'nama_pekerja' => 'required',
            'kad_pengenalan' => 'required|numeric|min:0|not_in:0',
            'jantina' => 'required',
            'alamat_pekerja' => 'required',
            'nombor_fon_pekerja' => 'required|numeric|min:0|not_in:0',
            'status' => 'required',
            'nama_pewaris' => 'required',
            'hubungan_pewaris' => 'required',
            'alamat_pewaris' => 'required',
            'nombor_fon_pewaris' => 'required|numeric|min:0|not_in:0',
        ]);

        Pekerja::create($request->all());

        return redirect()->route('pekerjas.index')
            ->with('success', 'Maklumat Pekerja berjaya disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pekerja  $pekerja
     * @return \Illuminate\Http\Response
     */
    public function show(Pekerja $pekerja)
    {
        return view('pekerjas.show', compact('pekerja'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pekerja  $pekerja
     * @return \Illuminate\Http\Response
     */
    public function edit(Pekerja $pekerja)
    {
        return view('pekerjas.edit', compact('pekerja'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pekerja  $pekerja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pekerja $pekerja)
    {
        $request->validate([
            'nama_pekerja' => 'required',
            'kad_pengenalan' => 'required|numeric|min:0|not_in:0',
            'jantina' => 'required',
            'alamat_pekerja' => 'required',
            'nombor_fon_pekerja' => 'required|numeric|min:0|not_in:0',
            'status' => 'required',
            'nama_pewaris' => 'required',
            'hubungan_pewaris' => 'required',
            'alamat_pewaris' => 'required',
            'nombor_fon_pewaris' => 'required|numeric|min:0|not_in:0',
        ]);

        $pekerja->update($request->all());

        return redirect()->route('pekerjas.index')
            ->with('success', 'Maklumat Pekerja berjaya dikemaskini');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pekerja  $pekerja
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pekerja $pekerja)
    {
        $pekerja->delete();

        return redirect()->route('pekerjas.index')
            ->with('success', 'Maklumat Pekerja berjaya di Padam');
    }
}
