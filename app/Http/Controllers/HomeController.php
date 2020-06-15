<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   public function index()
    {
        return view('admin');
    }
    
 

    public function maklumat_pengguna()
    {
        return view ('layouts.maklumat_pengguna');
    }
    
    public function akaun_penyata()
    {
        return view('layouts.akaun_penyata');
    }
    
    public function aset_klinik()
    {
        return view('layouts.aset_klinik');
    }
    
    public function tambah_pekerja()
    {
        return view('layouts.tambah_pekerja');
    }
    
    public function senarai_pekerja()
    {
        return view('layouts.senarai_pekerja');
    }
    
    public function create()
    {
        return view('pesakits.create');
        return view('pekerjas.create');
    }
    
    public function pesakits()
    {
        return view ('pesakits');
    }
    
    public function ubat_masuk()
    {
        return view('layouts.ubat_masuk');
    }
    
     public function ubat_keluar()
    {
        return view('layouts.ubat_keluar');
    }
    
    public function makmal()
    {
        return view('layouts.makmal');
    }
    
    public function laporan()
    {
        return view('layouts.laporan');
    }
    
    public function nota_kredit()
    {
        return view('layouts.nota_kredit');
    }
    
    public function senarai_pembekal()
    {
        return view('layouts.senarai_pembekal');
    }
    
    public function senarai_ubat()
    {
        return view('layouts.senarai_ubat');
    }
    
    public function buat_temujanji()
    {
        return view('layouts.buat_temujanji');
    }
    
       public function urus_temujanji()
    {
        return view('layouts.urus_temujanji');
    }

    

}



























