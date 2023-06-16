<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title> <?= $this->renderSection('title'); ?> </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css');?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-3.2.0/plugins/overlayScrollbars/css/OverlayScrollbars.min.css');?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-3.2.0/dist/css/adminlte.min.css');?>">

</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">

<!-- Brgy Logo -->
<a href="index3.html" class="brand-link">
  <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
  <span class="brand-text font-weight-light">Admin</span>
</a>

<!-- Sidebar -->
<div class="sidebar">

  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">Admin</a>
    </div>
  </div>

  <!-- SidebarSearch Form -->
  <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->

      <li class="nav-item">
        <a href="<?= url_to('MIS::Dashboard') ?>" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>

      </li>

      <li class="nav-item">
        <a href="<?= url_to('MIS::Residents_Profile')?>" class="nav-link">
          <i class="nav-icon fas fa-users"></i>
          <p>
            Resident's Profile
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?= url_to('MIS::Officials_Profile')?>" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>
          Official's Profile
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?= url_to('MIS::Events')?>" class="nav-link">
          <i class="nav-icon fas fa-calendar"></i>
          <p>
            Events
          </p>
        </a>
      </li>


      <li class="nav-item">
        <a href="<?= url_to('MIS::Mapping')?>" class="nav-link">
          <i class="nav-icon fas fa-map"></i>
          <p>
            Mapping
          </p>
        </a>
      </li>

    </ul>

  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>


<?= $this->renderSection('content') ?>

</div>
</body>
</html>