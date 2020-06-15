@extends('admin')

@section('content')
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Details Pesakit Servis</h4>
            <div class="data-tables">
                <table id="dataTable" style="width: 100%" class="text-center">

                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif

                    <thead class="bg-light text-capitalize">
                        <th></th>
                        <th>Pesakit</th>
                        <th>Jenis Penyakit</th>
                        <th>Catatan</th>
                        <th>Makmal</th>
                        <th>Jumlah Cuti</th>
                        <th>Daripada</th>
                        <th>Hingga</th>
                        <th width="280px">Action</th>
                    </thead>
                    <tbody>
                        @foreach($data as $key => $list)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $list['pesakit'][0]['nama_pesakit'] ?? '-' }}</td>
                            <td>{{ $list['jenis_penyakit'][0]['jenis_penyakit'] ?? '-' }}</td>
                            <td>{{ $list['jenis_penyakit'][0]['catatan'] ?? '-' }}</td>
                            <td>{{ $list['makmal'][0]['makmal_name'] ?? '-' }}</td>
                            <td>{{ $list['cuti_sakit'][0]['total_cuti'] ?? '-' }}</td>
                            <td>{{ $list['cuti_sakit'][0]['date_from'] ?? '-' }}</td>
                            <td>{{ $list['cuti_sakit'][0]['date_until'] ?? '-' }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- others plugins -->
<script src="assets/js/plugins.js"></script>
<script src="assets/js/scripts.js"></script>