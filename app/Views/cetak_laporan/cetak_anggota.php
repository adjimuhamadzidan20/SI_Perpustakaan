<?php  
  setlocale(LC_ALL, 'id-ID', 'id_ID');
  $tgl1 = strftime("%A, %d %B %Y | %T");
  $tgl2 = strftime("%d %B %Y");
?>

<body>
  <div style="width: 80%; margin: auto;">
    <div class="card-header" style="border-bottom: 2px solid black; padding-bottom: 5px;">
      <h1>SI Perpustakaan</h1>    
    </div>
    <div class="card-body">
      <h5 class="mb-2">Laporan Data Anggota Perpustakaan</h5>
      <p class="mb-3"><?= $tgl1; ?></p>  
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode Anggota</th>
            <th>Nama Anggota</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal lahir</th>
            <th>Alamat</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $no = 0; 
            foreach ($data as $anggota) : 
            $no++;
          ?>
            <tr>
              <td><?= $no; ?></td>
              <td><?= $anggota['kode']; ?></td>
              <td><?= $anggota['nama_anggota']; ?></td>
              <td><?= $anggota['jenis_kelamin']; ?></td>
              <td><?= $anggota['tanggal_lahir']; ?></td>
              <td><?= $anggota['alamat']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer" style="text-align: right; margin-top:40px; background-color: white;">
      <p>Kota Bekasi, <?= $tgl2; ?></p>
      <p style="margin-right: 25px;">Admin Perpustakaan</p>
      <br><br>
      <p style="margin-right: 27px;">..................................</p>
    </div>
  </div>
</body>

<script type="text/javascript">
  window.print();
</script>