<!DOCTYPE html>
<html lang="en">

<head>
  @include('peminjam.head')
</head>

<body class="bg-gradient-primary">

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">PERPUSNES</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">
                  <!-- Pesan sukses -->
                    @if (session('success'))
                    <div class="alert alert-success">
                      {{ session('success') }}
                    </div>
                  @endif

                  @if (session('error'))
                  <div class="alert alert-danger">
                  {{ session('error') }}
                  </div>
                  @endif

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login Petugas</h5>
                    <p class="text-center small">Masukkan Email & Password Akun Anda</p>
                  </div>

                  <form class="row g-3 needs-validation" action="{{ route('login-petugas') }}" method="POST">
                    @csrf
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="username">@</span>
                        <input type="text" name="username" class="form-control" id="username" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0" >Tidak Punya Akun? <a href="{{ route('register') }}">Buat Akun</a></p>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->
  <script>
    Swal.fire(
title: 'Berhasil Login!',
icon: 'success',
confirmButtonText: 'OK',
buttonsStyling: false, 
customClass: {
confirmButton: 'btn-custom-confirm'
});
</script>
</body>

</html>