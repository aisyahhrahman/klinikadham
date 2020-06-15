@extends('admin')

@section('content')

<!-- main content area start -->
<div class="main-content">
    <div class="main-content-inner">
         <h2>Tambah Maklumat Makmal Pesakit</h2>
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <br>
                    <label for="nama_pesakit">Nama Pesakit</label>
                    <input type="text" class="form-control" id="nama_pesakit" placeholder="Nama Pesakit">
                </div>
                <div class="form-group col-md-6">
                    <br>
                    <label for="nombor_id">Nombor ID</label>
                    <input type="number" class="form-control" id="nombor_id" placeholder="Nombor ID">
                </div>
                <div class="form-group col-md-6">
                    <label for="kad_pengenalan">Kad Pengenalan</label>
                    <input type="number" class="form-control" id="kad_pengenalan" placeholder="Kad Pengenalan">
                </div>
                <div class="form-group col-md-6">
                    <label for="jantina_pesakit">Jantina</label>
                    <select id="jantina_pesakit" class="form-control">
                        <option selected>Pilih...</option>
                        <option>01 (Lelaki)</option>
                        <option>02 (Perempuan)</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="no_fon">Nombor Telefon</label>
                    <input type="number" class="form-control" id="no_fon" placeholder="Nombor Telefon">
                </div>
                <div class="form-group col-md-6">
                    <label for="keputusan">Keputusan Darah</label>
                    <input type="text" class="form-control" id="keputusan" placeholder="Keputusan Darah">
                </div>
                <div class="form-group col-md-6">
                    <label for="tarikh">Tarikh Keluar</label>
                    <input type="date" class="form-control" id="tarikh">
                </div>
                <div class="form-group col-md-6">
                    <label for="tarikh">Tarikh Masuk</label>
                    <input type="date" class="form-control" id="tarikh2">
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
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

    </div>
</div>
<!-- main content area end -->

@endsection
