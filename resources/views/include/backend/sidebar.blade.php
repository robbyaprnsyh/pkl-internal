<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="logo-icon">
            <img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-img" alt="">
        </div>
        <div class="logo-name flex-grow-1">
            <h5 class="mb-0">Point Of Sale</h5>
        </div>
        <div class="sidebar-close">
            <span class="material-icons-outlined">close</span>
        </div>
    </div>
    <div class="sidebar-nav">
        <!--navigation-->
        <ul class="metismenu" id="sidenav">
            {{-- <li>
                    <a href="{{ route('user.index')}}" aria-expanded="true">
                        <div class="parent-icon"><i class="material-icons-outlined">inventory_2</i>
                        </div>
                        <div class="menu-title">ACL</div>
                    </a>
                </li> --}}
            <li>
            <li>
                <a href="{{ route('home') }}">
                    <div class="parent-icon"><i class="material-icons-outlined">dashboard</i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>
            </li>
            <li class="menu-label">Data Table</li>
            <li>
                <a href="{{ route('user.index') }}">
                    <div class="parent-icon"><i class="material-icons-outlined">person</i>
                    </div>
                    <div class="menu-title">Daftar Kasir</div>
                </a>
            </li>
            {{-- <li>
                <a href="{{ route('kasir.index') }}">
                    <div class="parent-icon"><i class="material-icons-outlined">description</i>
                    </div>
                    <div class="menu-title">Daftar Kasir</div>
                </a>
            </li> --}}
            <li>
                <a href="{{ route('rekapan.index') }}">
                    <div class="parent-icon"><i class="material-icons-outlined">description</i>
                    </div>
                    <div class="menu-title">Rekapan Penjualan</div>
                </a>
            </li>
            <li>
                <a href="{{ route('produk.index') }}">
                    <div class="parent-icon"><i class="material-icons-outlined">view_agenda</i>
                    </div>
                    <div class="menu-title">Tambah Produk</div>
                </a>
            </li>
            <li>
                <a href="{{ route('kategori.index') }}">
                    <div class="parent-icon"><i class="material-icons-outlined">inventory_2</i>
                    </div>
                    <div class="menu-title">Kategori</div>
                </a>
            </li>
        </ul>
        <!--end navigation-->
    </div>
</aside>
