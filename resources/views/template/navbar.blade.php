<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Alerts -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell fa-fw"></i>
                        <!-- Counter - Alerts -->
                        <span class="badge badge-danger badge-counter">
                            {{ $obatHabis->count() + $obatHampirHabis->count() }}
                        </span>
                    </a>
                    <!-- Dropdown - Alerts -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">
                            Pemberitahuan Stok Obat
                        </h6>

                     <!-- Notifikasi Obat -->
                        @if($obatHabis->count() > 0 || $obatHampirHabis->count() > 0)
                        <!-- Notifikasi Obat Kosong -->
                        @if($obatHabis->count() > 0)
                            @foreach($obatHabis as $obat)
                            <div class="dropdown-item d-flex align-items-center">
                                <div class="mr-3">
                                    <div class="icon-circle bg-danger">
                                        <i class="fas fa-notes-medical text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-700">Obat Habis!</div>
                                    {{ $obat->nama_obat }} - {{ $obat->kode_suplier }} 
                                    <br> Stok: {{ $obat->jumlah_obat }}
                                </div>
                            </div>
                            @endforeach
                        @endif

                        <!-- Notifikasi Obat Hampir Habis -->
                        @if($obatHampirHabis->count() > 0)
                            @foreach($obatHampirHabis as $obat)
                            <div class="dropdown-item d-flex align-items-center">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-notes-medical text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-700">Obat Hampir Habis!</div>
                                    {{ $obat->nama_obat }} - {{ $obat->kode_suplier }} 
                                    <br> Stok tersisa: {{ $obat->jumlah_obat }}
                                </div>
                            </div>
                            @endforeach
                        @endif
                        @else
                        <!-- Pesan jika tidak ada obat habis atau hampir habis -->
                        <div class="dropdown-item d-flex align-items-center">
                            <div class="mr-3">
                                <div class="icon-circle bg-success">
                                    <i class="fas fa-check-circle text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-700">Semua stok aman!</div>
                                Tidak ada obat yang habis atau hampir habis.
                            </div>
                        </div>
                        @endif

                        </div>
                    </li>
           


        

        <!-- Nav Item - User Information 
        <li class="nav-item no-arrow">
            <a class="nav-link" href="profile.php" role="button" aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="assets/img/img_properties/profile.png">
            </a>
        </li> -->

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - Logout -->
        <li class="nav-item no-arrow mx-1">
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="nav-link btn btn-link" type="button" role="button" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-fw" href=""> </i>
                </button>
            </form>

             <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Keluar</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Apakah Anda yakin ingin keluar? </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                            <a class="btn btn-danger" href="{{ route('login') }}">Keluar</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</nav>
