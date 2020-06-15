@extends('admin')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Papar Maklumat Ubat</h2>
            </div>
            <br><br>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('ubats.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ubat id:</strong>
                {{ $ubat->ubat_id}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Ubat:</strong>
                {{ $ubat->description}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga:</strong>
                {{ $ubat->harga }}
            </div>
        </div>
    </div>
@endsection