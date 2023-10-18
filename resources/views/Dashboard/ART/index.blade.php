@extends('Dashboard.Layout.Master')
@section('title', 'ART')
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
                                    <th>IDBDT</th>
                                    <th>IDARTBDT</th>
                                    <th>Nama</th>
                                    <th>Status Miskin</th>
                                    <th>BPJS</th>
                                    <th>Bantuan</th>
                                    <th>Jenis Bantuan</th>
                                    <th>NIK</th>
                                    <th>KK</th>
                                    <th>ALAMAT</th>
                                    <th>Kecamatan</th>
                                    <th>Kelurahan</th>
                                    <th>SLS</th>
                                    <th>Ajuan</th>
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
                                        <td>{{$value->bantuan}}</td>
                                        <td>{{$value->jenis_bantuan}}</td>
                                        <td>{{$value->nik}}</td>
                                        <td>{{$value->kk}}</td>
                                        <td>{{$value->alamat}}</td>
                                        <td>{{$value->kecamatan}}</td>
                                        <td>{{$value->kelurahan}}</td>
                                        <td>{{$value->sls}}</td>
                                        <td>
                                            @if($value->ajuan()->count())
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#ajuan{{$value->id}}"><i class="fas fa-comment me-1"></i><span class="bg-danger px-1 rounded-5">{{$value->ajuan()->count()}}</span></button>
                                                <div id="ajuan{{$value->id}}" class="modal fade" tabindex="-1" role="dialog"
                                                     aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myModalLabel">Ajuan</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                        aria-hidden="true"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form id="art_import" name="art_import" action="{{route('dashboard.art_import')}}" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('POST')
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <label class="form-label">KK</label>
                                                                            <img class="form-control w-75" src="{{asset('Upload/berkas_ajuan/'.$value->ajuan()->first()->kk)}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <label class="form-label">KTP</label>
                                                                            <img class="form-control w-75" src="{{asset('Upload/berkas_ajuan/'.$value->ajuan()->first()->ktp)}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Isi</label>
                                                                            <textarea class="form-control" disabled>{!! $value->ajuan()->first()->isi !!}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" form="art_import" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#formajuan{{$value->id}}"><i class="fas fa-clipboard me-1"></i></button>
                                                <div id="formajuan{{$value->id}}" class="modal fade" tabindex="-1" role="dialog"
                                                     aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myModalLabel">Form Ajuan</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                        aria-hidden="true"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form id="art_import" name="art_import" action="{{route('dashboard.art_import')}}" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('POST')
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <label class="form-label">NIK</label>
                                                                            <input class="form-control" disabled value="{{$value->nik}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <label class="form-label">nama</label>
                                                                            <input class="form-control" disabled value="{{$value->nama}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Status Miskin</label>
                                                                            <select class="form-control" name="status_miskin">
                                                                                <option value="1">Valid</option>
                                                                                <option value="0">Tidak Valid</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" form="art_import" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            @endif
                                        </td>
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
                    <h4 class="modal-title" id="myModalLabel">ART</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <form id="art_import" name="art_import" action="{{route('dashboard.art_import')}}" method="POST" enctype="multipart/form-data">
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
                    <button type="submit" form="art_import" class="btn btn-primary">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
@endsection
