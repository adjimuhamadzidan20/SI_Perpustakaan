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
                  <h3 class="card-title">Data daftar buku-buku perpustakaan</h3>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Buku</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Jumlah Buku</th>
                    <th>Opsi</th>
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
                      <td class="text-center">
                        <button type="button" class="btn btn-info btn-sm" 
                          data-toggle="modal" 
                          data-target="#modaleditbuku"
                          data-id="<?= $buku['id_buku']; ?>",
                          data-kode="<?= $buku['kode_buku']; ?>",
                          data-judul="<?= $buku['judul_buku']; ?>",
                          data-pengarang="<?= $buku['pengarang']; ?>",
                          data-penerbit="<?= $buku['id_penerbit']; ?>",
                          data-tahun="<?= $buku['tahun_terbit']; ?>",
                          data-jumlah="<?= $buku['jumlah_buku']; ?>"
                        >Edit</button>

                        <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#hapus<?= $buku['id_buku']; ?>">Delete</button>

                        <!-- modal hapus data -->
                        <div class="modal fade" id="hapus<?= $buku['id_buku']; ?>">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Hapus data buku?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                <a href="/data_buku/deleteProses/<?= $buku['id_buku']; ?>" class="btn btn-info">Delete</a>
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
        <h4 class="modal-title">Tambah data buku</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/data_buku/tambah">
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Judul Buku" name="judul">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Pengarang</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Pengarang" name="pengarang">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Penerbit</label>
                <select class="form-control" aria-label="Default select example" name="penerbit">
                  <option selected="selected" readonly="readonly">-- Pilih penerbit --</option>
                  <?php foreach ($penerbit as $namaPenerbit) : ?>
                    <option value="<?= $namaPenerbit['id_penerbit']; ?>"><?= $namaPenerbit['nama_penerbit']; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tahun Terbit</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Format Tahun (contoh 2010)" name="tahun">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Jumlah Buku</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Jumlah Dengan Angka" name="jumlah">
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
<div class="modal fade" id="modaleditbuku">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit data buku</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/data_buku/editProses">
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <div>
                <input type="text" class="form-control" id="id" name="id" hidden>
                <input type="text" class="form-control" id="kode" name="kode" hidden>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" id="judul" name="judul">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Pengarang</label>
                <input type="text" class="form-control" id="pengarang" name="pengarang">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Penerbit</label>
                <select class="form-control" aria-label="Default select example" id="penerbit" name="penerbit">
                  <?php foreach ($penerbit as $namaPenerbit) : ?>
                    <option value="<?= $namaPenerbit['id_penerbit']; ?>"><?= $namaPenerbit['nama_penerbit']; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tahun Terbit</label>
                <input type="text" class="form-control" id="tahun" name="tahun">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Jumlah Buku</label>
                <input type="text" class="form-control" id="jumlah" name="jumlah">
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