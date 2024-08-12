<!DOCTYPE html>
<html lang="en">

<!-- Header -->

<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: ../index.php?session=expired");
  exit();
}

include('header.php');
include('../conf/config.php');
include('database.php');
?>

<?php include('../conf/config.php'); ?>
<!-- /.header -->


<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <?php include('navbar.php') ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <?php include('brand-logo.php') ?>
      <!-- Brand Logo -->


      <!-- Sidebar -->
      <?php include('sidebar.php') ?>
      <!-- /.sidebar -->
    </aside>
    <!-- /.Main Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Main content -->
      <?php include('dashboard.php') ?>
      <!-- /.main-content -->
    </div>
    <!-- /.content-wrapper -->
  </div>
  <!-- ./wrapper -->

  <!-- Main Footer -->
  <?php include('footer.php') ?>
  <!-- /.main-footer -->

</body>

</html>