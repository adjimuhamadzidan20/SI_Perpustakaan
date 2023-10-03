<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?= $title; ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= site_url(); ?>">Home</a></li>
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
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col d-flex justify-content-between align-items-center">
                  <h3 class="card-title">Pilih data yang ingin dicetak</h3>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <select class="form-control" aria-label="Default select example" id="laporan">
                <option selected>-- Pilih data laporan --</option>
                <option value="anggota" >Data Anggota</option>
                <option value="penerbit">Data Penerbit</option>
                <option value="buku">Data Buku</option>
                <option value="peminjam">Data Peminjaman</option>
              </select>

              <button type="button" class="btn btn-info btn-sm mt-3" id="tampilkan">Tampilkan</button>
            </div>
          </div>
        
          <div class="card" id="anggota" style="display: none;">
            <div class="card-header">
              <div class="row">
                <div class="col d-flex justify-content-between align-items-center">
                  <h3 class="card-title">Data Anggota</h3>
                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-lg">Cetak PDF</button>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered table-hover">
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
                    foreach ($dataAnggota as $anggota) : 
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
          <!-- /.card -->  

          <div class="card" id="penerbit" style="display: none;">
            <div class="card-header">
              <div class="row">
                <div class="col d-flex justify-content-between align-items-center">
                  <h3 class="card-title">Data Penerbit</h3>
                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-lg">Cetak PDF</button>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered table-hover">
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
                    foreach ($dataPenerbit as $penerbit) : 
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
          <!-- /.card -->  

          <div class="card" id="buku" style="display: none;">
            <div class="card-header">
              <div class="row">
                <div class="col d-flex justify-content-between align-items-center">
                  <h3 class="card-title">Data Buku</h3>
                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-lg">Cetak PDF</button>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered table-hover">
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
                    foreach ($dataBuku as $buku) : 
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
          <!-- /.card -->  

          <div class="card" id="peminjam" style="display: none;">
            <div class="card-header">
              <div class="row">
                <div class="col d-flex justify-content-between align-items-center">
                  <h3 class="card-title">Data Peminjaman</h3>
                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-lg">Cetak PDF</button>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered table-hover">
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
                    foreach ($dataPeminjam as $peminjam) : 
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
          <!-- /.card -->  
        </div>
        <!-- /.col -->
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>
  </div>
  <!-- /.content-wrapper -->