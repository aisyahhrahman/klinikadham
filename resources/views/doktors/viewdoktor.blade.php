@extends ('admin')

@section ('content')

<div class="main-content-inner">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Maklumat Pesakit</h4>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <div class="form-group">
                                <strong>Nama Pesakit:</strong>
                                <input type="text" name="nama_pesakit" value="{{ $data['pesakit'][0]['nama_pesakit'] }}" class="form-control-plaintext" placeholder="Nama Pesakit" readonly>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <div class="form-group">
                                <strong>Nombor ID:</strong>
                                <input type="text" name="nombor_id" value="{{ $data['pesakit'][0]['nombor_id'] }}" class="form-control-plaintext" placeholder="Nombor ID" readonly>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <div class="form-group">
                                <strong>Kad Pengenalan:</strong>
                                <input type="text" name="kad_pengenalan" value="{{ $data['pesakit'][0]['kad_pengenalan'] }}" class="form-control-plaintext" placeholder="Kad Pengenalan" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <form action="{{ route('doktors.store') }}" method="POST">
        @csrf
        <div class="row mt-5">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Bentuk Perubatan</h4>
                        <br><br>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <div class="form-group">
                                                <strong>Jenis Penyakit:</strong>
                                                <input type="text" name="jenis_penyakit" class="form-control" placeholder="Jenis Penyakit">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <div class="form-group">
                                                <strong>Catatan doktor:</strong>
                                                <textarea class="form-control" style="height:150px" name="catatan" placeholder="Catatan untuk doktor"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-9 col-xs-12">
                                            <div class="form-group">
                                                <strong>Ujian Makmal:</strong>
                                                <select name="makmal_name" id="makmal_name" class="form-control">
                                                    <option value="" selected>-- Sila Pilih --</option>
                                                    <option value="Darah & Urine">Darah & Urine</option>
                                                    <option value="Urine">Urine</option>
                                                    <option value="General screening">General screening</option>
                                                    <option value="Screening sakit khas">Screening sakit khas</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <strong>Harga :</strong>
                                                <input type="text" name="harga_makmal" class="form-control" placeholder="Harga">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="form-group">
                                                <strong>Cuti sakit:</strong>
                                                <input type="text" name="total_cuti" id="total_cuti" class="form-control" placeholder="Jumlah cuti sakit">
                                            </div>
                                        </div>
                                        <div class="input-group date col-md-3" data-provide="datepicker">
                                            <div class="form-group">
                                                <strong>Daripada tarikh:</strong>
                                                <input name="date_from" type="text" class="form-control">
                                                <div class="input-group-addon">
                                                    <span class="glyphicon glyphicon-th"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <input type="hidden" name="pesakit_id" value="{{ $data['pesakit'][0]['table_id'] }}" class="form-control" placeholder="Nama Pesakit" readonly>

                                        <div class="input-group date col-md-3" data-provide="datepicker">
                                            <div class="form-group">
                                                <strong>Sehingga tarikh:</strong>
                                                <input type="text" name="date_until" class="form-control">
                                                <div class="input-group-addon">
                                                    <span class="glyphicon glyphicon-th"></span>
                                                </div>
                                            </div>
                                        </div>

                                        @section ('scripts')
                                        <script type="text/javascript">
                                            $(function() {
                                                $(".date_from").datepicker();
                                                format: 'YYY-MM-DD'
                                                useCurrent: false
                                            });
                                        </script>
                                        @endsection


                                        @section ('scripts')
                                        <script type="text/javascript">
                                            $(function() {
                                                $(".date_until").datepicker();
                                                format: 'YYY-MM-DD'
                                                useCurrent: false
                                            });
                                        </script>
                                        @endsection
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 mt-md-30 mt-xs-30 mt-sm-30">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Ubat diperlukan</h4>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <strong>Nama Ubat :</strong>
                                <select class="form-control select" style="width: 100%;" name="ubat_id" id="ubat_id">
                                    <option selected disabled>Pilih Ubat:</option>
                                    @foreach($ubat as $key => $list)
                                    <option value="{{ $list->stock_id }}">{{ $list->description }} </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <strong>Kuantiti:</strong>
                                    <input class="form-control" id="kuantiti_pembelian" name="kuantiti_pembelian" placeholder="kuantiti ubat"></textarea>
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="form-group">
                                    <strong>Keterangan:</strong>
                                    <textarea class="form-control" id="keterangan" style="height:150px" name="keterangan" placeholder="Keterangan kepada pesakit"></textarea>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <button type="button" class="btn btn-success" onclick="showChecklist('Checklist')" id="add">+ Tambah</button>
                            </div>
                            <br>
                            <br>
                            <br>

                            <div class="col-md-12">
                                <table id="dataTable" style="width: 100%" class="text-center">
                                    <thead class="bg-light text-capitalize">
                                        <th>ubat</th>
                                        <th>kuantiti</th>
                                        <th>keterangan</th>
                                        <th>action</th>
                                        <th></th>
                                    </thead>
                                    <tbody id="documentChecklist">
                                        <tr>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Hantar</button>
                        <a href="" class="btn btn-warning">Clear</a>
                    </div><br>
                </div>

            </div>
        </div>
    </form>
</div>
</div>
<script>
    function showChecklist() {
        var ubat_id = $('#ubat_id').find(":selected").val();
        var ubat = $('#ubat_id').find(":selected").text();;
        var kuantiti_pembelian = $("#kuantiti_pembelian").val();
        var keterangan = $("#keterangan").val();

        if (ubat != '' && kuantiti_pembelian != '' && keterangan != '') {
            $('#documentChecklist tr:last').after(`
                <tr>
                    <td><input class="form-control" id="ubat" type="text" value="${ubat}" name="ubat[]" readonly required></td>
                    <td><input class="form-control" id="kuantiti_pembelian" type="text" value="${kuantiti_pembelian}" name="kuantiti_pembelian[]" readonly required></td>
                    <td><input class="form-control" id="keterangan" type="text" value="${keterangan}" name="keterangan[]" readonly required></td>
                    <td><button type="button" class="btn btn-danger btn-sm" onclick='newtest2(this)'><i class="ti-close"></i></button>
                    <input class="form-control" id="harga" name="harga[]" type="hidden" value="${ubat_id}" readonly required>
                </tr>`);
        } else {
            alert('please select ubat')
        }
    }

    function newtest2(evt) {
        $(evt).parent().parent().remove();
    }
</script>
@endsection