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
      <h5 class="mb-2">Laporan Data Peminjaman Perpustakaan</h5>
      <p class="mb-3"><?= $tgl1; ?></p>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode Pinjam</th>
            <th>Judul Buku</th>
            <th>Nama Anggota</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Keterlambatan</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $no = 0; 
            foreach ($data as $peminjam) : 
            $no++;
          ?>
            <tr>
              <td><?= $no; ?></td>
              <td><?= $peminjam['kode']; ?></td>
              <td><?= $peminjam['judul_buku']; ?></td>
              <td><?= $peminjam['nama_anggota']; ?></td>
              <td><?= $peminjam['tanggal_pinjam']; ?></td>
              <td><?= $peminjam['tanggal_kembali']; ?></td>
              <td><?= $peminjam['keterlambatan']; ?></td>
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