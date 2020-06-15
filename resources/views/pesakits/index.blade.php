@extends('admin')
@section('content')
<!-- data table start -->
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h2 class="header-title">Senarai Pesakit</h2>
            <div class="data-tables">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <table id="dataTable" style="width: 100%" class="text-center">
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('pesakits.create') }}">Tambah Maklumat Baru</a>
                    </div>
                    <thead class="bg-light text-capitalize">
                        <th>No</th>
                        <th>Nama </th>
                        <th>ID</th>
                        <th>No IC</th>
                        <th>Alamat</th>
                        <th>No Tel</th>
                        <th width="280px">Tindakan</th>
                    </thead>
                    @foreach ($pesakits as $pesakit)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $pesakit->nama_pesakit }}</td>
                        <td>{{ $pesakit->nombor_id }}</td>
                        <td>{{ $pesakit->kad_pengenalan }}</td>
                        <td>{{ $pesakit->alamat }}</td>
                        <td>{{ $pesakit->nombor_fon }}</td>
                        <td>
                            <form action="{{ route('pesakits.destroy',$pesakit->table_id) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('pesakits.show',$pesakit->table_id) }}">Papar</a>
                                <a class="btn btn-primary" href="{{ route('pesakits.edit',$pesakit->table_id) }}">Sunting</a>
                                @if ( Auth::user()->role == 3 )
                                <a class="btn btn-primary" href="{{ url('status', $pesakit->table_id) }}">Pesakit Seterusnya</a>
                                @endif
                                @csrf
                                @method('DELETE')

                                @if (Auth::user()->role == 1 or Auth::user()->role == 2 )
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Padam</button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Makluman !</h5>
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
                                @endif
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
</div>

{!! $pesakits->links() !!}

@endsection

<!-- others plugins -->
<script src="assets/js/plugins.js"></script>
<script src="assets/js/scripts.js"></script>