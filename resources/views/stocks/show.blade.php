@extends('admin')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Papar Maklumat Stok Ubat</h2>
            </div>
            <br><br>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('stocks.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stok id:</strong>
                {{ $stock->stock_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kuantiti:</strong>
                {{ $stock->kuantiti }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tarikh:</strong>
                {{ $stock->tarikh }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Batch No:</strong>
                {{ $stock->batch_no }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Invoice:</strong>
                {{ $stock->invoice }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mal No:</strong>
                {{ $stock->mal_no }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tarikh Luput:</strong>
                {{ $stock->expiry_date }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ubat id:</strong>
                {{ $stock->ubat_id }}
            </div>
        </div>
    </div>
@endsection