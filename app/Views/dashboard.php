<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?= $title; ?></h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= site_url(); ?>" class="link-bread">Home</a></li>
            <li class="breadcrumb-item active"><?= $title; ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Anggota</span>
              <span class="info-box-number"><?= $dataAnggota; ?> Data</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-clipboard"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Penerbit</span>
              <span class="info-box-number"><?= $dataPenerbit; ?> Data</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-book"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Koleksi Buku</span>
              <span class="info-box-number"><?= $dataBuku; ?> Data</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-briefcase"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Peminjaman</span>
              <span class="info-box-number"><?= $dataPeminjam; ?> Data</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  
