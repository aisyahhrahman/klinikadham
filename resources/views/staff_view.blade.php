@extends('admin')
@section('content')
<!-- data table start -->
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Pesakit Seterusnya</h4>
            <div class="data-tables">
                <table id="dataTable" style="width: 100%" class="text-center">
                    <thead class="bg-light text-capitalize">
                        <th>No</th>
                        <th>Nama </th>
                        <th>ID</th>
                        <th>No IC</th>
                        <th>Tindakan</th>
                    </thead>
                    @foreach($data as $key => $list)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $list->nama_pesakit }}</td>
                            <td>{{ $list->nombor_id }}</td>
                            <td>{{ $list->kad_pengenalan }}</td>
                            <td style="width:5px;">
                                <form method="post" action="{{ route('resit.update', $list->table_id) }}">
                                    @csrf
                                    @method('put')
                                    <button type="submit" class="btn btn-primary btn-xs">Pilih</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Pesakit Selesai</h4>
                <div class="data-tables">
                    <table id="dataTable" style="width: 100%" class="text-center">
                        <thead class="bg-light text-capitalize">
                            <th>No</th>
                            <th>Nama </th>
                            <th>ID</th>
                            <th>No IC</th>
                            <th>Tindakan</th>
                        </thead>
                        @foreach($dataSuccess as $key => $list)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $list->nama_pesakit }}</td>
                            <td>{{ $list->nombor_id }}</td>
                            <td>{{ $list->kad_pengenalan }}</td>
                            <td style="width:5px;">
                                <a href="{{ route('resit.edit', $list->table_id) }}" class="btn btn-success btn-xs" href="">Resit</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- others plugins -->
<script src="assets/js/plugins.js"></script>
<script src="assets/js/scripts.js"></script>