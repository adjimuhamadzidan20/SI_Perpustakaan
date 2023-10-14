  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light justify-content-between">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-flex align-items-center">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel d-flex">
          <div class="image">
            <img src="dist/img/user_icon.png" class="img-circle" alt="User Image">
          </div>
          <div class="info">
            <span class="d-none d-sm-block"><?= session()->get('nama_admin'); ?></span>
          </div>
        </div>
      </li>
    </ul>
    <div class="d-flex align-items-center px-2">
      <span><i class="fas fa-user mr-2"></i>Administrator</span>
    </div>
  </nav>
  <!-- /.navbar -->