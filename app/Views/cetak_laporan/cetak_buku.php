<body>
  <div style="width: 80%; margin: auto;">
    <div class="card-body">
      <h4 class="mb-3">Laporan Data Buku Perpustakaan</h4>  
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Jumlah Buku</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $no = 0; 
            foreach ($data as $buku) : 
            $no++;
          ?>
            <tr>
              <td><?= $no; ?></td>
              <td><?= $buku['kode']; ?></td>
              <td><?= $buku['judul_buku']; ?></td>
              <td><?= $buku['pengarang']; ?></td>
              <td><?= $buku['nama_penerbit']; ?></td>
              <td><?= $buku['tahun_terbit']; ?></td>
              <td><?= $buku['jumlah_buku']; ?></td>
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