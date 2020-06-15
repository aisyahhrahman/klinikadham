@extends('admin')

@section('content')
<!-- main content area start -->
<div class="main-content-inner">
    <h2>Tambah Pengguna</h2>
    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <br>
                <label for="nama_pengguna">Nama Pengguna</label>
                <input type="text" class="form-control" id="nama_pekerja" placeholder="Nama Pengguna">
            </div>

            <div class="form-group col-md-6">
                <br>
                <label for="kata_laluan">Kata Laluan</label>
                <input type="text" class="form-control" id="kata_laluan" placeholder="Kata Laluan">
            </div>
            <div class="form-group col-md-6">
                <label for="nama_penuh">Nama Penuh</label>
                <input type="text" class="form-control" id="nama_penuh" placeholder="Nama Penuh">
            </div>
            <div class="form-group col-md-6">
                <label for="nombor_id">Nombor ID</label>

                <input type="text" class="form-control" id="nombor_id" placeholder="Nombor ID">
            </div>
            <div class="form-group col-md-6">
                <label for="kad_pengenalan">Kad Pengenalan</label>
                <input type="text" class="form-control" id="kad_pengenalan" placeholder="Kad Pengenalan">
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
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" placeholder="Alamat">
            </div>

            <div class="form-group col-md-6">
                <label for="no_fon">Nombor Telefon</label>
                <input type="number" class="form-control" id="no_fon" placeholder="Nombor Telefon">
            </div>
            <div class="form-group col-md-4">
                <div class="form-check">
                    <label for="peranan">Peranan</label>
                    <div class="form-group col-md-2">
                        <input class="form-check-input" type="radio" name="role" value="doktor" checked>Doktor<br>
                        <input class="form-check-input" type="radio" name="role" value="pekerja" checked>Pekerja<br>
                        <input class="form-check-input" type="radio" name="role" value="pesakit" checked>Pesakit<br>
                    </div>
                </div>
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
