@extends('admin')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Papar Maklumat Pesakit</h2>
            <br><br>

        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('pesakits.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama Pesakit:</strong>
            {{ $pesakit->nama_pesakit }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombor ID:</strong>
            {{ $pesakit->nombor_id }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Kad Pengenalan:</strong>
            {{ $pesakit->kad_pengenalan }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jantina:</strong>
            {{ $pesakit->jantina }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Alamat:</strong>
            {{ $pesakit->alamat }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombor Telefon:</strong>
            {{ $pesakit->nombor_fon }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {{ $pesakit->email }}
        </div>
    </div>

</div>
@endsection