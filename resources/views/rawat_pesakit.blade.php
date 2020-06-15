@extends ('admin')

@section('content')
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Pesakit Dirawat</h4>
            <div class="data-tables">
                <table id="dataTable" style="width: 100% " class="text-center">
                    <thead class="bg-light text-capitalize">
                        <th>No</th>
                        <th>Nama</th>
                        <th>No ID</th>
                        <th>Kad Pengenalan</th>
                        <th>Tindakan</th>
                    </thead>

                    @foreach($data as $key => $pesakit)
                    <tbody>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $pesakit->nama_pesakit }}</td>
                        <td>{{ $pesakit->nombor_id }}</td>
                        <td>{{ $pesakit->kad_pengenalan }}</td>
                        <td>
                            <form action="{{ route('rawat.destroy',$pesakit->table_id) }}" method="POST">
                                <a href="{{ route('rawat.show', $pesakit->table_id) }}" class="btn btn-info">Details<span class="fas fa-user-edit"></span></a>
                                @csrf
                                @method('DELETE')

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
                            </form>
                        </td>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection