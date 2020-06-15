@extends('admin')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Ubat</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('ubats.index') }}"> Back</a>
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

<form action="{{ route('ubats.update',$ubat->ubat_id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="form-group col-md-6">
            <div class="form-group">
                <strong>Ubat id:</strong>
                <input type="text" name="ubat_id" value="{{ $ubat->ubat_id }}" class="form-control" placeholder="Ubat id">
            </div>
        </div>
        <div class="form-group col-md-6">
            <div class="form-group">
                <strong>Nama Ubat:</strong>
                <input type="text" name="description" value="{{ $ubat->description }}" class="form-control" placeholder="Nama Ubat">
            </div>
        </div>
        <div class="form-group col-md-6">
            <div class="form-group">
                <strong>Harga:</strong>
                <input type="text" name="harga" value="{{ $ubat->harga }}" class="form-control" placeholder="Harga">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection