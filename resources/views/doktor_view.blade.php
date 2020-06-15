@extends ('admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                <div class="col-md-6 mt-5 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg1">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="fa fa-user"></i> Jumlah Pesakit </div>
                                <h2>{{$pesakits->count()}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-md-5 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg2">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="fa fa-user"></i> Jumlah Pekerja</div>
                                <h2>{{$pekerjas->count()}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection