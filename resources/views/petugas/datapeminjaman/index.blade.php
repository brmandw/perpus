<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Admin</title>
    @include('petugas.head')

</head>
<body id="page-top">
    <div id="wrapper">
        @include('petugas.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('petugas.navbar')

                <!-- Pesan suksess
                p@if (session('success'))
                <div class="alert alert-success">
                p { { session('success') }}
                </div>
                p@endif 

                p@if (session('error'))
                <div class="alert alert-danger">
                { { session('error') }}
                </div>
                p@endif  -->

                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Peminjaman</h1>
                        <div class="d-flex">
                
                          
                        </div>
                    </div>
                    
                   

                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Data Peminjaman</h6>
                            <a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#tambahObatModal">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Tambah Data</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center align-middle" style="width: 60px">No</th>
                                            <th class="text-center align-middle" style="width: 150px">Nama Peminjam</th>
                                            <th class="text-center align-middle" style="width: 210px">Judul</th>
                                            <th class="text-center align-middle" style="width: 140px">Tgl Peminjaman</th>
                                            <th class="text-center align-middle" style="width: 150px">Tgl Pengembalian</th>
                                            <th class="text-center align-middle" style="width: 150px">Status Peminjaman</th>
                                            <th class="text-center align-middle" style="width: 140px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th class="text-center align-middle" style="width: 60px">No</th>
                                            <th class="text-center align-middle" style="width: 150px">Nama Peminjam</th>
                                            <th class="text-center align-middle" style="width: 210px">Judul</th>
                                            <th class="text-center align-middle" style="width: 140px">Tgl Peminjaman</th>
                                            <th class="text-center align-middle" style="width: 150px">Tgl Pengembalian</th>
                                            <th class="text-center align-middle" style="width: 150px">Status Peminjaman</th>
                                            <th class="text-center align-middle" style="width: 140px">Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('template.footer')
        </div>
    </div>
    
 
    @include('template.script')
</body>
</html>
