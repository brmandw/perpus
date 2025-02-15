<!DOCTYPE html>
<html lang="en">
<head>
    <title>Perpustakaan</title>
    @include('peminjam.head')

</head>
<body id="page-top">
    @include('peminjam.sidebar')
    @include('peminjam.navbar')

    <main id="main" class="main">

        <div class="pagetitle">
          <h1>Perpustakaan</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('peminjam.index')}}">Home</a></li>
              <li class="breadcrumb-item active">Perpustakaan</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
    
        <div class="col-lg-5">
            <!-- Card with an image on top -->
            <div class="card card-perpus">
                <img src="assets/img/card.jpg" class="card-img-top align-items-center" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card with an image on top</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div><!-- End Card with an image on top -->
        </div>
    
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