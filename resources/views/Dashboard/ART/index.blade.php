@extends('Dashboard.Layout.Master')
@section('title', 'Home')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                                <thead>
                                <tr>
                                    <th>IDBDT</th>
                                    <th>IDARTBDT</th>
                                    <th>Nama</th>
                                    <th>Status Miskin</th>
                                    <th>BPJS</th>
                                    <th>NIK</th>
                                    <th>KK</th>
                                    <th>ALAMAT</th>
                                    <th>Kecamatan</th>
                                    <th>Kelurahan</th>
                                    <th>SLS</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($art as $key => $value)
                                    <tr>
                                        <td>{{$value->idbdt}}</td>
                                        <td>{{$value->idartbdt}}</td>
                                        <td>{{$value->nama}}</td>
                                        <td>
                                            @if($value->status_miskin)
                                                <button class="btn btn-primary">Miskin</button>
                                            @else
                                                <button class="btn btn-danger">Tidak Miskin</button>
                                            @endif
                                        </td>
                                        <td>
                                            @if($value->bpjs == 1)
                                                <button class="btn btn-primary">Memiliki BPJS</button>
                                            @elseif($value->bpjs == 2)
                                                <button class="btn btn-warning">Tidak Memiliki BPJS</button>
                                            @else
                                                <button class="btn btn-danger">NIK Tidak Valid</button>
                                            @endif
                                        </td>
                                        <td>{{$value->nik}}</td>
                                        <td>{{$value->kk}}</td>
                                        <td>{{$value->alamat}}</td>
                                        <td>{{$value->kecamatan}}</td>
                                        <td>{{$value->kelurahan}}</td>
                                        <td>{{$value->sls}}</td>
                                    </tr>
                                @empty
                                    Data Kosong
                                @endforelse
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
@endsection
