<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="nama-halaman m-0"><i class="fas fa-briefcase mr-2"></i><?= $title; ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= site_url(); ?>" class="link-bread">Home</a></li>
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
                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-lg" id="custom-button">Tambah +</button>
                  <h3 class="card-title d-none d-sm-block">Data daftar peminjam buku perpustakaan</h3>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th nowrap="nowrap">No</th>
                    <th nowrap="nowrap">Kode Pinjam</th>
                    <th nowrap="nowrap">Judul Buku</th>
                    <th nowrap="nowrap">Nama Anggota</th>
                    <th nowrap="nowrap">Tanggal Pinjam</th>
                    <th nowrap="nowrap">Tanggal Kembali</th>
                    <th nowrap="nowrap">Keterlambatan</th>
                    <th nowrap="nowrap">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $no = 0; 
                    foreach ($data as $peminjam) : 
                    $no++;
                  ?>
                    <tr>
                      <td nowrap="nowrap"><?= $no; ?></td>
                      <td nowrap="nowrap"><?= $peminjam['kode']; ?></td>
                      <td nowrap="nowrap"><?= $peminjam['judul_buku']; ?></td>
                      <td nowrap="nowrap"><?= $peminjam['nama_anggota']; ?></td>
                      <td nowrap="nowrap"><?= $peminjam['tanggal_pinjam']; ?></td>
                      <td nowrap="nowrap"><?= $peminjam['tanggal_kembali']; ?></td>
                      <td nowrap="nowrap"><?= $peminjam['keterlambatan']; ?></td>
                      <td class="text-center" nowrap="nowrap">
                        <button type="button" class="btn btn-info btn-sm"
                          id="custom-button" 
                          data-toggle="modal" 
                          data-target="#modaleditpeminjam"
                          data-id="<?= $peminjam['id_peminjam']; ?>"
                          data-kode="<?= $peminjam['kode']; ?>"
                          data-judulbuku="<?= $peminjam['id_buku']; ?>"
                          data-anggota="<?= $peminjam['id_anggota']; ?>"
                          data-tglpinjam="<?= $peminjam['tanggal_pinjam']; ?>"
                          data-tglkembali="<?= $peminjam['tanggal_kembali']; ?>"
                          data-keterlambatan="<?= $peminjam['keterlambatan']; ?>"
                          title="Edit"
                        ><i class="fas fa-edit"></i></button>

                        <button type="button" class="mdl-hapus-peminjam btn btn-info btn-sm" 
                          data-toggle="modal"
                          data-target="#hapusmodalpeminjam" 
                          id="custom-button" 
                          title="Hapus"
                          data-id="<?= $peminjam['id_peminjam']; ?>"
                          data-peminjam="<?= $peminjam['nama_anggota']; ?>"
                        ><i class="fas fa-trash"></i></button>
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

<!-- modal hapus data -->
<div class="modal fade" id="hapusmodalpeminjam">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fas fa-trash mr-2"></i>Hapus data peminjam</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/data_peminjam/deleteProses" method="post">
        <div class="modal-body">
          <p id="pesan"></p>
          <input type="hidden" name="idpeminjam" id="idpeminjam">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-info" id="custom-button">Delete</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

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
      <form action="/data_peminjam/tambah" method="post">
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Judul Buku</label>
                <select class="form-control custom-input" aria-label="Default select example" name="judul_buku" required="required">
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
                <select class="form-control custom-input" aria-label="Default select example" name="nama_anggota" required="required">
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
                <input type="date" class="form-control custom-input" id="exampleFormControlInput1" name="tgl_pinjam" required="required">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Kembali</label>
                <input type="date" class="form-control custom-input" id="exampleFormControlInput1" name="tgl_kembali" required="required">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Keterlambatan</label>
                <select class="form-control custom-input" aria-label="Default select example" name="keterlambatan" required="required">
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
          <button type="submit" class="btn btn-info" id="custom-button">Simpan</button>
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
      <form action="/data_peminjam/editProses" method="post">
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <div>
                <input type="text" class="form-control" id="id" name="id" hidden>
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" id="kode" name="kode" readonly>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Judul Buku</label>
                <select class="form-control custom-input" aria-label="Default select example" id="judul_buku" name="judul_buku" required="required">
                  <?php
                    foreach ($buku as $judulBuku) : 
                  ?>
                    <option value="<?= $judulBuku['id_buku']; ?>"><?= $judulBuku['judul_buku']; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Anggota</label>
                <select class="form-control custom-input" aria-label="Default select example" id="nama_anggota" name="nama_anggota" required="required">
                  <?php
                    foreach ($anggota as $nama) : 
                  ?>
                    <option value="<?= $nama['id_anggota']; ?>"><?= $nama['nama_anggota']; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Pinjam</label>
                <input type="date" class="form-control custom-input" id="tgl_pinjam" name="tgl_pinjam" required="required">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Kembali</label>
                <input type="date" class="form-control custom-input" id="tgl_kembali" name="tgl_kembali" required="required">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Keterlambatan</label>
                <select class="form-control custom-input" aria-label="Default select example" id="keterlambatan" name="keterlambatan" required="required">
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
          <button type="submit" class="btn btn-info" id="custom-button">Edit</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->