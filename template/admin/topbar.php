<header class="main-header">
        <!-- Logo -->
        <a href="adminindex.php" class="logo">
          <span class="logo-mini"><b>KCG</b></span>
          <span class="logo-lg"><b>BPR </b> Kencana Graha</span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#LogoutModal">
                <i class="fa fa-fw fa-sign-out"></i>Logout</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
    <div class="modal fade" id="LogoutModal" tabindex="-1" role="dialog" aria-labelledby="LogoutModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="LogoutModalLabel">Logout</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                </button>
              </div>
              <div class="modal-body">Pilih "Logout" dibawah jika Anda siap mengakhiri sesi Anda saat ini.</div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="logout.php">Logout</a>
              </div>
            </div>
          </div>
        </div>