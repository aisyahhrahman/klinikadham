@extends('admin')

@section('content')
    <!-- main content area start -->
            <div class="main-content-inner">
              <h2>Tambah Pekerja</h2>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <br>
                            <label for="nama_pekerja">Nama Pekerja</label>
                            <input type="text" class="form-control" id="nama_pekerja" placeholder="Nama Pekerja">
                        </div>
                  
                        <div class="form-group col-md-6">
                            <br>
                            <label for="kad_pengenalan">Kad Pengenalan</label>
                            <input type="number" class="form-control" id="kad_pengenalan" placeholder="Kad Pengenalan">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="jantina_pekerja">Jantina</label>
                            <select id="jantina_pekerja" class="form-control">
                                <option selected>Pilih...</option>
                                <option>Lelaki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_fon">Nombor Telefon</label>
                            <input type="number" class="form-control" id="no_fon" placeholder="Nombor Telefon">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="alamat_pekerja">Alamat</label>
                            <input type="text" class="form-control" id="alamat_pekerja" placeholder="No, Jalan">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="alamat_pekerja2">Alamat 2</label>
                            <input type="text" class="form-control" id="alamat_pekerja2" placeholder="Taman, Poskod, Bandar, Negeri">
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
        
        <!-- main content area end -->


@endsection