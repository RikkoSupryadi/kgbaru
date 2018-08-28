<!DOCTYPE html>
<html>
  <?php include('template/admin/header.php'); ?>
  
  <body class="skin-black sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

      <?php include('template/admin/topbar.php'); ?>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <?php include('template/admin/sidebar.php'); ?>

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <?php 

        if(!empty($_GET['module'])) {

          $module=$_GET['module'];
          include('template/admin/'.$module.'.php');
        } else {

          include('template/admin/dashboard.php');
        }

        ?>
        <!-- /.content -->
      </div><!-- /.content-wrapper -->

      <?php include('template/admin/footer.php'); ?>

      <!-- Control Sidebar -->
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <?php include('template/admin/script.php'); ?>
  </body>
</html>
