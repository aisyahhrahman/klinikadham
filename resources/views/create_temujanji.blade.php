@extends('admin')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h3>Temujanji</h3>
            <br><br>
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

<form action="{{ route('temujanji.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="form-group col-md-6">
            <div class="form-group">
                <strong>Nama Pesakit:</strong>
                <select class="form-control select" style="width:100%;" name="table_id" id="table_id">
                    <option selected disabled>Pilih Pesakit:</option>
                    @foreach($pesakit as $key => $list)
                    <option value="{{ $list->table_id }}">{{ $list->nama_pesakit }} </option>
                    @endforeach
                </select>
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
                <strong>Keterangan:</strong>
                <input type="text" name="keterangan" class="form-control" placeholder="Keterangan">
            </div>
        </div>
        <div class="form-group col-md-6">
            <div class="form-group">
                <strong>Masa</strong>
                <input type="text" name="masa" class="form-control" placeholder="Masa">
            </div>
        </div>
        <div class="input-group date col-md-6" data-provide="datepicker">
            <div class="form-group">
                <strong>Tarikh:</strong>
                <input name="tarikh" type="text" class="form-control" placeholder="Tarikh">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Hantar</button>
        </div>
    </div>
</form>



@endsection