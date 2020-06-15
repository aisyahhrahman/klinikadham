@extends('admin')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Maklumat Pesakit</h2>
        </div>
        <br>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('pesakits.index') }}"> Undur</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> Terdapat beberapa masalah dengan input anda.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('pesakits.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="form-group col-md-6">
            <div class="form-group">
                <strong>Nama Pesakit:</strong>
                <input type="text" name="nama_pesakit" class="form-control" placeholder="Nama Pesakit">
            </div>
        </div>
        <div class="form-group col-md-6">
            <div class="form-group">
                <strong>Nombor ID:</strong>
                <input type="text" name="nombor_id" value="{{ $num }}" class="form-control" readonly>
            </div>
        </div>
        <div class="form-group col-md-6">
            <div class="form-group">
                <strong>Kad Pengenalan:</strong>
                <input type="text" name="kad_pengenalan" class="form-control" placeholder="Kad Pengenalan">
            </div>
        </div>
        <div class="form-group col-md-6">
            <div class="form-group">
                <strong>Jantina:</strong>
                <input type="text" name="jantina" class="form-control" placeholder="Jantina">
            </div>
        </div>
        <div class="form-group col-md-6">
            <div class="form-group">
                <strong>Alamat:</strong>
                <textarea class="form-control" style="height:150px" name="alamat" placeholder="Alamat"> </textarea>
            </div>
        </div>
        <div class="form-group col-md-6">
            <div class="form-group">
                <strong>Nombor Telefon</strong>
                <input type="text" name="nombor_fon" class="form-control" placeholder="Nombor Telefon">
            </div>
        </div>
        <div class="form-group col-md-6">
            <div class="form-group">
                <strong>Email</strong>
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Hantar</button>
        </div>
    </div>

</form>
@endsection