<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Admin</title>
    @include('admin.head')

</head>
<body id="page-top">
    @include('admin.sidebar')
    @include('admin.navbar')

    <main id="main" class="main">

        <div class="pagetitle">
          <h1>Data Buku</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('admin.index')}}">Home</a></li>
              <li class="breadcrumb-item active">Data Buku</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
    
        <section class="section">
            <div class="row">
              <div class="col-lg-12">
      
                @include('admin.databuku.create')
                <div class="card">
                  <div class="card-body">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center">
                        <h5 class="card-title">Data Buku</h5>
                        <a href="#" class="btn btn-primary btn-icon-split" data-bs-toggle="modal" data-bs-target="#tambahBuku">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                            </span>
                            <span class="text">Tambah Data</span>
                        </a>
                    </div>

                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Judul</th>
                          <th>Penulis</th>
                          <th>Penerbit</th>
                          <th>Tahun Terbit</th>
                          <th>Cover</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($data_buku as $key => $buku )  
                        <tr>
                          <td>{{$key + 1}}</td>
                          <td>{{$buku->judul}} </td>
                          <td>{{$buku->penulis}}</td>
                          <td>{{$buku->penerbit}}</td>
                          <td>{{$buku->tahun_terbit}}</td>
                          <td> <img src="{{ asset('storage/' . $buku->cover) }}" class="img-thumbnail" style="width: 100px; height: 150px; object-fit: cover;" alt="Cover Buku"></td>
                          <td class="text-center" style="vertical-align: middle; height: 100px;">
                            <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editBuku{{ $buku->id }}">
                                <i class="bi bi-pen"></i>
                            </a>
                              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteBuku{{ $buku->id }}">
                                  <i class="bi bi-trash"></i>
                              </button>
                              
                          </td>
                        @include('admin.databuku.edit')
                        @include('admin.databuku.delete')
                         
                          </tr>
                       @endforeach
                      </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
      
                  </div>
                </div>
      
              </div>
            </div>
          </section>
    
      </main><!-- End #main -->
    
    
 
      @include('script')

      <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
 
</body>
</html>
