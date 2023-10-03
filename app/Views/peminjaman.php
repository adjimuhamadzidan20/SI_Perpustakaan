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
                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-lg">Tambah +</button>
                  <h3 class="card-title">Data daftar peminjam buku perpustakaan</h3>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Pinjam</th>
                    <th>Judul Buku</th>
                    <th>Nama Anggota</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Keterlambatan</th>
                    <th>Opsi</th>
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
                      <td class="text-center">
                        <button class="btn btn-info btn-sm" 
                          data-toggle="modal" 
                          data-target="#modaleditpeminjam"
                          data-id="<?= $peminjam['id_peminjam']; ?>",
                          data-kode="<?= $peminjam['kode_pinjam']; ?>",
                          data-judulbuku="<?= $peminjam['id_buku']; ?>",
                          data-anggota="<?= $peminjam['id_anggota']; ?>",
                          data-tglpinjam="<?= $peminjam['tanggal_pinjam']; ?>",
                          data-tglkembali="<?= $peminjam['tanggal_kembali']; ?>",
                          data-keterlambatan="<?= $peminjam['keterlambatan']; ?>"
                        >Edit</button>

                        <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#hapus<?= $peminjam['id_peminjam']; ?>">Delete</button>

                        <!-- modal hapus data -->
                        <div class="modal fade" id="hapus<?= $peminjam['id_peminjam']; ?>">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Hapus data peminjam?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                <a href="/data_peminjam/deleteProses/<?= $peminjam['id_peminjam']; ?>" class="btn btn-info">Delete</a>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </td>
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

<!-- modal tambah data -->
<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah data peminjam</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/data_peminjam/tambah">
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Judul Buku</label>
                <select class="form-control" aria-label="Default select example" name="judulbuku">
                  <option selected>-- Pilih judul buku --</option>
                  <?php
                    foreach ($buku as $judulBuku) : 
                  ?>
                    <option value="<?= $judulBuku['id_buku']; ?>"><?= $judulBuku['judul_buku']; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Anggota</label>
                <select class="form-control" aria-label="Default select example" name="anggota">
                  <option selected>-- Pilih nama anggota --</option>
                  <?php
                    foreach ($anggota as $nama) : 
                  ?>
                    <option value="<?= $nama['id_anggota']; ?>"><?= $nama['nama_anggota']; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Pinjam</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" name="tglpinjam">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Kembali</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" name="tglkembali">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Keterlambatan</label>
                <select class="form-control" aria-label="Default select example" name="keterlambatan">
                  <option selected>-- Keterlambatan --</option>
                  <?php for ($i=0; $i <= 31; $i++) : ?>
                    <option value="<?= $i . ' Hari'; ?>"><?= $i . ' Hari'; ?></option>
                  <?php endfor; ?>
                </select>
              </div>
            </div>
          </div>              
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-info">Simpan</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- modal edit data -->
<div class="modal fade" id="modaleditpeminjam">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit data peminjam</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/data_peminjam/editProses">
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <div>
                <input type="text" class="form-control" id="id" name="id" hidden>
                <input type="text" class="form-control" id="kode" name="kode" hidden>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Judul Buku</label>
                <select class="form-control" aria-label="Default select example" id="judulbuku" name="judulbuku">
                  <?php
                    foreach ($buku as $judulBuku) : 
                  ?>
                    <option value="<?= $judulBuku['id_buku']; ?>"><?= $judulBuku['judul_buku']; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Anggota</label>
                <select class="form-control" aria-label="Default select example" id="anggota" name="anggota">
                  <?php
                    foreach ($anggota as $nama) : 
                  ?>
                    <option value="<?= $nama['id_anggota']; ?>"><?= $nama['nama_anggota']; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Pinjam</label>
                <input type="date" class="form-control" id="tglpinjam" name="tglpinjam">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Kembali</label>
                <input type="date" class="form-control" id="tglkembali" name="tglkembali">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Keterlambatan</label>
                <select class="form-control" aria-label="Default select example" id="keterlambatan" name="keterlambatan">
                  <?php for ($i=0; $i <= 31; $i++) : ?>
                    <option value="<?= $i . ' Hari'; ?>"><?= $i . ' Hari'; ?></option>
                  <?php endfor; ?>
                </select>
              </div>
            </div>
          </div>              
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-info">Edit</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->