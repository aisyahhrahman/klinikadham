@extends('admin')
@section('content')
<!-- data table start -->
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h2 class="header-title">Senarai Stok</h2>
            <div class="data-tables">
            @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                <table id="dataTable" style="width: 100%" class="text-center">
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('stocks.create') }}">Tambah Maklumat Baru</a>
                    </div>
                    <br>

                   

                    <thead class="bg-light text-capitalize">
                        <tr>
                            <th>Stok id</th>
                            <th>Kuantiti</th>
                            <th>Harga</th>
                            <th>Batch No</th>
                            <th>Invoice</th>
                            <th>Tarikh</th>
                            <th>MAL No</th>
                            <th>Tarikh Luput</th>

                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    @foreach ($stocks as $stock)
                    <tr>
                        <td>{{ $stock->stock_id }}</td>
                        <td>{{ $stock->kuantiti }}</td>
                        <td>{{ $stock->price }}</td>
                        <td>{{ $stock->batch_no }}</td>
                        <td>{{ $stock->invoice }}</td>
                        <td>{{ $stock->tarikh }}</td>
                        <td>{{ $stock->mal_no }}</td>
                        <td>{{ $stock->expiry_date }}</td>

                        <td>
                            <form action="{{ route('stocks.destroy',$stock->stock_id) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('stocks.show',$stock->stock_id) }}">Papar</a>

                                <a class="btn btn-primary" href="{{ route('stocks.edit',$stock->stock_id) }}">Sunting</a>

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
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div>
            <div>
                {!! $stocks->links() !!}

                @endsection

                <!-- others plugins -->
                <script src="assets/js/plugins.js"></script>
                <script src="assets/js/scripts.js"></script>