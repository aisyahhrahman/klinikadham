@extends('admin')
@section('content')
<!-- data table start -->
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Senarai Pengguna</h4>
            <div class="data-tables">
                <table id="dataTable" style="width: 100%" class="text-center">

                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif

                    <thead class="bg-light text-capitalize">
                        <th>No</th>
                        <th>Nama </th>
                        <th>Email</th>
                        <th>Peranan</th>
                        <th width="280px">Tindakan</th>
                    </thead>
                    @foreach ($data as $pengguna)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $pengguna->name }}</td>
                        <td>{{ $pengguna->email }}</td>
                        <td>{{ $pengguna->role }}</td>

                        <td>
                            <form action="{{ route('pengguna.destroy',$pengguna->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Padam</button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Amaran !</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Adakah anda pasti ingin menghapus maklumat ini?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                                <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Ya</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>


@endsection

<!-- others plugins -->
<script src="assets/js/plugins.js"></script>
<script src="assets/js/scripts.js"></script>