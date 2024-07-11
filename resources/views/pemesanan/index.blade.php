<!doctype html>
<html lang="en" data-bs-theme="semi-dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User</title>
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
    <header class="top-header">
        <nav class="navbar navbar-expand align-items-center gap-4">
            <div class="btn-toggle">
                <a href="javascript:;"><i class="material-icons-outlined">menu</i></a>
            </div>
            <div class="search-bar flex-grow-1">
                <div class="position-relative">
                    <input class="form-control rounded-5 px-5 search-control d-lg-block d-none" type="text"
                        placeholder="Search">
                    <span
                        class="material-icons-outlined position-absolute d-lg-block d-none ms-3 translate-middle-y start-0 top-50">search</span>
                    <span
                        class="material-icons-outlined position-absolute me-3 translate-middle-y end-0 top-50 search-close">close</span>
                    <div class="search-popup p-3">
                        <div class="card rounded-4 overflow-hidden">
                            <div class="card-header d-lg-none">
                                <div class="position-relative">
                                    <input class="form-control rounded-5 px-5 mobile-search-control" type="text"
                                        placeholder="Search">
                                    <span
                                        class="material-icons-outlined position-absolute ms-3 translate-middle-y start-0 top-50">search</span>
                                    <span
                                        class="material-icons-outlined position-absolute me-3 translate-middle-y end-0 top-50 mobile-search-close">close</span>
                                </div>
                            </div>
                            <div class="card-body search-content">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav gap-1 nav-right-links align-items-center">
                <li class="nav-item d-lg-none mobile-search-btn">
                    <a class="nav-link" href="javascript:;"><i class="material-icons-outlined">search</i></a>
                </li>
            </ul>
        </nav>
    </header>

    <!--end top header-->


    <!--start sidebar-->
    <aside class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div class="logo-icon">
                <img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-img" alt="">
            </div>
            <div class="logo-name flex-grow-1">
                <h5 class="mb-0">User</h5>
            </div>
            <div class="sidebar-close">
                <span class="material-icons-outlined">close</span>
            </div>
        </div>
        <div class="sidebar-nav">
            <!--navigation-->
            <ul class="metismenu" id="sidenav">
                <a href="" class="navbar-brand">
                    <h3 class="text-light">KATEGORI</h3>
                </a>
                <div class="by navbar-nav w-100">
                    <form action="{{ route('pemesanan.index') }}" method="get">
                        <select class="form-control" name="id_kategori">
                            <option value="" {{ is_null(request()->get('id_kategori')) ? 'selected' : '' }}>
                                Tampil Semua Kategori</option>
                            @foreach ($kategori as $data)
                                <option type="submit" value="{{ $data->id }}">
                                    {{ request()->get('id_kategori') == $data->id ? '>' : '' }}
                                    {{ $data->nama_kategori }}
                                </option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-secondary mt-3">Go</button>
                    </form>
                </div>
                </li>


            </ul>
            <!--end navigation-->
        </div>
        <form action="{{ route('pemesanan.store') }}" class="mt-3" method="POST" role="form"
            enctype="multipart/form-data">
            @csrf
            <div class="col-sm-12" style="font-size: 12.5px;">
                <div class="bg-secondary rounded p-3">
                    <h4 class="text-center text-light mb-4 mt-3">Pesanan</h4>
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th class="text-light" scope="col">QTY</th>
                                <th class="text-light" scope="col">Nama Pesanan</th>
                                <th class="text-light" scope="col">Jumlah Harga</th>
                                <th class="text-light" scope="col"></th>
                            </tr>
                        </thead>
                        <tbody id="tabel-pesanan">
                            <!-- Tempat untuk menampilkan detail produk yang dipilih -->
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-between">
                        <p class="fw-semi-bold text-light">Subtotal : </p>
                        <p class="fw-semi-bold text-light" id="subtotal"> Rp. 0</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="fw-semi-bold text-light">Pajak : </p>
                        <p class="fw-semi-bold text-light" id="pajak"> Rp. 0</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="fw-semi-bold text-light">Total : </p>
                        <p class="fw-semi-bold text-light" id="totalAkhir"> Rp. 0</p>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12" style="margin-left: 10px; margin-top: 10px">

                        <div class="form-group">
                            <input type="text" class="mb-2 form-control" name="nama_pemesan"
                                placeholder="Isi Nama" style="width: 150px; height: 50px">
                        </div>
                        <div class="form-group">
                            <input type="text" class="mb-2 form-control" name="tambahan"
                                placeholder="Ada Tambahan?" style="width: 200px; height: 50px">
                        </div>
                        <button type="submit" class="mt-2 btn-secondary btn btn-default">Pesan</button>
        </form>
        </div>
        </div>
        </div>
    </aside>
    <!--end sidebar-->

    <!--start main wrapper-->
    <!--end main wrapper-->

    <!-- Content Start -->
    <main class="main-wrapper">
        <div class="main-content">
            @if ($produk->isEmpty())
                <p style="font-size: 30px; padding-top: 100px; text-align: center;">Menu Sudah Habis Atau <br> tidak
                    tersedia untuk Kategori ini.</p>
            @else
                <div class="container-fluid pt-4">
                    <div class="row g-4">
                        @foreach ($produk as $item)
                            <div class="col-sm-4 col-xl-3">
                                <div class="menu" data-id="{{ $item->id }}">
                                    <div class="menu-box mb-5 bg-light">
                                        <div class="text-center p-4">
                                            <img src="{{ asset('/images/produk/' . $item->cover) }}"
                                                style="width: 140px; height:100%;">
                                        </div>
                                        <div class="d-flex flex-column align-items-center">
                                            <p>{{ $item->nama_produk }}</p>
                                            <p>{{ $item->harga }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </main>
    <!-- Content End -->

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

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>

        <!-- Custom Javascript -->
        <script>
            $(document).ready(function() {
            // Fungsi untuk menambahkan atau mengupdate produk ke dalam sidebar
            function tambahkanProduk(idProduk, nama, harga) {
            var produkExists = false;

            $('#tabel-pesanan tr').each(function() {
            var id = $(this).data('id');
            if (id === idProduk) {
            var qty = parseInt($(this).find('input').val());
            qty++;
            $(this).find('input').val(qty);

            var jumlahHarga = qty * parseInt(harga);
            $(this).find('td:nth-child(3)').text('Rp. ' + jumlahHarga);

            produkExists = true;
            hitungDanTampilkanTotal();
            return false; // Keluar dari loop each
            }
            });

            if (!produkExists) {
            var newRow = '<tr data-id="' + idProduk + '">'
                + '<td><input style="width: 36.6px; height: 20px;" type="number" name="jumlah" value="1"></td>'
                + '<td>' + nama + '</td>'
                + '<td>Rp. ' + harga + '</td>'
                + '<td><button class="btn btn-danger btn-batal" style="font-size: 10px; text: 15px;">x</button></td>'
                + '</tr>';
            $('#tabel-pesanan').append(newRow);
            hitungDanTampilkanTotal();
            }
            }

            // Event listener untuk tombol "Batal Pesan"
            $('#tabel-pesanan').on('click', '.btn-batal', function() {
            var row = $(this).closest('tr');
            var hargaBatal = parseInt(row.find('td:nth-child(3)').text().replace('Rp. ', '').trim());

            row.remove(); // Hapus baris dari tabel pesanan
            hitungDanTampilkanTotal();
            });

            // Fungsi untuk menghitung dan menampilkan subtotal, pajak, dan total akhir
            function hitungDanTampilkanTotal() {
            var subtotal = hitungSubtotal();
            var pajak = subtotal * 0.11; // Ubah sesuai kebutuhan pajak
            var totalAkhir = subtotal + pajak;

            $('#subtotal').text('Rp. ' + subtotal);
            $('#pajak').text('Rp. ' + pajak);
            $('#totalAkhir').text('Rp. ' + totalAkhir);

            // Update nilai input hidden untuk dikirimkan bersama form
            $('#subtotal_input').val(subtotal);
            $('#pajak_input').val(pajak);
            $('#totalAkhir_input').val(totalAkhir);
            }

            // Fungsi untuk menghitung subtotal dari semua produk
            function hitungSubtotal() {
            var subtotal = 0;
            $('#tabel-pesanan tr').each(function() {
            var jumlahHarga = parseInt($(this).find('td:nth-child(3)').text().replace('Rp. ', '').trim());
            subtotal += jumlahHarga;
            });
            return subtotal;
            }

            // Event listener untuk setiap klik produk
            $('.menu-box').click(function() {
            var idProduk = $(this).closest('.menu').data('id');
            var namaProduk = $(this).closest('.menu').find('p:first').text();
            var hargaProduk = $(this).closest('.menu').find('p:last').text();

            // Menghilangkan teks "Rp." dari harga
            hargaProduk = hargaProduk.replace('Rp. ', '');

            // Tambahkan produk ke dalam sidebar
            tambahkanProduk(idProduk, namaProduk, hargaProduk);
            });
            });
        </script>

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
