@extends('admin')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('pesakits.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('pesakits.update',$pesakit->table_id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Nama Pesakit:</strong>
                <input type="text" name="nama_pesakit" value="{{ $pesakit->nama_pesakit }}" class="form-control" placeholder="Nama Pesakit">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Nombor ID:</strong>
                <input type="text" name="nombor_id" value="{{ $pesakit->nombor_id }}" class="form-control" placeholder="Nombor ID">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Kad Pengenalan:</strong>
                <input type="text" name="kad_pengenalan" value="{{ $pesakit->kad_pengenalan }}" class="form-control" placeholder="Kad Pengenalan">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Jantina:</strong>
                <input type="text" name="jantina" value="{{ $pesakit->jantina }}" class="form-control" placeholder="Jantina">
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Alamat:</strong>
                <input type="text" name="alamat" value="{{ $pesakit->alamat }}" class="form-control" placeholder="Alamat">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Nombor Telefon:</strong>
                <input type="text" name="nombor_fon" value="{{ $pesakit->nombor_fon }}" class="form-control" placeholder="Nombor Telefon">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" value="{{ $pesakit->email }}" class="form-control" placeholder="Email">
            </div>
        </div>



        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection