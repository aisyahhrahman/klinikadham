@extends ('admin')
@section ('content')

<div class="row">
    <div class="col-xl-12 col-lg-12 coin-distribution">
        <div class="card h-full">
            <div class="card-body">
                <h4 class="header-title mb-0">Laporan Perubatan</h4>
                <canvas style="margin: 0 auto;" id="myChart" width="400" height="400"></canvas>
            </div>
        </div>
    </div>

    <div class="col-xl-12 col-lg-12">
        <div class="card h-full">
            <div class="card-body">
                <div class="data-tables">
                    <table id="example1" style="width: 100%" class="text-center">
                        <br>
                        <br>
                        <br>
                        <br>
                        <thead style="background-color: #e6d0d4;" class="text-capitalize">
                            <th>No</th>
                            <th>Tahun</th>
                            <th>Bulan</th>
                            <th>Jumlah Pesakit</th>
                        </thead>
                        <tbody>
                            @foreach($data as $key => $value)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $value->TAHUN_PERUBATAN }}</td>
                                <td>{{ $value->BULAN_PERUBATAN }}</td>
                                <td>{{ $value->TOTAL }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot style="background-color: #e6d0d4;">
                            <th colspan="3">Jumlah</th>
                            <th id="TH_JUMLAH"></th>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $("#example1").DataTable({
        "paging": true,
        dom: 'Bfrtip',
        "footerCallback": function(row, data, start, end, display) {
            var api = this.api();
            nb_cols = api.columns().nodes().length;
            var j = 3;
            while (j < nb_cols) {
                var pageTotal = api
                    .column(j, {
                        page: 'current'
                    })
                    .data()
                    .reduce(function(a, b) {
                        return Number(a) + Number(b);
                    }, 0);
                // Update footer
                $(api.column(j).footer()).html(pageTotal);
                j++;
            }
        }
    });

    var year = $('#TH_JUMLAH').text();
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jumlah Pesakit '],
            datasets: [{
                label: 'Jumlah Pesakit',
                data: [year],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Jumlah Pesakit'
            },
            responsive: false
        }
    });
</script>
@endpush