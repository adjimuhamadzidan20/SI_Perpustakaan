<body>
  <div style="width: 80%; margin: auto;">
    <div class="card-body">
      <h4 class="mb-3">Laporan Data Anggota Perpustakaan</h4>  
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
  </div>
</body>

<script type="text/javascript">
  window.print();
</script>