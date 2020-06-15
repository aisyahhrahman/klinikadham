@extends('admin')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Maklumat Ubat</h2>
            <br>
            <br>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary"  href="{{ route('ubats.index') }}"> Undur</a>
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
   
<form action="{{ route('ubats.store') }}" method="POST">
    @csrf
  
     <div class="row">
   
     <div class="form-group col-md-6">
            <div class="form-group">
                <strong>Nama Ubat:</strong>
                <input type="text" name="description" class="form-control" placeholder="Nama Ubat">
            </div>
        </div>
        <div class="form-group col-md-6">
            <div class="form-group">
                <strong>Harga:</strong>
                <input type="text" name="harga" class="form-control" placeholder="Harga">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Hantar</button>
        </div>
    </div>
   
</form>
@endsection