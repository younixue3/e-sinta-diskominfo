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
                            <div class="card">
                                asda
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
