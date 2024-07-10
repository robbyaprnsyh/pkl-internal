<!doctype html>
<html lang="en" data-bs-theme="semi-dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Point Of Sale</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('backend/assets/images/logo-icon.png') }}" type="image/png">
    <!-- loader-->
    <link href="{{ asset('backend/assets/css/pace.min.css') }}" rel="stylesheet">
    <script src="{{ asset('backend/assets/js/pace.min.js') }}"></script>

    <!--plugins-->
    <link href="{{ asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/plugins/metismenu/metisMenu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/plugins/metismenu/mm-vertical.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/plugins/simplebar/css/simplebar.css') }}">
    <!--bootstrap css-->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <!--main css-->
    <link href="{{ asset('backend/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/sass/main.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/sass/dark-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/sass/blue-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/sass/semi-dark.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/sass/bordered-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/sass/responsive.css') }}" rel="stylesheet">

</head>

<body>

    <!--start header-->
    @include('include.backend.header')
    <!--end top header-->


    <!--start sidebar-->
    @include('include.backend.sidebar')
    <!--end sidebar-->

    <!--start main wrapper-->
    <main class="main-wrapper">
        <div class="main-content">
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Dashboard</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Analysis</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                    <div class="col-xxl-8 d-flex align-items-stretch">
                        <div class="card w-100 overflow-hidden rounded-4">
                            <div class="card-body position-relative p-4">
                                <div class="row">
                                    <div class="col-12 col-sm-7">
                                        <div class="d-flex align-items-center gap-3 mb-5">
                                            <img src="{{ asset('backend/assets/images/profile.png') }}"
                                                class="rounded-circle bg-grd-info p-1" width="60" height="60"
                                                alt="user">
                                            <div class="">
                                                <p class="mb-0 fw-semibold">Welcome back</p>
                                                <h4 class="fw-semibold mb-0 fs-4 mb-0">{{ Auth::user()->name }}!</h4>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-5">
                                            <div class="">
                                                <h4 class="mb-1 fw-semibold d-flex align-content-center">Admin<i
                                                        class="ti ti-arrow-up-right fs-5 lh-base text-success"></i>
                                                </h4>
                                                <p class="mb-3"></p>
                                                <div class="progress mb-0" style="height:5px;">
                                                    <div class="progress-bar bg-grd-success" role="progressbar"
                                                        style="width: 60%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="vr"></div>
                                            <div class="">
                                                <h4 class="mb-1 fw-semibold d-flex align-content-center">Kasir<i
                                                        class="ti ti-arrow-up-right fs-5 lh-base text-success"></i>
                                                </h4>
                                                <p class="mb-3"></p>
                                                <div class="progress mb-0" style="height:5px;">
                                                    <div class="progress-bar bg-grd-danger" role="progressbar"
                                                        style="width: 60%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-5">
                                        <div class="welcome-back-img pt-4">
                                            <img src="{{ asset('backend/assets/images/gallery/welcome-back-3.png') }}"
                                                height="180" alt="">
                                        </div>
                                    </div>
                                </div><!--end row-->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-2 d-flex align-items-stretch">
                        <div class="card w-100 rounded-4">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-1">
                                    <div class="">
                                        <h4 class="mb-0"><b>Table Kasir</b></h4>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mt-3">
                                    <img src="{{ asset('backend/img/kasir.jpg') }}" alt="Deskripsi gambar"
                                        class="img-fluid rounded-3" style="object-fit: cover; height:250px; width:100%;">
                                </div>
                                <hr>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('user.index') }}"
                                        class="btn btn-outline-secondary w-100 raised" type="submit">LIHAT DETAIL</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-2 d-flex align-items-stretch">
                        <div class="card w-100 rounded-4">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-1">
                                    <div class="">
                                        <h4 class="mb-0"><b>Table Produk</b></h4>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mt-3">
                                    <img src="{{ asset('backend/img/produk.jpeg') }}" alt="Deskripsi gambar"
                                        class="img-fluid rounded-3" style="object-fit: cover; height:250px; width:100%;">
                                </div>
                                <hr>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('produk.index') }}"
                                        class="btn btn-outline-secondary w-100 raised" type="submit">LIHAT DETAIL</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-2 d-flex align-items-stretch">
                        <div class="card w-100 rounded-4">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-1">
                                    <div class="">
                                        <h4 class="mb-0"><b>Table Kategori</b></h4>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mt-3">
                                    <img src="{{ asset('backend/img/kategori.jpeg') }}" alt="Deskripsi gambar"
                                        class="img-fluid rounded-3" style="object-fit: cover; height:250px; width:100%;">
                                </div>
                                <hr>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('kategori.index') }}"
                                        class="btn btn-outline-secondary w-100 raised" type="submit">LIHAT DETAIL</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-2 d-flex align-items-stretch">
                        <div class="card w-100 rounded-4">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-1">
                                    <div class="">
                                        <h4 class="mb-0"><b>Table Rekapan</b></h4>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mt-3">
                                    <img src="{{ asset('backend/img/rekapan.jpeg') }}" alt="Deskripsi gambar"
                                        class="img-fluid rounded-3" style="object-fit: cover; height:250px; width:100%;">
                                </div>
                                <hr>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('rekapan.index') }}"
                                        class="btn btn-outline-secondary w-100 raised" type="submit">LIHAT DETAIL</a>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </main>
    <!--end main wrapper-->

    {{-- Content --}}
    {{-- Content --}}

    <!--start overlay-->
    <div class="overlay btn-toggle"></div>
    <!--end overlay-->

    <!--start footer-->
    <footer class="page-footer">
        <p class="mb-0">Copyright © 2024. All right reserved.</p>
    </footer>
    <!--end footer-->

    <!--start cart-->

    <!--end cart-->



    <!--start switcher-->
    <button class="btn btn-grd btn-grd-primary position-fixed bottom-0 end-0 m-3 d-flex align-items-center gap-2"
        type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop">
        <i class="material-icons-outlined">tune</i>Customize
    </button>

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="staticBackdrop">
        <div class="offcanvas-header border-bottom h-70">
            <div class="">
                <h5 class="mb-0">Theme Customizer</h5>
                <p class="mb-0">Customize your theme</p>
            </div>
            <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas">
                <i class="material-icons-outlined">close</i>
            </a>
        </div>
        <div class="offcanvas-body">
            <div>
                <p>Theme variation</p>

                <div class="row g-3">
                    <div class="col-12 col-xl-6">
                        <input type="radio" class="btn-check" name="theme-options" id="LightTheme">
                        <label
                            class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
                            for="LightTheme">
                            <span class="material-icons-outlined">light_mode</span>
                            <span>Light</span>
                        </label>
                    </div>
                    <div class="col-12 col-xl-6">
                        <input type="radio" class="btn-check" name="theme-options" id="SemiDarkTheme">
                        <label
                            class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
                            for="SemiDarkTheme">
                            <span class="material-icons-outlined">contrast</span>
                            <span>Semi Dark</span>
                        </label>
                    </div>

                </div>
                <!--end row-->

            </div>
        </div>
    </div>
    <!--start switcher-->

    <!--bootstrap js-->
    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>

    <!--plugins-->
    <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/peity/jquery.peity.min.js') }}"></script>
    <script>
        $(".data-attributes span").peity("donut")
    </script>
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>
    <script src="{{ asset('backend/assets/js/dashboard1.js') }}"></script>
    <script>
        new PerfectScrollbar(".user-list")
    </script>

</body>

</html>
