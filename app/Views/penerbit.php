<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="nama-halaman m-0"><i class="fas fa-clipboard mr-2"></i><?= $title; ?></h1>
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
                  <h3 class="card-title d-none d-sm-block">Data daftar nama penerbit</h3>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th nowrap="nowrap">No</th>
                    <th nowrap="nowrap">Kode Penerbit</th>
                    <th nowrap="nowrap">Nama Penerbit</th>
                    <th nowrap="nowrap">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $no = 0; 
                    foreach ($data as $penerbit) : 
                    $no++;
                  ?>
                    <tr>
                      <td nowrap="nowrap"><?= $no; ?></td>
                      <td nowrap="nowrap"><?= $penerbit['kode']; ?></td>
                      <td nowrap="nowrap"><?= $penerbit['nama_penerbit']; ?></td>
                      <td class="text-center" nowrap="nowrap">
                        <button type="button" class="btn btn-info btn-sm"
                          id="custom-button" 
                          data-toggle="modal" 
                          data-target="#editmodalpenerbit"
                          data-id="<?= $penerbit['id_penerbit']; ?>"
                          data-kode="<?= $penerbit['kode']; ?>"
                          data-penerbit="<?= $penerbit['nama_penerbit']; ?>"
                          title="Edit"
                          ><i class="fas fa-edit"></i></button>

                        <button type="button" class="mdl-hapus-penerbit btn btn-info btn-sm" 
                          data-toggle="modal" 
                          data-target="#hapusmodalpenerbit" 
                          id="custom-button" 
                          title="Hapus"
                          data-id="<?= $penerbit['id_penerbit']; ?>"
                          data-penerbit="<?= $penerbit['nama_penerbit']; ?>"
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
<div class="modal fade" id="hapusmodalpenerbit">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fas fa-trash mr-2"></i>Hapus data penerbit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/data_penerbit/deleteProses" method="post">
        <div class="modal-body">
          <p id="pesan"></p>
          <input type="hidden" name="idpenerbit" id="idpenerbit">
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
      <form action="/data_penerbit/tambah" method="post">
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
                <input type="text" class="form-control custom-input" id="exampleFormControlInput1" placeholder="Masukkan Nama Penerbit" name="nama_penerbit" required="required">
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
<div class="modal fade" id="editmodalpenerbit">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form action="/data_penerbit/editProses" method="post">
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
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" name="kode" id="kode" readonly>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Penerbit</label>
                <input type="text" class="form-control custom-input" name="nama_penerbit" id="nama_penerbit" required="required">
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