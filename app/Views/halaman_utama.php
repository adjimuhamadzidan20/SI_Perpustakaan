<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SI Perpustakaan</title>

  <base href="<?= base_url('assets'); ?>/">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

  <style>
    .navbar  {
      background-color: #6F1E51;
    }

    .navbar-brand, .nav-link {
      color: white;
    }

    .navbar-brand:hover, .nav-link:hover {
      color: #ECEAEA;
    }

    .cari-buku {
      width: 75%;
      margin-bottom: 8rem;
    }

    .custom-input:focus {
      border-color: #6F1E51;
      box-shadow: none;
    }

    .btn-hold-click {
      background-color: #6F1E51;
      border-color: #6F1E51;
      color: white;
    }

    .btn-hold-click:hover {
      background-color: #56173F;
      border-color: #56173F;
      color: white;
    }

    .pagination .page-item.active a.page-link {
      background-color: #6F1E51 !important;
      border-color: #6F1E51 !important;
    }

    .pagination a.page-link {
      color: #6F1E51;
    }

    .pagination .page-link:hover, .pagination .page-link:focus {
      color: white !important;
      background-color: #6F1E51;
      border-color: #6F1E51;
      box-shadow: none;
    }  

    @media screen and (max-width: 425px) {
      .cari-buku {
        width: 100%;
      }
    }

  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
    <div class="container px-3 px-sm-0">
      <a class="navbar-brand" href="<?= site_url('halaman_utama'); ?>">
        <img src="dist/img/AdminLTELogo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top mr-2">
        SI PERPUSTAKAAN
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?= site_url('/login'); ?>">Admin Login<i class="fas fa-user nav-icon ml-2 mt-3 mt-lg-0"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mx-auto cari-buku">
    <div class="kolom-pencarian" style="margin-top: 10rem;">
      <h4 class="mb-3">Cari Koleksi Buku</h4>
      <form method="get">
        <div class="row">
          <div class="col-12 col-sm-10">
            <div class="mb-3">
              <input type="text" class="form-control custom-input" id="exampleFormControlInput1" placeholder="Cari Judul.." name="keyword">
            </div>
          </div>
          <div class="col col-sm-2">
            <button type="submit" class="btn btn-hold-click w-100" name="cari" id="custom-button">Cari</button>
          </div>
        </div>
      </form>
    </div>

    <?php 
    if (isset($_GET['cari'])) { 
      $key = $_GET['keyword'];
      $hasil = [];

      foreach ($data as $buku) {
        if (stripos($buku['judul_buku'], $key) !== false || stripos($buku['pengarang'], $key) !== false || stripos((string)$buku['tahun_terbit'], $key) !== false) {
          $hasil[] = $buku;
        }
      }

      // Tampilkan atau sembunyikan tabel header berdasarkan hasil pencarian
      if (empty($hasil)) {
          echo '<style>#tabelbuku { display: none; }</style>';
      } else {
          echo '<style>#tabelbuku { display: block; }</style>';
      }
    ?>
      <div id="tabelbuku" class="mt-3">
        <!-- /.card-header -->
        <div class="card-body table-responsive">
          <table id="example2" class="table table-hover" width="100%">
            <thead>
              <tr>
                <th nowrap="nowrap">No</th>
                <th nowrap="nowrap">Judul Buku</th>
                <th nowrap="nowrap">Pengarang</th>
                <th nowrap="nowrap">Tahun Terbit</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 1 + (3 * ($page - 1));
                foreach ($hasil as $datBuku) {
              ?>
                <tr>
                  <td nowrap="nowrap"><?= $no++; ?></td>
                  <td nowrap="nowrap"><?= $datBuku['judul_buku']; ?></td>
                  <td nowrap="nowrap"><?= $datBuku['pengarang']; ?></td>
                  <td nowrap="nowrap"><?= $datBuku['tahun_terbit']; ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer mt-2">
          <?php 
            $paginasi = $pager->links('buku', 'paginasi_buku');
            echo $paginasi;
          ?>
        </div>
      </div>
    <?php } ?>
    
  </div>

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>

  <script>
    const customButton = document.getElementById('custom-button');
    let holdClick = false;

    customButton.addEventListener('mousedown', function() {
      holdClick = true;
      customButton.style.backgroundColor = '#56173F'; // Ganti dengan warna latar belakang yang Anda inginkan
      customButton.style.borderColor = '#56173F'; // Ganti dengan warna latar belakang yang Anda inginkan
      customButton.style.color = 'white'; // Ganti dengan warna latar belakang yang Anda inginkan
    });

    customButton.addEventListener('mouseup', function() {
      if (holdClick) {
        customButton.style.backgroundColor = '#6F1E51'; // Kembalikan warna latar belakang awal
        customButton.style.borderColor = '#6F1E51'; // Kembalikan warna latar belakang awal
        holdClick = false;
      }
    });
  </script>
</body>
</html>
