@extends('Layout.Master')
@section('title', 'Home')
@section('content')
    <div class="content-wrapper">
        <section class="spacer bg-light">
            <div class="">
                <div class="d-flex position-relative align-items-center justify-content-center">
                    <img alt="Hero Image" class="w-100 object-fit-cover" height="300" src="{{asset('assets/images/background/user-info.jpg')}}">
                    <div class="row m-auto w-100 justify-content-md-center position-absolute">
                        <div class="col-md-9 text-center">
                            <h2 class="text-white">
                                Cari Data
                                <span class="fw-bold">Capil & Kelurahan</span>
                                <div class="nav-item d-none d-md-block mt-5">
                                    <a class="nav-link w-50 m-auto" href="javascript:void(0)">
                                        <form>
                                            <div class="customize-input">
                                                <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                                       type="search" placeholder="Search" aria-label="Search">
                                            </div>
                                        </form>
                                    </a>
                                </div>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="py-5 justify-content-md-center">
                    <div class="container">
                        <div class="row">
                            <div class="card p-0">
                                <div class="card-header bg-primary">
                                </div>
                                <div class="card-body d-flex flex-column gap-3 border-0">
                                    <div class="row">
                                        <div class="form-group col-3">
                                            <label class="form-label">Status Tidak Mampu</label>
                                            <div>
                                                <button class="btn btn-success rounded-3">Valid</button>
                                            </div>
                                        </div>
                                        <div class="form-group col-3">
                                            <label class="form-label">Status BPJS</label>
                                            <div>
                                                <button class="btn btn-danger rounded-3">Tidak Memiliki BPJS</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label class="form-label">IDBDT</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group col-6">
                                            <label class="form-label">IDARTBDT</label>
                                            <input class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-7">
                                            <label class="form-label">Nama Lengkap</label>
                                            <input class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-5">
                                            <label class="form-label">NIK</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group col-5">
                                            <label class="form-label">No. Kartu Keluarga</label>
                                            <input class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-2">
                                            <label class="form-label">Jumlah Bantuan</label>
                                            <div>
                                                <button class="btn btn-outline-info border-top-0 border-end-0 border-start-0 border-5">5 Bantuan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
