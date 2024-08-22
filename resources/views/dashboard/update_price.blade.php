<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">

<!-- Main CSS -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <style>
    .nav-item.active .nav-link {
      background-color: #3e8cf336;
      color: #000; 
    }
    table th:nth-child(1) {
    width: 50px; 
    }
    table th:nth-child(4) {
    width: 50px; 
    }
    </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="img/logo.png" alt="">
        <span class="d-none d-lg-block">Metabharata</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="img/person.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::user()->name}}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            {{-- <li class="dropdown-header">
              <h6></h6>
            </li> --}}
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <form action="{{ route('actionlogout') }}" method="post">
                @csrf
                <button type="submit" class="dropdown-item d-flex align-items-center" style="border: none; background: none; cursor: pointer;">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Sign Out</span>
                </button>
              </form>
            </li>

          </ul>
        </li>

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Users</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link collapsed" href="{{ route('price') }}">
          <i class="bi bi-tags-fill"></i>
          <span>Price</span>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-menu-button-wide"></i>
          <span>Users</span>
        </a>
      </li> --}}
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <div class="row">
        <div class="col">
            <div class="pagetitle">
                <h1>Price</h1>
            </div>
        </div>
      </div>
    </div>
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <div class="col-6">
              <div class="card">
                <div class="card-body"><br>
                  {{-- <h5 class="card-title"></h5> --}}
                  <form action="{{ route('updateprice', ['id' => $price->id]) }}" method="post">
                    @csrf
                    <div class="row mb-3">
                      <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                      <div class="col-sm-10">
                        <input type="text" name="name_product" class="form-control" value="{{ $price->name_product}}">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputText" class="col-sm-2 col-form-label">Harga</label>
                      <div class="col-sm-10">
                        <input type="text" name="price" class="form-control" value="{{ $price->price}}">
                      </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Update</label>
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Template Main JS File -->
  <script src="js/main.js"></script>
  

</body>

</html>

