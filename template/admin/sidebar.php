<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="img/avatar.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo $_SESSION['nama']; ?></p>
              <span class="small">
                <?php 
                function hari_ini(){
                $hari = date ("D");
               
                switch($hari){
                  case 'Sun':
                    $hari_ini = "Minggu";
                  break;
               
                  case 'Mon':     
                    $hari_ini = "Senin";
                  break;
               
                  case 'Tue':
                    $hari_ini = "Selasa";
                  break;
               
                  case 'Wed':
                    $hari_ini = "Rabu";
                  break;
               
                  case 'Thu':
                    $hari_ini = "Kamis";
                  break;
               
                  case 'Fri':
                    $hari_ini = "Jumat";
                  break;
               
                  case 'Sat':
                    $hari_ini = "Sabtu";
                  break;
                  
                  default:
                    $hari_ini = "Tidak di ketahui";   
                  break;
                }
               
                return $hari_ini;
               
              }
               
              echo hari_ini();
              ?>. <?php echo date('d M Y'); ?>
              </span>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li>
              <a href="adminindex.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>

             <?php if($_SESSION['batasan'] <= 2 || $_SESSION['batasan']==3 || $_SESSION['batasan']==7) { ?>
             <li class="treeview">
              <a href="#">
                <i class="glyphicon glyphicon-list-alt"></i>
                <span>Laporan Internal</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <?php if($_SESSION['batasan'] <= 2 || $_SESSION['batasan']==3 || $_SESSION['batasan']==7) { ?>
                    <li><a href="?module=lapin_r/lapin-view"><i class="fa fa-circle-o"></i> View Laporan</a></li>
                <?php } ?>
                <?php if($_SESSION['batasan']!=3) { ?>
                  <li><a href="?module=lapin_r/lapin-list"><i class="fa fa-circle-o"></i> List Laporan</a></li>
                  <li><a href="?module=lapin_r/lapin-add"><i class="fa fa-circle-o"></i> Tambah Laporan</a></li>
                <?php } ?>
              </ul>
            </li>
          <?php } ?>

            <?php if($_SESSION['batasan'] == 8 || $_SESSION['batasan'] <= 2 ) { ?>
            <li class="treeview">
              <a href="#">
                <i class="glyphicon glyphicon-home"></i>
                <span>Pemulihan Asset</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li><a href="?module=rurah/rurah-list"><i class="fa fa-circle-o"></i> List Asset</a></li>
                  <li><a href="?module=rurah/rurah-add"><i class="fa fa-circle-o"></i> Tambah Asset</a></li>
              </ul>
            </li>
          <?php } ?>

          <?php if($_SESSION['batasan'] <= 2 || $_SESSION['batasan'] == 5) { ?>
            <li class="treeview">
              <a href="#">
                <i class="glyphicon glyphicon-list-alt"></i>
                <span>Laporan Publikasi</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?module=lappub/lappub-list"><i class="fa fa-circle-o"></i> List Laporan</a></li>
                <li><a href="?module=lappub/lappub-add"><i class="fa fa-circle-o"></i> Tambah Laporan</a></li>
              </ul>
            </li>
          <?php } ?>

            <?php if($_SESSION['batasan']==1) { ?>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i>
                <span>User Management</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?module=user/user-list"><i class="fa fa-circle-o"></i> Lihat Pengguna</a></li>
                <li><a href="?module=user/user-add"><i class="fa fa-circle-o"></i> Tambah User Baru</a></li>
              </ul>
            </li>
          <?php } ?>

          </ul>
        </section>
      </aside>

      