<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Welcome</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('template/css/sb-admin-2.css') }}" rel="stylesheet">
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome to PERPUSNES</h1>
                  </div>
                  <br>
                 
                  <a href="{{ route('login-admin') }}" class="btn btn-danger">
                   ADMIN
                  </a>
                  <a href="{{ route('login-petugas') }}" class="btn btn-danger">
                    PETUGAS
                   </a>
                  </div>
                </div>
              
          </div>
        </div>

      </div>

    </div>

  </div>

</body>

</html>