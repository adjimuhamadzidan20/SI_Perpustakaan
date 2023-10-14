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
      <h5 class="mb-2">Laporan Data Penerbit Perpustakaan</h5>
      <p class="mb-3"><?= $tgl1; ?></p>  
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