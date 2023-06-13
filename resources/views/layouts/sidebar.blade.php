        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>1</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            @role('superAdmin')
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item {{ Request::is('teknisi', 'customer') ? 'active' : '' }}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Akun</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Akun:</h6>
                        <a class="collapse-item {{ Request::is('teknisi') ? 'active' : '' }} text-info" href="/teknisi">Teknisi</a>
                        <a class="collapse-item {{ Request::is('customer') ? 'active' : '' }} text-info" href="/customer">Customer</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item {{ Request::is('layanan') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('layanan') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Layanan</span></a>
                </a>
            </li>

            <li class="nav-item {{ Request::is('pemesanan') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('pemesanan.index') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Riwayat Pemesanan</span></a>
                </a>
            </li>
            @endrole

            @role('teknisi')
            <li class="nav-item {{ Request::is('pemesanan') ? 'active' : '' }}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Pemesanan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pilih Menu:</h6>
                        <a class="collapse-item {{ Request::is('pemesanan') ? 'active' : '' }} text-info" href="{{ route('pemesanan.index') }}">Cek Pesanan</a>
                    </div>
                </div>
            </li>
            @endrole

            @role('customer')
            <li class="nav-item {{ Request::is('info') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('info.index') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>List Harga</span></a>
                </a>
            </li>
            <li class="nav-item {{ Request::is('pemesanan') ? 'active' : '' }}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Pemesanan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pilih Menu:</h6>
                        <a class="collapse-item {{ Request::is('pemesanan') ? 'active' : '' }} text-info" href="{{ route('pemesanan.create') }}">Buat Pesanan</a>
                        <a class="collapse-item {{ Request::is('pemesanan') ? 'active' : '' }} text-info" href="{{ route('pemesanan.index') }}">Riwayat Pesanan</a>
                    </div>
                </div>
            </li>
            {{-- <li class="nav-item {{ Request::is('pembayaran') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('pembayaran.index') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Pembayaran</span></a>
                </a>
            </li> --}}
            @endrole

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="{{ asset('myAdmin') }}/img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>

        </ul>
        <!-- End of Sidebar -->
