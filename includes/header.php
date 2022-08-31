 <?php
  include '../includes/session.php';
  require_once "../includes/config.php";
  $a=$_SESSION["a_id"];
  $id=isset($_GET["a_id"])?$_GET ["a_id"]:"";
  $con = new mysqli (H , U , P , D);  
  $sql= "SELECT username FROM admin where a_id=$a";
  $qry= $con->prepare($sql);
  $qry->execute();
  $qry->bind_result($username);
  while($qry->fetch()){
  $datelog = date("m/d/Y h:i:sa");}
  include '../includes/phpSource/helpers.php';
?>

  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Municipality of Toboso Accounting Payroll</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../includes/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../includes/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../includes/dist/css/adminlte.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../includes/plugins/select2/css/select2.min.css">
  <!-- Sweet Alert -->
  <link href="../includes/sweetalert.css" rel="stylesheet" type="text/css"/>
  <script src="../includes/sweetalert.min.js" type="text/javascript"></script>
  <!-- DataTables -->
  <link rel="stylesheet" href="../includes/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../includes/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../includes/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <style>.modal-header{background-color:green;color:white;height:50px}</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
 <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block" data-toggle="modal" data-target="#employees">
        <a class="nav-link"><i class="fa fa-plus"></i> Employee</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../Harvest/index" class="nav-link"><i class="fa fa-eye"></i> Payroll</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
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
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item" class="fa fa-plus" data-toggle="modal" data-target="#addSettings">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-cog"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
          <img src="../includes/dist/img/toboso.png" class="img-circle elevation-2" height="40px">
      <span style="color:green" class="breadcrumb-item"><b>Accouting</b> | Payroll</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../includes/dist/img/avatar4.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $username;?></a>
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


