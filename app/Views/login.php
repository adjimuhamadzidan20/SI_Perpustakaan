<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SI Perpustakaan | Log in</title>

  <base href="<?= base_url('assets'); ?>/">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <style>
    .btn-primary {
      background-color: #6F1E51;
      border-color: #6F1E51;
      color: white;
    }

    .btn-primary:hover {
      background-color: #56173F;
      border-color: #56173F;
      color: white;
    }

    .custom-input:focus {
      border-color: #6F1E51;
    }

    .judul, .login-box-msg {
      color: black;
    }

  </style>

</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="<?= site_url('/login'); ?>" class="judul font-weight-bolder">SI PERPUSTAKAAN</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">ADMIN LOGIN</p>

        <!-- pesan / alert popup -->
        <?php if (session()->getFlashData('pesan')) : ?>
            <div class="alert alert-danger small" role="alert" id="pesan">
              <?= session()->getFlashData('pesan'); ?>
            </div>
        <?php endif; ?>

        <form action="/login/masuk" method="post">
          <div class="input mb-3">
            <label for="">Username</label>
            <input type="text" class="form-control custom-input" placeholder="Username" name="username" value="<?= session()->getFlashData('username'); ?>">
          </div>
          <div class="input mb-4">
            <label for="">Password</label>
            <input type="password" class="form-control custom-input" placeholder="Password" name="password">
          </div>
          <div class="row mb-3">
            <div class="col">
              <button type="submit" class="btn btn-primary btn-block" id="custom-button">Login</button>
            </div>
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>

  <script type="text/javascript">
    let popup = document.getElementById('pesan');
    if (popup.style.display = 'block') {
      setTimeout(function() {
        popup.style.opacity = '0'
        popup.style.transition = 'opacity 1s ease-in-out';
        setTimeout(function() {
            popup.style.display = 'none';
        }, 1000)
      }, 1000);
    }
  </script>

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
