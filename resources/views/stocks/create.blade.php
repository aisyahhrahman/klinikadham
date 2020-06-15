@extends('admin')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Maklumat Stok</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('stocks.index') }}"> Undur</a>
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

<form action="{{ route('stocks.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="form-group col-md-6">
            <div class="form-group">
                <strong>Stok id:</strong>
                <select class="form-control select" style="width: 100%;" name="ubat_id" id="ubat_id">
                    <option selected disabled>Pilih Ubat:</option>
                    @foreach($ubat as $key => $list)
                    <option value="{{ $list->ubat_id }}">{{ $list->description }} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group col-md-6">
            <div class="form-group">
                <strong>Kuantiti :</strong>
                <input type="text" name="kuantiti" class="form-control" placeholder="kuantiti">
            </div>
        </div>
        <div class="form-group col-md-6">
            <div class="form-group">
                <strong>Harga :</strong>
                <input type="text" name="price" class="form-control" placeholder="price">
            </div>
        </div>
        <div class="form-group col-md-6">
            <div class="form-group">
                <strong>Batch No:</strong>
                <input type="text" name="batch_no" class="form-control" placeholder="Batch No">
            </div>
        </div>
        <div class="form-group col-md-6">
            <div class="form-group">
                <strong>Invois:</strong>
                <input type="text" name="invoice" class="form-control" placeholder="Invois">
            </div>
        </div>
        <div class="form-group col-md-6">
            <div class="form-group">
                <strong>Tarikh:</strong>
                <input type="text" name="tarikh" class="form-control" placeholder="Tarikh">
            </div>
        </div>
        <div class="form-group col-md-6">
            <div class="form-group">
                <strong>MAL No:</strong>
                <input type="text" name="mal_no" class="form-control" placeholder="MAL NO">
            </div>
        </div>
        <div class="form-group col-md-6">
            <div class="form-group">
                <strong>Tarikh Luput:</strong>
                <input type="text" name="expiry_date" class="form-control" placeholder="Tarikh Luput">
            </div>
        </div>
    

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Hantar</button>
        </div>
    </div>

</form>
@endsection