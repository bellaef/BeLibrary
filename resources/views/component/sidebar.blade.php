<!-- Sidebar Start -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="./index.html" class="text-nowrap logo-img">
          <img src="{{ asset('images/images/logo/logos.png') }}" width="180" alt="" />
        </a>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
          <i class="ti ti-x fs-8"></i>
        </div>
      </div>
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Home</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link {{ Route::is('admin.page') ? 'active' : '' }}" href="{{ route('admin.page') }}" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Dashboard</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link {{ Route::is('buku.page') || Route::is('bukus.*') ? 'active' : '' }}" href="{{ route('buku.page') }}" aria-expanded="false">
                <span>
                <i class="ti ti-article"></i>
              </span>
              <span class="hide-menu">Data Buku</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link {{ Route::is('dataadmin.page') || Route::is(['Admin.*', 'users.*']) ? 'active' : '' }}" href="{{ route('dataadmin.page') }}" aria-expanded="false">
                <span>
                <i class="ti ti-cards"></i>
              </span>
              <span class="hide-menu">Data Admin</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link {{Route::is('peminjaman.page') || Route::is('peminjamans.*') ? 'active' : '' }}" href="{{ route('peminjaman.page') }}" aria-expanded="false">
              <span>
                <i class="ti ti-alert-circle"></i>
              </span>
              <span class="hide-menu">Riwayat Peminjaman</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link {{ Route::is('datapengunjung.page') || Route::is(['Pengunjung.*', 'customer.*']) ? 'active' : '' }}" href="{{ route('datapengunjung.page') }}" aria-expanded="false">
              <span>
                <i class="ti ti-cards"></i>
              </span>
              <span class="hide-menu">Data Pengunjung</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>
  <!--  Sidebar End -->
