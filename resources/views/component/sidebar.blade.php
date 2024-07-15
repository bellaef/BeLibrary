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
                    <a class="sidebar-link {{ Route::is('admin.page') ? 'active' : '' }}"
                       href="{{ route('admin.page') }}"
                       aria-expanded="false"
                       style="{{ Route::is('admin.page') ? 'background-color: #AF8F6F; color: #ffffff;' : '' }}"
                       onmouseover="this.style.backgroundColor='#F8F4E1'; this.style.color='#555';"
                       onmouseout="this.style.backgroundColor='{{ Route::is('admin.page') ? '#AF8F6F' : '' }}'; this.style.color='{{ Route::is('admin.page') ? '#ffffff' : '' }}';">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Route::is('buku.page') || Route::is('bukus.*') ? 'active' : '' }}"
                       href="{{ route('buku.page') }}"
                       aria-expanded="false"
                       style="{{ Route::is('buku.page') || Route::is('bukus.*') ? 'background-color: #AF8F6F; color: #ffffff;' : '' }}"
                       onmouseover="if (!this.classList.contains('active')) { this.style.backgroundColor='#F8F4E1'; this.style.color='#555'; }"
                       onmouseout="if (!this.classList.contains('active')) { this.style.backgroundColor='{{ Route::is('buku.page') ? '#AF8F6F' : '' }}'; this.style.color='{{ Route::is('buku.page') ? '#ffffff' : '' }}'; }">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Data Buku</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Route::is('dataadmin.page') || Route::is(['Admin.*', 'users.*']) ? 'active' : '' }}"
                       href="{{ route('dataadmin.page') }}"
                       aria-expanded="false"
                       style="{{ Route::is('dataadmin.page') ? 'background-color: #AF8F6F; color: #ffffff;' : '' }}"
                       onmouseover="this.style.backgroundColor='#F8F4E1'; this.style.color='#555';"
                       onmouseout="this.style.backgroundColor='{{ Route::is('dataadmin.page') ? '#AF8F6F' : '' }}'; this.style.color='{{ Route::is('dataadmin.page') ? '#ffffff' : '' }}';">
                        <span>
                            <i class="ti ti-cards"></i>
                        </span>
                        <span class="hide-menu">Data Admin</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Route::is('peminjaman.page') || Route::is('peminjamans.*') ? 'active' : '' }}"
                       href="{{ route('peminjaman.page') }}"
                       aria-expanded="false"
                       style="{{ Route::is('peminjaman.page') ? 'background-color: #AF8F6F; color: #ffffff;' : '' }}"
                       onmouseover="this.style.backgroundColor='#F8F4E1'; this.style.color='#555';"
                       onmouseout="this.style.backgroundColor='{{ Route::is('peminjaman.page') ? '#AF8F6F' : '' }}'; this.style.color='{{ Route::is('peminjaman.page') ? '#ffffff' : '' }}';">
                        <span>
                            <i class="ti ti-alert-circle"></i>
                        </span>
                        <span class="hide-menu">Riwayat Peminjaman</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Route::is('datapengunjung.page') || Route::is(['Pengunjung.*', 'customer.*']) ? 'active' : '' }}"
                       href="{{ route('datapengunjung.page') }}"
                       aria-expanded="false"
                       style="{{ Route::is('datapengunjung.page') ? 'background-color: #AF8F6F; color: #ffffff;' : '' }}"
                       onmouseover="this.style.backgroundColor='#F8F4E1'; this.style.color='#555';"
                       onmouseout="this.style.backgroundColor='{{ Route::is('datapengunjung.page') ? '#AF8F6F' : '' }}'; this.style.color='{{ Route::is('datapengunjung.page') ? '#ffffff' : '' }}';">
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
