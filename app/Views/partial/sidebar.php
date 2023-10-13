  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle">
      <span class="brand-text font-weight-normal h5">SI PERPUSTAKAAN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= site_url('dashboard'); ?>" class="nav-link linkmenu <?php if ($activeMenu == 'dashboard') { echo 'active bg-secondary'; } ?>">
              <i class="fas fa-tachometer-alt nav-icon"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('data_anggota'); ?>" class="nav-link linkmenu <?php if ($activeMenu == 'anggota') { echo 'active bg-secondary'; } ?>">
              <i class="fas fa-users nav-icon"></i>
              <p>Data Anggota</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('data_penerbit'); ?>" class="nav-link linkmenu <?php if ($activeMenu == 'penerbit') { echo 'active bg-secondary'; } ?>">
              <i class="fas fa-clipboard nav-icon"></i>
              <p>Data Penerbit</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('data_buku'); ?>" class="nav-link linkmenu <?php if ($activeMenu == 'buku') { echo 'active bg-secondary'; } ?>">
              <i class="fas fa-book nav-icon"></i>
              <p>Data Buku</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('data_peminjam'); ?>" class="nav-link linkmenu <?php if ($activeMenu == 'peminjam') { echo 'active bg-secondary'; } ?>">
              <i class="fas fa-briefcase nav-icon"></i>
              <p>Data Peminjaman</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('data_laporan'); ?>" class="nav-link linkmenu <?php if ($activeMenu == 'laporan') { echo 'active bg-secondary'; } ?>">
              <i class="fas fa-print nav-icon"></i>
              <p>Cetak Laporan</p>
            </a>
          </li>
          <li class="nav-item">
            <a data-toggle="modal" data-target="#logout" class="nav-link linkmenu">
              <i class="fas fa-power-off nav-icon"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- modal hapus data -->
  <div class="modal fade" id="logout">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><i class="fas fa-power-off mr-2"></i>Keluar dari dashboard?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <a href="<?= site_url('login/logout'); ?>" class="btn btn-info">Logout</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->