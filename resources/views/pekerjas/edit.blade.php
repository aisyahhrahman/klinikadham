@extends('admin')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Sunting Maklumat Pekerja</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pekerjas.index') }}"> Back</a>
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
  
    <form action="{{ route('pekerjas.update',$pekerja->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <strong>Nama Pekerja:</strong>
                    <input type="text" name="nama_pekerja" value="{{ $pekerja->nama_pekerja }}" class="form-control" 
                    placeholder="Nama Pekerja">
                </div>
            </div>
             
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Kad Pengenalan:</strong>
                    <input type="text" name="kad_pengenalan" value="{{ $pekerja->kad_pengenalan }}" class="form-control" 
                    placeholder="Kad Pengenalan">
                </div>
            </div>
             
            <div class="form-group col-md-6">
                <div class="form-group">
                    <strong>Jantina:</strong>
                    <input type="text" name="jantina" value="{{ $pekerja->jantina }}" class="form-control" placeholder="Jantina">
                </div>
            </div>
             
            <div class="form-group col-md-6">
                <div class="form-group">
                    <strong>Alamat Pekerja:</strong>
                    <input type="text" name="alamat_pekerja" value="{{ $pekerja->alamat_pekerja }}" class="form-control" placeholder="Alamat Pekerja">
                </div>
            </div>
             
            <div class="form-group col-md-6">
                <div class="form-group">
                    <strong>Nombor Telefon:</strong>
                    <input type="text" name="nombor_fon_pekerja" value="{{ $pekerja->nombor_fon_pekerja }}" class="form-control" placeholder="Nombor Telefon">
                </div>
            </div>
             
            <div class="form-group col-md-6">
                <div class="form-group">
                    <strong>Status Perkahwinan:</strong>
                    <input type="text" name="status" value="{{ $pekerja->status }}" class="form-control" placeholder="Status Perkahwinan">
                </div>
            </div>
             
            <div class="form-group col-md-6">
                <div class="form-group">
                    <strong>Nama Pewaris:</strong>
                    <input type="text" name="nama_pewaris" value="{{ $pekerja->nama_pewaris }}" class="form-control" placeholder="Nama Pewaris">
                </div>
            </div>
             
            <div class="form-group col-md-6">
                <div class="form-group">
                    <strong>Hubungan Pewaris:</strong>
                    <input type="text" name="hubungan_pewaris" value="{{ $pekerja->hubungan_pewaris }}" class="form-control" placeholder="Hubungan Pewaris">
                </div>
            </div>
             
            <div class="form-group col-md-6">
                <div class="form-group">
                    <strong>Alamat Pewaris:</strong>
                    <input type="text" name="alamat_pewaris" value="{{ $pekerja->alamat_pewaris }}" class="form-control" placeholder="Alamat Pewaris">
                </div>
            </div>
             
            <div class="form-group col-md-6">
                <div class="form-group">
                    <strong>Nombor Telefon Pewaris:</strong>
                    <input type="text" name="nombor_fon_pewaris" value="{{ $pekerja->nombor_fon_pewaris }}" class="form-control" placeholder="Nombor Telefon Pewaris">
                </div>
            </div>
             
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection