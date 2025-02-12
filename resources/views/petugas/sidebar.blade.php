<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->routeIs('petugas.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('petugas.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ request()->is('admin*', 'petugas*', 'peminjam*', 'buku*') ? 'active' : '' }}">
        <a class="nav-link collapsed {{ request()->is('admin*', 'petugas*', 'peminjam*', 'buku*') ? 'active' : '' }}" href="#" data-toggle="collapse" data-target="#collapseData"
            aria-expanded="true" aria-controls="collapseData">
            <i class="fas fa-fw fa-info-circle"></i>
            <span>Master Data</span>
        </a>
        <div id="collapseData" class="collapse {{ request()->is('admin*', 'petugas*', 'peminjam*', 'buku*') ? 'show' : '' }}" aria-labelledby="headingInformasi" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Informasi Detail:</h6>
                <a class="collapse-item {{ request()->routeIs('petugas.databuku.index') ? 'active' : '' }}" href="{{ route('petugas.databuku.index') }}">Data Buku</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item {{ request()->routeIs('petugas.kategoribuku.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('petugas.kategoribuku.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Kategori Buku</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item {{ request()->routeIs('petugas.datapeminjaman.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('petugas.datapeminjaman.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Peminjaman</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item {{ request()->routeIs('petugas.index') ? 'active' : '' }}">
        <a class="nav-link " href="{{ route('petugas.index') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item {{ request()->is('admin*', 'petugas*', 'peminjam*', 'buku*') ? 'active' : '' }}">
        <a class="nav-link collapsed {{ request()->is('admin*', 'petugas*', 'peminjam*', 'buku*') ? 'active' : '' }}" data-bs-toggle="collapse" data-bs-target="#collapseData" href="#" aria-expanded="true" aria-controls="collapseData">
          <i class="bi bi-journal-text"></i><span>Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="collapseInformasi" class="collapse {{ request()->is('admin*', 'petugas*', 'peminjam*', 'buku*') ? 'show' : '' }}" aria-labelledby="headingInformasi" data-parent="#accordionSidebar">
          <li>
            <a class="collapse-item {{ request()->routeIs('petugas.databuku.index') ? 'active' : '' }}" href="{{ route('petugas.databuku.index') }}">
              <i class="bi bi-circle"></i><span>Data Buku</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item {{ request()->routeIs('petugas.kategoribuku.index') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{ route('petugas.kategoribuku.index') }}">
          <i class="bi bi-person"></i>
          <span>Kategori Buku</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item {{ request()->routeIs('petugas.datapeminjaman.index') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{ route('petugas.datapeminjaman.index') }}">
          <i class="bi bi-question-circle"></i>
          <span>Data Peminjaman</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->


    </ul>

  </aside><!-- End Sidebar-->
