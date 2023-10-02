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
                  <h3 class="card-title">Data daftar nama penerbit</h3>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Penerbit</th>
                    <th>Nama Penerbit</th>
                    <th>Opsi</th>
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
                      <td>
                        <button class="btn btn-info btn-sm" 
                          data-toggle="modal" 
                          data-target="#editmodalpenerbit"
                          data-id="<?= $penerbit['id_penerbit']; ?>"
                          data-kode="<?= $penerbit['kode_penerbit']; ?>"
                          data-penerbit="<?= $penerbit['nama_penerbit']; ?>"
                          >Edit</button>

                        <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#hapus<?= $penerbit['id_penerbit']; ?>">Delete</button>

                        <!-- modal hapus data -->
                        <div class="modal fade" id="hapus<?= $penerbit['id_penerbit']; ?>">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Hapus data penerbit?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                <a href="/data_penerbit/deleteProses/<?= $penerbit['id_penerbit']; ?>" class="btn btn-info">Delete</a>
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
      <form action="/data_penerbit/tambah">
        <div class="modal-header">
          <h4 class="modal-title">Tambah data penerbit</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Penerbit</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Penerbit" name="penerbit">
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
<div class="modal fade" id="editmodalpenerbit">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form action="/data_penerbit/editProses">
        <div class="modal-header">
          <h4 class="modal-title">Edit data penerbit</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <div>
                <input type="text" class="form-control" name="id" id="id" hidden>
                <input type="text" class="form-control" name="kode" id="kode" hidden>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Penerbit</label>
                <input type="text" class="form-control" name="penerbit" id="penerbit">
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