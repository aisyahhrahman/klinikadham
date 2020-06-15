<?php

namespace App\Http\Controllers;

use App\Stock;
use App\Ubat;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = Stock::latest()->paginate(5);

        return view('stocks.index', compact('stocks'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ubat = Ubat::all();
        return view('stocks.create', ['ubat' => $ubat]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'ubat_id' => 'required',
            'kuantiti' => 'required',
            'price' => 'required',
            'batch_no' => 'required',
            'invoice' => 'required',
            'tarikh' => 'required',
            'mal_no' => 'required',
            'expiry_date' => 'required',
        ]);

        Stock::create($request->all());

        return redirect()->route('stocks.index')
            ->with('success', 'Maklumat stok berjaya disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        return view('stocks.show', compact('stock'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {
        $stocks = Stock::all()->first();
        //$ubat = Ubat::all();
        //return view('stocks.edit', ['ubat' => $ubat],['stock' => $stock] );
       
        return view('stocks.edit', compact('stocks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock $stock)
    {
        $request->validate([
            'ubat_id' => 'required',
            'kuantiti' => 'required',
            'price' => 'required',
            'batch_no' => 'required',
            'invoice' => 'required',
            'tarikh' => 'required',
            'mal_no' => 'required',
            'expiry_date' => 'required',
        ]);

        $stock->update($request->all());

        return redirect()->route('stocks.index')
            ->with('success', 'Maklumat stok berjaya dikemaskini');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        $stock->delete();

        return redirect()->route('stocks.index')
            ->with('success', 'Maklumat stok berjaya di Padam');
    }
}
