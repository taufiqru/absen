  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
       <img src="<?=base_url()?>dist/images/logo.png" alt="kemhan Logo" class="brand-image img-circle elevation-3"
           style="opacity: 1"> 
      <span class="brand-text font-weight-light">Respon Absen</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          <a href="#" class="d-block">Piket Jaga</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="<?=base_url()?>index.php/respon" class="nav-link">
              <i class="nav-icon fas  fa-users"></i>
              <p>
                Respon Absensi
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?=base_url()?>index.php/respon/laporan" class="nav-link">
              <i class="nav-icon fas  fa-users"></i>
              <p>
                Laporan Absensi
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?=base_url()?>index.php/respon/laporan_ropeg" class="nav-link">
              <i class="nav-icon fas  fa-users"></i>
              <p>
                Laporan Absensi Ropeg
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?=base_url()?>index.php/akun" class="nav-link">
              <i class="nav-icon fas  fa-users"></i>
              <p>
                Akun Admin
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Bidang
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bid Jam Kam</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bid Ops</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bid Takol Kerma</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tata Usaha</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?=base_url();?>index.php/login/logout" class="nav-link">
              <i class="far fas fa-power-off nav-icon "></i>
              <p>
                Keluar
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
