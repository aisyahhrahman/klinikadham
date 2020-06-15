<?php

namespace App\Http\Controllers;

use App\Ubat;
use App\JenisPenyakit;
use App\CutiSakit;
use App\Viewdoktor;
use App\Makmal;
use App\Pesakit;
use App\Servis;
use App\Stock;
use App\PembelianUbat;
use Illuminate\Http\Request;
use DB;

class ViewdoktorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function viewdoktor()
    {
        // $data = Ubat::all();
        // return view ('doktors.viewdoktor',['data'=>$data]);

    }
    public function index()
    {

        //$data = Ubat::all();
        //return view('doktors.index',compact('data'));

        //Servis
        $data = Servis::with('makmal')->with('pesakit')->with('cutiSakit')->with('jenisPenyakit')->get()->toArray();
        return view('doktors.index', ['data' => $data]);

        //Pembelian Ubat
        //$data1 = PembelianUbat::with('stock')->with('ubat')->get()->toArray();
        //return view ('doktors.index', ['data1'=> $data1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view ('doktors.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //get all request from form
        $input = $request->all();
        $ubat = self::ubat($input);
        // dd($input);
        
        //convert date to y-m-d format because laravel only can accept this format
        $dateFrom = date("Y-m-d", strtotime($input['date_from']));
        $dateUntil = date("Y-m-d", strtotime($input['date_until']));

        //store to their table and get their id
        if (!empty($input['jenis_penyakit'])) {
            $jenispenyakits = JenisPenyakit::create(['jenis_penyakit' => $input['jenis_penyakit'], 'catatan' => $input['catatan']]);
            $cutisakits = CutiSakit::create(['total_cuti' => $input['total_cuti'], 'date_from' => $dateFrom, 'date_until' => $dateUntil]);
            $makmals = Makmal::create(['makmal_name' => $input['makmal_name'], 'harga_makmal' => $input['harga_makmal']]);

            //get id from each table
            $jenisId = $jenispenyakits->penyakit_id;
            $cutiId = $cutisakits->cuti_id;
            $makmalId = $makmals->makmal_id;

            //assign all the id in one array
            $arr = [
                'penyakit_id' => $jenisId,
                'makmal_id' => $makmalId,
                'cuti_id' => $cutiId,
            ];

            //find servis data based on pesakit id
            $pesakit = Servis::where('table_id', $input['pesakit_id']);

            //update servis data using mass assignment
            if (!empty($pesakit)) {
                $pesakit->update($arr);
            }
        }

        //save ubat
        foreach ($ubat as $key => $value) {
            $value['tarikh'] = date("Y-m-d");    
            $value['pesakit_id'] = $input['pesakit_id'];
            $ubatDetails = PembelianUbat::create($value);

            //calculation stok ubat
            $stokKuantiti = DB::table('stocks')
                            ->join('ubats', 'stocks.ubat_id', '=', 'ubats.ubat_id')
                            ->select('stocks.*', 'ubats.*')
                            ->where('stock_id', $ubatDetails->ubat)
                            ->first();
            $calculateUbat = $stokKuantiti->kuantiti - $ubatDetails['kuantiti_pembelian'];
            $update = DB::table('stocks')
                            ->where('stock_id', $stokKuantiti->stock_id)
                            ->update(['kuantiti' => $calculateUbat]);
        } 

        //everything redirect to index
        return redirect()->route('doktors.index')->with('success', 'Maklumat Pesakit berjaya disimpan.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Viewdoktor  $viewdoktor
     * @return \Illuminate\Http\Response
     */
    public function show(Viewdoktor $viewdoktor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Viewdoktor  $viewdoktor
     * @return \Illuminate\Http\Response
     */
    public function edit(Viewdoktor $viewdoktor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Viewdoktor  $viewdoktor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Viewdoktor $viewdoktor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Viewdoktor  $viewdoktor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Viewdoktor $viewdoktor)
    {
       //
    }

    public static function ubat($input)
    {
        $array = [];
        foreach ($input['harga'] as $key => $value) {
            foreach ($input['keterangan'] as $keyketerangan => $keterangan) {
                foreach ($input['kuantiti_pembelian'] as $keykuantiti => $kuantiti) {
                    if (($key == $keyketerangan) && ($keyketerangan == $keykuantiti)) {
                        $array[] = [
                            'description' => $keterangan,
                            'kuantiti_pembelian' => $kuantiti,
                            'ubat' => $value
                        ];
                    }
                }
            }
        }
        return $array;
    }
}
