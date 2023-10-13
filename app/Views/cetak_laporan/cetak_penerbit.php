<body>
  <div style="width: 80%; margin: auto;">
    <div class="card-body">
      <h4 class="mb-3">Laporan Data Penerbit Perpustakaan</h4>  
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode Penerbit</th>
            <th>Nama Penerbit</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $no = 0; 
            foreach ($data as $penerbit) : 
            $no++;
          ?>
            <tr>
              <td><?= $no; ?></td>
              <td><?= $penerbit['kode']; ?></td>
              <td><?= $penerbit['nama_penerbit']; ?></td>
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