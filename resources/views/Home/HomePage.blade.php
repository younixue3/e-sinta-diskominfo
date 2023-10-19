@extends('Layout.Master')
@section('title', 'Home')
@section('content')
    <div class="content-wrapper">
        <section class="m run buildbg-secondary-subtle">
            <div class="">
                <div class="d-flex position-relative align-items-center justify-content-center">
                    <img alt="Hero Image" class="w-100 object-fit-cover" height="300" src="{{asset('assets/images/bg_hero.jpg')}}">
                    <div class="row m-auto w-100 justify-content-md-center position-absolute">
                        <div class="col-md-9 text-center">
                            <h2 class="text-white">
                                Cari Data
                                <span class="fw-bold">Capil & Kelurahan</span>
                                <div class="nav-item mt-md-5">
                                    <a class="nav-link w-50 m-auto" href="javascript:void(0)">
                                        <form method="post" action="{{route('home.search')}}">
                                            @csrf
                                            @method('post')
                                            <div class="customize-input">
                                                <input name="nik" class="form-control custom-shadow custom-radius border-0 bg-white"
                                                       type="search" placeholder="Search" aria-label="Search">
                                            </div>
                                        </form>
                                    </a>
                                </div>
                            </h2>
                        </div>
                    </div>
                </div>
                @if($art || $stunting)
                    <div class="py-5 justify-content-md-center">
                        <div class="container">
                            <div class="row">
                                <div class="card p-0 shadow">
                                    <div class="card-header bg-primary">
                                    </div>
                                    <div class="card-body d-flex flex-column gap-3 border-0">
                                        <div class="row mb-4">
                                            <div class="col-3">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#myModal">Ajuan</button>
                                            </div>
                                            <div id="myModal" class="modal fade" tabindex="-1" role="dialog"
                                                 aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Ajuan</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                    aria-hidden="true"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form id="ajuan" name="ajuan" action="{{route('ajuan')}}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('POST')
                                                                <div class="form-group">
                                                                    <label class="form-label">KK</label>
                                                                    <input type="file" class="form-control" name="kk">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="form-label">KTP</label>
                                                                    <input type="file" class="form-control" name="ktp">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="form-label">Perihal Ajuan</label>
                                                                    <textarea class="form-control" name="isi"></textarea>
                                                                </div>
                                                                @if($art)
                                                                    <input type="hidden" name="art" value="{{$art->id}}">
                                                                @endif
                                                                @if($stunting)
                                                                    <input type="hidden" name="stunting" value="{{$stunting->id}}">
                                                                @endif
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                    data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" form="ajuan" class="btn btn-primary">Kirim</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                        </div>
                                        @if($art)
                                            <div class="row">
                                                <div class="form-group col-3">
                                                    <label class="form-label">Status Tidak Mampu</label>
                                                    <div>
                                                        @if($art->status_miskin)
                                                            <button class="btn btn-success rounded-3">Miskin</button>
                                                        @else
                                                            <button class="btn btn-success rounded-3">Tidak Miskin</button>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group col-3">
                                                    <label class="form-label">Status BPJS</label>
                                                    <div>
                                                        @if($art->bpjs == 1)
                                                            <button class="btn btn-primary">Memiliki BPJS</button>
                                                        @elseif($art->bpjs == 2)
                                                            <button class="btn btn-warning">Tidak Memiliki BPJS</button>
                                                        @else
                                                            <button class="btn btn-danger">NIK Tidak Valid</button>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-2">
                                                    <label class="form-label">Jumlah Bantuan</label>
                                                    <div>
                                                        <button class="btn btn-outline-info border-top-0 border-end-0 border-start-0 border-5">{{$art->bantuan}} Bantuan</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-7">
                                                    <label class="form-label">Nama Lengkap</label>
                                                    <input disabled class="form-control" value="{{$nama}}">
                                                </div>
                                            </div>
                                        @endif
                                        @if($stunting)
                                            <div class="row">
                                                <div class="form-group col-2">
                                                    <label class="form-label">Berat Badan</label>
                                                    <div>
                                                        <button class="btn btn-outline-info border-top-0 border-end-0 border-start-0 border-5">{{$stunting->bb_u}}</button>
                                                    </div>
                                                </div>
                                                <div class="form-group col-2">
                                                    <label class="form-label">Tinggi Badan</label>
                                                    <div>
                                                        <button class="btn btn-outline-info border-top-0 border-end-0 border-start-0 border-5">{{$stunting->tb_u}}</button>
                                                    </div>
                                                </div>
                                                <div class="form-group col-2">
                                                    <label class="form-label">Berat Badan dan Tinggi Badan</label>
                                                    <div>
                                                        <button class="btn btn-outline-info border-top-0 border-end-0 border-start-0 border-5">{{$stunting->bb_tb}}</button>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="row">
                                                    <div class="form-group col-7">
                                                        <label class="form-label">Nama Lengkap</label>
                                                        <input disabled class="form-control" value="{{$nama}}">
                                                    </div>
                                                </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="container">
                    <div class="d-flex gap-3 text-center p-5">
                        <div class="card w-100 text-center p-4">
                            <div class="card-body">
                                <div class="justify-content-center mb-4">
                                    <img style="height: 80px;" src="{{asset('img/Picture1.png')}}">
                                </div>
                                <div class="row">
                                    <h1 class="text-primary fw-bold">
                                        E-SINTA
                                    </h1>
                                    <h3>
                                        STUNTING DAN KEMISKINAN DALAM DATA
                                    </h3>
                                    <div>
                                        Disusun Oleh:
                                        <div class="fw-bold mt-2 text-primary">
                                            Shinta Rizki Delvinda, S.Sos., M.Si
                                        </div>
                                        <div class="text-xs">
                                            Kasi Kesra dan Pemberdayaan Masyarakat
                                            Kelurahan Dadi Mulya
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="d-flex gap-3 text-center pt-2 p-5">
                        <div class="card w-100 text-center p-5">
                            <div class="row">
                                <h2 class="text-2xl">Latar belakang</h2>
                                <div class="mt-2 d-flex flex-column p-8 gap-2">
                                    <p>Kemiskinan adalah masalah serius yang dapat mempengaruhi akses keluarga terhadap layanan kesehatan, pendidikan, dan gizi yang baik. Stunting (keterlambatan pertumbuhan) pada anak-anak terkait erat dengan kondisi gizi yang buruk selama masa pertumbuhan awal. Stunting dapat memiliki dampak jangka panjang pada perkembangan fisik dan kognitif anak, serta produktivitas di masa depan. Selama ini masih belum ada data yang tersaji secara akurat dan tepat sasaran denganbaik, sehingga seringterjadi kendala atau         hambatan dalam keakuratan data terutama keluarga miskin dan stunting. Dalam pelaksanaan masih saja banyak ditemukan ketidaktepatan penerima yang seharusnya menjadi prioritas dan benar-benar membutuhkan kebutuhandasar mereka, terlebihlagi terhadap keluarga inti yang didalamnya terdapat anak stunting. Bercermin dari hal ini maka perlu adanya perubahan sistem pendataan guna menangani keluarga miskin dan stunting.</p>
                                    <p>Berkaitan dengan hal ini, maka keakuratan data terhadap warga miskin dan atau memang benar-benar membutuhkan sangat berpengaruh agar tepat sasaran dalam memenuhi kebutuhan dasar  mereka agar bisa terpenuhi gizi dan nutrisibagi keluarga inti mereka sebagaiupaya pencegahan dini stunting.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container text-center">
                    <h2 class="mb-5">Tujuan & Manfaat</h2>
                    <div class="d-flex gap-3 text-center">
                        <div class="col-4 card border border-4 border-end-0 border-start-0 border-top-0 border-primary p-3">
                            <h2>Jangka Pendek</h2>
                            <ul>
                                <li>Menyajikan database lokal data keluarga miskin dan stunting yang akurat</li>
                                <li>Menyajikan database lokal data keluarga miskin dan stunting yang akurat</li>
                                <li>Menyajikan database lokal data keluarga miskin dan stunting yang akurat</li>
                            </ul>
                        </div>
                        <div class="col-4 card border border-4 border-end-0 border-start-0 border-top-0 border-primary p-3">
                            <h2>Jangka Panjang</h2>
                            <ul>
                                <li>Terwujudnya data yang akurat dalam upaya penanggulangan keluarga miskin dan stunting di Kelurahan Dadi Mulya Kecamatan Samarinda Ulu Kota Samarinda</li>
                            </ul>
                        </div>
                        <div class="col-4 card border border-5 border-end-0 border-start-0 border-top-0 border-primary p-3">
                            <h2 class="">Manfaat</h2>
                            <ul>
                                <li>Mampu memberikan informasi terhadap data stunting dan kemiskinan melalui lintas stakeholder dalam upaya penanggulangan kemiskinan dan stunting, sehingga penurunan angka stunting dan kemiskinan dapat dikendalikan secara berkelanjutan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
