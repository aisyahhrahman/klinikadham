<?php

namespace App\Http\Controllers;

use App\Temujanji;
use App\Pesakit;
use Illuminate\Http\Request;

class TemujanjiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create_temujanji()
    {
        $pesakit = Pesakit::all();
        return view('create_temujanji', ['pesakit' => $pesakit]);
    }

    public function temujanji_admin()
    {
        $temujanjis = Temujanji::latest()->paginate(5);
        return view('temujanji_admin', compact('temujanjis'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function index()
    {
        //$pesakit = Pesakit::all();
        //return view('temujanji.create_temujanji', ['pesakit' => $pesakit]);

        //$temujanjis = Temujanji::latest()->paginate(5);
        //return view('temujanji.temujanji_admin', compact('temujanjis'))->with('i', (request()->input('page', 1) - 1) * 5);
        $temujanjis = Temujanji::latest()->paginate(5);
        return view('temujanji_admin', compact('temujanjis'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pesakit = Pesakit::all();
        return view('create_temujanji', ['pesakit' => $pesakit]);
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
            'kad_pengenalan' => 'required',
            'keterangan' => 'required',
            'tarikh' => 'required',
            'masa' => 'required',
            'table_id' => 'required',
        ]);

        Temujanji::create($request->all());
        return redirect()->route('temujanji.index')->with('success', 'Maklumat temujanji berjaya disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Temujanji  $temujanji
     * @return \Illuminate\Http\Response
     */
    public function show(Temujanji $temujanji)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Temujanji  $temujanji
     * @return \Illuminate\Http\Response
     */
    public function edit(Temujanji $temujanji)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Temujanji  $temujanji
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Temujanji $temujanji)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Temujanji  $temujanji
     * @return \Illuminate\Http\Response
     */
    public function destroy(Temujanji $temujanji, $id)
    {
        Temujanji::destroy($id);
        return redirect()->route('temujanji.index')
            ->with('success', 'Maklumat Pesakit berjaya di Padam');

    }
}
