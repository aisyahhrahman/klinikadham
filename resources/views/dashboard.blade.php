@extends('admin')
@section('content')

<div class="main-content-inner">
    <div class="container">
        <div class="row">
            <!-- seo fact area start -->
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6 mt-5 mb-3">
                        <div class="card">
                            <div class="seo-fact sbg1">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <div class="seofct-icon"><i class="fa fa-user"></i> Jumlah Pesakit </div>
                                    <h2>{{$pesakits->count()}}</h2>
                                </div>
                                <canvas id="seolinechart1" height="80"></canvas>
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
                                <canvas id="seolinechart2" height="80"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3 mb-lg-0">
                        <div class="card">
                            <div class="seo-fact sbg3">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <div class="seofct-icon">Impressions</div>
                                    <canvas id="seolinechart3" height="60"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="seo-fact sbg4">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <div class="seofct-icon">New Users</div>
                                    <canvas id="seolinechart4" height="60"></canvas>
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