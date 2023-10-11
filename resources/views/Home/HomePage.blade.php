@extends('Layout.Master')
@section('title', 'Home')
@section('content')
    <div class="content-wrapper">
        <section class="spacer bg-secondary-subtle">
            <div class="">
                <div class="d-flex position-relative align-items-center justify-content-center">
                    <img alt="Hero Image" class="w-100 object-fit-cover" height="300" src="{{asset('assets/images/bg_hero.jpg')}}">
                    <div class="row m-auto w-100 justify-content-md-center position-absolute">
                        <div class="col-md-9 text-center">
                            <h2 class="text-white">
                                Cari Data
                                <span class="fw-bold">Capil & Kelurahan</span>
                                <div class="nav-item d-none d-md-block mt-5">
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
                @if($art)
                    <div class="py-5 justify-content-md-center">
                        <div class="container">
                            <div class="row">
                                <div class="card p-0 shadow">
                                    <div class="card-header bg-primary">
                                    </div>
                                    <div class="card-body d-flex flex-column gap-3 border-0">
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
                                            <div class="form-group col-6">
                                                <label class="form-label">IDBDT</label>
                                                <input disabled class="form-control" value="{{$art->idbdt}}">
                                            </div>
                                            <div class="form-group col-6">
                                                <label class="form-label">IDARTBDT</label>
                                                <input disabled class="form-control" value="{{$art->idartbdt}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-7">
                                                <label class="form-label">Nama Lengkap</label>
                                                <input disabled class="form-control" value="{{$art->nama}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-5">
                                                <label class="form-label">NIK</label>
                                                <input disabled class="form-control" value="{{$art->nik}}">
                                            </div>
                                            <div class="form-group col-5">
                                                <label class="form-label">No. Kartu Keluarga</label>
                                                <input disabled class="form-control" value="{{$art->kk}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-2">
                                                <label class="form-label">Jumlah Bantuan</label>
                                                <div>
                                                    <button class="btn btn-outline-info border-top-0 border-end-0 border-start-0 border-5">{{$art->count_bantuan()}} Bantuan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="container">
                    <div class="d-flex gap-3 text-center pt-2 p-5">
                        <div class="card w-100 text-center p-5">
                            <span class="text-2xl">Latar belakang</span>
                            <h1 class="d-inline">E-SINTA</h1>
                            <div class="mt-2 d-flex flex-column p-8 gap-2">
                                <p>Kemiskinan adalah masalah serius yang dapat mempengaruhi akses keluarga terhadap layanan kesehatan, pendidikan, dan gizi yang baik. Stunting (keterlambatan pertumbuhan) pada anak-anak terkait erat dengan kondisi gizi yang buruk selama masa pertumbuhan awal. Stunting dapat memiliki dampak jangka panjang pada perkembangan fisik dan kognitif anak, serta produktivitas di masa depan. Selama ini masih belum ada data yang tersaji secara akurat dan tepat sasaran denganbaik, sehingga seringterjadi kendala atau         hambatan dalam keakuratan data terutama keluarga miskin dan stunting. Dalam pelaksanaan masih saja banyak ditemukan ketidaktepatan penerima yang seharusnya menjadi prioritas dan benar-benar membutuhkan kebutuhandasar mereka, terlebihlagi terhadap keluarga inti yang didalamnya terdapat anak stunting. Bercermin dari hal ini maka perlu adanya perubahan sistem pendataan guna menangani keluarga miskin dan stunting.</p>
                                <p>Berkaitan dengan hal ini, maka keakuratan data terhadap warga miskin dan atau memang benar-benar membutuhkan sangat berpengaruh agar tepat sasaran dalam memenuhi kebutuhan dasar  mereka agar bisa terpenuhi gizi dan nutrisibagi keluarga inti mereka sebagaiupaya pencegahan dini stunting.</p>
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
