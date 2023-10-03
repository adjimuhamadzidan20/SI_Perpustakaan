  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle" style="opacity: .8">
      <span class="brand-text font-weight-light h5">SI PERPUSTAKAAN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= site_url('dashboard'); ?>" class="nav-link <?php if ($activeMenu == 'dashboard') { echo 'active bg-secondary'; } ?>">
              <i class="far fa-circle nav-icon"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('data_anggota'); ?>" class="nav-link <?php if ($activeMenu == 'anggota') { echo 'active bg-secondary'; } ?>">
              <i class="far fa-circle nav-icon"></i>
              <p>Data Anggota</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('data_penerbit'); ?>" class="nav-link <?php if ($activeMenu == 'penerbit') { echo 'active bg-secondary'; } ?>">
              <i class="far fa-circle nav-icon"></i>
              <p>Data Penerbit</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('data_buku'); ?>" class="nav-link <?php if ($activeMenu == 'buku') { echo 'active bg-secondary'; } ?>">
              <i class="far fa-circle nav-icon"></i>
              <p>Data Buku</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('data_peminjam'); ?>" class="nav-link <?php if ($activeMenu == 'peminjam') { echo 'active bg-secondary'; } ?>">
              <i class="far fa-circle nav-icon"></i>
              <p>Data Peminjaman</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('data_laporan'); ?>" class="nav-link <?php if ($activeMenu == 'laporan') { echo 'active bg-secondary'; } ?>">
              <i class="far fa-circle nav-icon"></i>
              <p>Cetak Laporan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>