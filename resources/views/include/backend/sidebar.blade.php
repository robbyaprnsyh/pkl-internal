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
                <a href="cards.html">
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
                    <div class="menu-title">User</div>
                </a>
            </li>
            <li>
                <a href="{{ route('kasir.index') }}">
                    <div class="parent-icon"><i class="material-icons-outlined">description</i>
                    </div>
                    <div class="menu-title">Daftar Kasir</div>
                </a>
            </li>
            <li>
                <a href="{{ route('produk.index') }}">
                    <div class="parent-icon"><i class="material-icons-outlined">description</i>
                    </div>
                    <div class="menu-title">Tambah Produk</div>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <div class="parent-icon"><i class="material-icons-outlined">shopping_bag</i>
                    </div>
                    <div class="menu-title">eCommerce</div>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <div class="parent-icon"><i class="material-icons-outlined">card_giftcard</i>
                    </div>
                    <div class="menu-title">Components</div>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <div class="parent-icon"><i class="material-icons-outlined">view_agenda</i>
                    </div>
                    <div class="menu-title">Icons</div>
                </a>
            </li>
        </ul>
        <!--end navigation-->
    </div>
</aside>
