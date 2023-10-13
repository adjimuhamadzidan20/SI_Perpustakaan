<body>
  <div style="width: 80%; margin: auto;">
    <div class="card-body">
      <h4 class="mb-3">Laporan Data Peminjaman Perpustakaan</h4>  
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
  </div>
</body>

<script type="text/javascript">
  window.print();
</script>