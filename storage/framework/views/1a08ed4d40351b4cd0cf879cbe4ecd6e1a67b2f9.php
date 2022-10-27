<body class="hold-transition sidebar-mini layout-fixed pace-primary">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo e(asset('panduan')); ?>" target="_blank" class="nav-link"><i class="fa fa-file-pdf"></i> Panduan</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo e(asset('/')); ?>" target="_blank" class="nav-link"><i class="fa fa-home"></i> Beranda</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link text-success" href="<?php echo e(asset('admin/akun')); ?>">
          <i class="fa fa-lock"></i> <?php echo Session()->get('nama'); ?> (<?php echo Session()->get('akses_level'); ?>)
        </a>
      </li>

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link text-danger" href="<?php echo e(asset('login/logout')); ?>">
          <i class="fas fa-sign-out-alt"></i> KELUAR
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar --><?php /**PATH C:\xampp\htdocs\comprolaravel8\resources\views/admin/layout/header.blade.php ENDPATH**/ ?>