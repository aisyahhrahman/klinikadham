@extends('admin')

@section('content')
   <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {{Form::open(['route'=>'posts.store', 'method'=>'POST'])}}
        @include('posts.index')
      {{form::close()}}
    </div>
  </div> 
@endsection
 <!-- main content area start 
        <div class="main-content">
            <div class="main-content-inner">
                <!-- sales report area start 
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama_pesakit">Nama Pesakit</label>
                            <input type="text" class="form-control" id="nama_pesakit" placeholder="Nama Pesakit">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nombor_id">Nombor ID</label>
                            <input type="number" class="form-control" id="nombor_id" placeholder="Nombor ID">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="kad_pengenalan">Kad Pengenalan</label>
                            <input type="number" class="form-control" id="kad_pengenalan" placeholder="Kad Pengenalan">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="jantina_pesakit">Jantina</label>
                            <select id="jantina_pesakit" class="form-control">
                                <option selected>Pilih...</option>
                                <option>01 (Lelaki)</option>
                                <option>02 (Perempuan)</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="no_fon">Nombor Telefon</label>
                            <input type="number" class="form-control" id="no_fon" placeholder="Nombor Telefon">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Menyemak
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </form>
              
            </div>
        </div>
        <!-- main content area end -->