@extends('admin')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Papar Maklumat Pekerja</h2>
                <br><br>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pekerjas.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Pekerja:</strong>
                {{ $pekerja->nama_pekerja }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kad Pengenalan:</strong>
                {{ $pekerja->kad_pengenalan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jantina:</strong>
                {{ $pekerja->jantina }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat Pekerja:</strong>
                {{ $pekerja->alamat_pekerja }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombor Telefon Pekerja:</strong>
                {{ $pekerja->nombor_fon_pekerja }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status Perkahwinan:</strong>
                {{ $pekerja->status }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Pewaris:</strong>
                {{ $pekerja->nama_pewaris }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hubungan Pewaris:</strong>
                {{ $pekerja->hubungan_pewaris }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat Pewaris:</strong>
                {{ $pekerja->alamat_pewaris }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombor Telefon Pewaris:</strong>
                {{ $pekerja->nombor_fon_pewaris }}
            </div>
        </div>
    </div>
@endsection