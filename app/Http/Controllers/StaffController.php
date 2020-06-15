<?php

namespace App\Http\Controllers;

use App\PembelianUbat;
use App\Staff;
use App\Pesakit;
use Illuminate\Http\Request;
use DB;

class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function staff_view()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pesakit::where('status', 1)->get();
        $dataSuccess = Pesakit::where('status', 2)->get();
 
        return view('staff_view', ['data' => $data, 'dataSuccess' => $dataSuccess]);
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
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit($staff)
    {
        $invoice_num = rand(10000, 99999);
        $date_now = date('d-m-Y');
        $user = Pesakit::where('table_id', $staff)->first()->toArray();
        $ubat = PembelianUbat::where('pesakit_id', $user['table_id'])->get();
        $date = date("Y-m-d");
        
        $patientUbat = DB::table('pembelian_ubats')
            ->join('stocks', 'pembelian_ubats.ubat', '=', 'stocks.stock_id')
            ->join('ubats', 'stocks.ubat_id', '=', 'ubats.ubat_id')
            ->where('pembelian_ubats.pesakit_id', $staff)
            ->where('pembelian_ubats.tarikh', $date)
            ->select('*')
            ->get();

        foreach ($patientUbat as $key => $value) {
            $harga = ($value->price * $value->kuantiti_pembelian);
            $price[] = $harga;
        }
        $total = array_sum($price);
        return view('staff.resit', [
            'patient' => $user,
            'ubat' => $ubat,
            'invoice_num' => $invoice_num,
            'date_now' => $date_now,
            'patientUbat' => $patientUbat,
            'total' => $total
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Pesakit::where('table_id', $id)->first();
        $user->update(['status' => 2]);

        return redirect()->route('staff')->with('success', 'update success.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        //
    }
}
