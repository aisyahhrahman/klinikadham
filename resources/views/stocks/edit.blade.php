@extends('admin')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Stok</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('stocks.index') }}"> Back</a>
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

<form action="{{ route('stocks.update',$stocks->stock_id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="form-group col-md-6">
            <div class="form-group">
                <strong>Stok id:</strong>

                <input type="number" name="stock_id" value="{{ $stocks->stock_id }}" class="form-control" placeholder="Stock id">
            </div>
        </div>

        <div class="form-group col-md-6">
            <div class="form-group">
                <strong>Kuantiti:</strong>
      
                <input type="text" name="kuantiti" value="{{ $stocks->kuantiti }}" class="form-control" placeholder="Kuantiti">
         
            </div>
        </div>
        <div class="form-group col-md-6">
            <div class="form-group">
                <strong>Harga:</strong>
              
                <input type="text" name="price" value="{{ $stocks->price }}" class="form-control" placeholder="Harga">
            
            </div>
        </div>
        <div class="form-group col-md-6">
            <div class="form-group">
                <strong>Batch NO:</strong>
           
                <input type="text" name="batch_no" value="{{ $stocks->batch_no }}" class="form-control" placeholder="Batch No">
            
            </div>
        </div>
        <div class="form-group col-md-6">
            <div class="form-group">
                <strong>Invois:</strong>
             
                <input type="text" name="invoice" value="{{ $stocks->invoice }}" class="form-control" placeholder="Invois">
            
            </div>
        </div>
        <div class="form-group col-md-6">
            <div class="form-group">
                <strong>Tarikh:</strong>
             
                <input type="text" name="tarikh" value="{{ $stocks->tarikh }}" class="form-control" placeholder="Tarikh">
            
            </div>
        </div>
        <div class="form-group col-md-6">
            <div class="form-group">
                <strong>MAL NO:</strong>
              
                <input type="text" name="mal_no" value="{{ $stocks->mal_no }}" class="form-control" placeholder="MAL No">
               
            </div>
        </div>
        <div class="form-group col-md-6">
            <div class="form-group">
                <strong>Tarikh Luput:</strong>
               
                <input type="text" name="expiry_date" value="{{ $stocks->expiry_date }}" class="form-control" placeholder="Tarikh Luput">
            
            </div>
        </div>
        <div class="form-group col-md-6">
            <div class="form-group">
                <strong>Tarikh Luput:</strong>
             
                <input type="text" name="ubat_id" value="{{ $stocks->ubat_id }}" class="form-control" placeholder="Ubat id">
           
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection