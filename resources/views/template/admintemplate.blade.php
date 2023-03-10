<!DOCTYPE html>
<html lang="en">

@foreach($profil as $pro)

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin - {{ $pro->nama_sekolah }} | @yield('judul')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{asset('vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
  <link rel="shortcut icon" href="{{asset('image/logo.png')}}">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar border-bottom border-dark bg-white default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center bg-white navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="{{ route('admin.beranda') }}">
            <img src="{{ asset('image/logo.png') }}" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="{{ route('admin.beranda') }}">
            <img src="{{ asset('image/logo.png') }}" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper bg-white d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Hello, <span class="text-black fw-bold">{{ $datauser->nama }}</span></h1>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="{{ asset('images/faces/face8.png') }}" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <p class="mb-1 mt-3 font-weight-semibold">{{ $datauser->nama }}</p>
                <p class="fw-light text-muted mb-0">{{ $datauser->email }}</p>
              </div>
              <a class="dropdown-item" href="{{ route('logout') }}"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas bg-white" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-category">Admin</li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.beranda') }}">
              <i class="fas fa-home menu-icon"></i>
              <span class="menu-title">Beranda</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.banner') }}">
              <i class="fas fa-image menu-icon"></i>
              <span class="menu-title">Banner Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#pengguna" aria-expanded="false" aria-controls="pengguna">
              <i class="fas fa-user-circle menu-icon"></i>
              <span class="menu-title">Data Pengguna</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="pengguna">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.adminData') }}">Admin</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.guruData') }}">Guru & Tenaga pendidik</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.siswaData') }}">Siswa</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#profil" aria-expanded="false" aria-controls="profil">
              <i class="menu-icon fas fa-address-card"></i>
              <span class="menu-title">Profil</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="profil">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.profilsekolah') }}">Profil Sekolah</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.programkeahlian') }}">Program Keahlian</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.ekstrakurikuler') }}">Ekstrakurikuler</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#informasi" aria-expanded="false" aria-controls="informasi">
              <i class="menu-icon fas fa-info-circle"></i>
              <span class="menu-title">Informasi</span>
              <i class="menu-arrow"></i>
            </a>
            <div id="informasi" class="collapse">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.event') }}">Event Sekolah</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.unduhan') }}">Unduhan</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#galeri" aria-expanded="false" aria-controls="galeri">
              <i class="menu-icon mdi mdi-grid-large"></i>
              <span class="menu-title">Galeri</span>
              <i class="menu-arrow"></i>
            </a>
            <div id="galeri" class="collapse">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.galeriFoto') }}">Foto</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.galeriVideo') }}">Video</a></li>
              </ul>
            </div>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#graduated" aria-expanded="false" aria-controls="graduated">
              <i class="fas fa-trophy menu-icon"></i>
              <span class="menu-title">Info Kelulusan</span>
              <i class="menu-arrow"></i>
            </a>
            <div id="graduated" class="collapse">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.siswaAkhirData') }}">Masukkan Nilai</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.cekSkl') }}">Cek SKL</a></li>
              </ul>
            </div>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#graduated" aria-expanded="false" aria-controls="graduated">
              <i class="fas fa-trophy menu-icon"></i>
              <span class="menu-title">Hasil Belajar</span>
              <i class="menu-arrow"></i>
            </a>
            <div id="graduated" class="collapse">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.nilaisiswa') }}">Hasil Belajar Siswa</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.sklsiswaakhir') }}">SKL Siswa Akhir</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.statuspembayaran') }}">
              <i class="fas fa-store menu-icon"></i>
              <span class="menu-title">Status Pembayaran</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              @yield('main')
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2022. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
  <!-- inject:js -->
  <script src="{{ asset('js/off-canvas.js') }}"></script>
  <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('js/template.js') }}"></script>
  <script src="{{ asset('js/settings.js') }}"></script>
  <script src="{{ asset('js/todolist.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/header.js') }}"></script>
  <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
  <!-- endinject -->

  @yield('script')
</body>

@endforeach

</html>
