@extends('Dashboard.Layout.Master')
@section('title', 'Stunting')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-3">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#myModal">Import Excel</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                                <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>JK</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Nama Orang Tua</th>
                                    <th>Posyandu</th>
                                    <th>Alamat</th>
                                    <th>Usia Saat Ukur</th>
                                    <th>Tanggal Ukur</th>
                                    <th>Berat</th>
                                    <th>Tinggi</th>
                                    <th>LiLA</th>
                                    <th>BB/U</th>
                                    <th>ZS BB/U</th>
                                    <th>TB/U</th>
                                    <th>ZS TB/U</th>
                                    <th>ZS BB/TB</th>
                                    <th>Naik Berat Badan</th>
                                    <th>PMT Diterima</th>
                                    <th>Jml Vit A</th>
                                    <th>KPSP</th>
                                    <th>KIA</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($stunting as $key => $value)
                                    <tr>
                                        <td>{{$value->nik}}</td>
                                        <td>{{$value->nama}}</td>
                                        <td>{{$value->ttl}}</td>
                                        <td>{{$value->nama_orang_tua}}</td>
                                        <td>{{$value->posyandu}}</td>
                                        <td>{{$value->alamat}}</td>
                                        <td>{{$value->usia_saat_ukur}}</td>
                                        <td>{{$value->tanggal_ukur}}</td>
                                        <td>{{$value->berat}}</td>
                                        <td>{{$value->tinggi}}</td>
                                        <td>{{$value->lila}}</td>
                                        <td>{{$value->bb_u}}</td>
                                        <td>{{$value->zs_bb_u}}</td>
                                        <td>{{$value->tb_u}}</td>
                                        <td>{{$value->zs_tb_u}}</td>
                                        <td>{{$value->bb_tb}}</td>
                                        <td>{{$value->zs_bb_tb}}</td>
                                        <td>{{$value->naik_berat_badan}}</td>
                                        <td>{{$value->pmt_diterima}}</td>
                                        <td>{{$value->jml_vit_a}}</td>
                                        <td>{{$value->kpsp}}</td>
                                        <td>{{$value->kia}}</td>
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
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Stunting</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <form id="stunting_import" name="stunting_import" action="{{route('dashboard.stunting_import')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label class="form-label"></label>
                            <input type="file" class="form-control" name="file">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light"
                            data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="stunting_import" class="btn btn-primary">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
@endsection
