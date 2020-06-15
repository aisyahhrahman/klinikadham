@extends('admin')

@section('content')
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Temujanji Pesakit</h4>
            <div class="data-tables">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <table id="dataTable" style="width: 100%" class="text-center">
                    @if (Auth::user()->role == 1 or Auth::user()->role == 2 or Auth::user()->role == 3 )
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('temujanji.create') }}">Tambah Temujanji Baru</a>
                    </div>
                    @endif


                    <thead class="bg-light text-capitalize">
                        <th>No ID</th>
                        <th>Nama Pesakit</th>
                        <th>Kad Pengenalan</th>
                        <th>Keterangan</th>
                        <th>Masa</th>
                        <th>Tarikh</th>
                        @if (Auth::user()->role == 1 or Auth::user()->role == 2 or Auth::user()->role == 3 )
                        <th width="280px">Action</th>
                        @endif
                    </thead>
                    @foreach ($temujanjis as $list)
                    <tbody>
                        <tr>
                            <td>{{ $list->id }}</td>
                            <td>{{ $list->table_id }}</td>
                            <td>{{ $list->kad_pengenalan }}</td>
                            <td>{{ $list->keterangan }}</td>
                            <td>{{ $list->masa }}</td>
                            <td>{{ $list->tarikh }}</td>
                            @if (Auth::user()->role == 1 or Auth::user()->role == 2 or Auth::user()->role == 3 )
                            <td>
                                <a href="{{ URL::to('/delete/' . $list->id)}}" class="btn btn-danger btn-sm" ><span class="fas fa-trash-alt" data-toggle="modal" data-target="#exampleModal">Padam</span></a>
                            
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
                            </td>
                            @endif
                        </tr>
                    </tbody>
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