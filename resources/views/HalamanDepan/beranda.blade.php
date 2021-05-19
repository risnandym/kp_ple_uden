
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{asset('Gambar/logo-uin-1.png')}}">
  <title>Digital Library Fakultas Ushuluddin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('index')}}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="https://wa.me/087735448345" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('Gambar/logo-uin-1.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Digital Library</span>
      <br><span class="brand-text font-weight-light">Fakultas Ushuluddin</span> </br>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <!-- <div class="image">
          <img src="{{asset('Gambar/logo-fu.png')}}" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          <a text-alignment="center" class="d-block">{{auth()->user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Selamat Datang
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('index')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Beranda</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-book</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('view2')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Journal</p>
                </a>
              </li>
              @if (auth()->user()->level=="admin")
              <li class="nav-item">
                <a href="{{route('upebook')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upload File Ebook</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('upjournal')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upload File Journal</p>
                </a>
              </li>
              @endif
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Logout
                
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Beranda</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
              <li class="breadcrumb-item active">Beranda</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card col-lg-12">
              <div class="card-body">
                <h5 class="card-title">Selamat Datang</h5>
                </br>
                <p class="card-text">
                  Selamat datang di situs Digital Library Fakultas Ushuluddin UIN Sunan Gunung Djati Bandung. Disini kami
                  menyediakan layanan untuk anda dapat menikmati e-book ataupun jurnal-jurnal.
                </p>
                </br><p class="card-text">
                  Jika anda mempunyai beberapa petanyaan silahkan hubungi kamu melalui whatsapp dengan mengklik tombol contact
                  diatas
                  </p>
              </div>
              
            </div>
            <div class ="row">
            <div class="card col-lg-6">
              <div class="card-body text-center">
              <img src="{{asset('Gambar/animasi_journal1.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" height="60%" width="30%" style="opacity: 9"> 
              <h3>Jumlah Journal : {{$data['totalJurnal']}}</h3>
              </div>
              
          </div>
            <div class="card col-lg-6">
              <div class="card-body text-center">
              <img src="{{asset('Gambar/ebook.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" height="60%" width="30%" style="opacity: 9 " > 
              <h3>Jumlah Ebook : {{$data['totalEbook']}}</h3>
            </div>
          </div>
          </div>
          <!-- /.col-md-6 -->
          
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020-2021 <a href="https://fu.uinsgd.ac.id/">Fakultas Ushuluddin</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
