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
                  <h3 class="card-title">Data daftar anggota perpustakaan</h3>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Anggota</th>
                    <th>Nama Anggota</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal lahir</th>
                    <th>Alamat</th>
                    <th>Opsi</th>
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
                      <td class="text-center">
                        <button class="btn btn-info btn-sm" 
                          data-toggle="modal" 
                          data-target="#editmodalanggota"
                          data-id="<?= $anggota['id_anggota']; ?>"
                          data-kode="<?= $anggota['kode_anggota']; ?>"
                          data-nama="<?= $anggota['nama_anggota']; ?>" 
                          data-jenkel="<?= $anggota['jenis_kelamin']; ?>" 
                          data-tgllahir="<?= $anggota['tanggal_lahir']; ?>" 
                          data-alamat="<?= $anggota['alamat']; ?>" 
                        >Edit</button>

                        <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#hapus<?= $anggota['id_anggota']; ?>">Delete</button>

                        <!-- modal hapus data -->
                        <div class="modal fade" id="hapus<?= $anggota['id_anggota']; ?>">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Hapus data anggota?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                <a href="/data_anggota/deleteProses/<?= $anggota['id_anggota']; ?>" class="btn btn-info">Delete</a>
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
  </div>
  <!-- /.content-wrapper -->

<!-- modal tambah data -->
<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah data anggota</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/data_anggota/tambah">
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Anggota</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Anggota" name="nama_anggota">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                <select class="form-control" aria-label="Default select example" name="jeniskelamin">
                  <option selected>-- Pilih jenis kelamin --</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" name="tgl_lahir">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Alamat" name="alamat">
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
<div class="modal fade" id="editmodalanggota">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit data anggota</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/data_anggota/editProses">
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <div>
                <input type="text" class="form-control" name="id" id="id" hidden>
                <input type="text" class="form-control" name="kode" id="kode" hidden>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Anggota</label>
                <input type="text" class="form-control" name="nama" id="nama">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                <select class="form-control" aria-label="Default select example" name="jenkel" id="jenkel">
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgllahir" id="tgllahir">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat">
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

