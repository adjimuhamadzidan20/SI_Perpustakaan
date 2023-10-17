</div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>SI PERPUSTAKAAN</strong> - 2023-2024
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>

<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>

<script>
  $(function () {
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<!-- modal hapus data -->
<script type="text/javascript">
  $(document).on('click', '.mdl-hapus-anggota', function(event) {
    event.preventDefault();
    let idAnggota = $(this).data('id');
    let namaAnggota = $(this).data('anggota');

    let textPesan = 'Yakin ingin menghapus '+ namaAnggota +'?';
    $('#pesan').html(textPesan);
    $('#idanggota').val(idAnggota);
  });

  $(document).on('click', '.mdl-hapus-penerbit', function(event) {
    event.preventDefault();
    let idPenerbit = $(this).data('id');
    let namaPenerbit = $(this).data('penerbit');

    let textPesan = 'Yakin ingin menghapus '+ namaPenerbit +'?';
    $('#pesan').html(textPesan);
    $('#idpenerbit').val(idPenerbit);
  });

  $(document).on('click', '.mdl-hapus-buku', function(event) {
    event.preventDefault();
    let idBuku = $(this).data('id');
    let namaBuku = $(this).data('judul');

    let textPesan = 'Yakin ingin menghapus '+ namaBuku +'?';
    $('#pesan').html(textPesan);
    $('#idbuku').val(idBuku);
  });

  $(document).on('click', '.mdl-hapus-peminjam', function(event) {
    event.preventDefault();
    let idPeminjam = $(this).data('id');
    let namaPeminjam = $(this).data('peminjam');

    let textPesan = 'Yakin ingin menghapus peminjam '+ namaPeminjam +'?';
    $('#pesan').html(textPesan);
    $('#idpeminjam').val(idPeminjam);
  });
</script>

<!-- modal edit data -->
<script>
  $('#editmodalanggota').on('show.bs.modal', function (event) {
    let button = $(event.relatedTarget)

    let id_anggota    = button.data('id') 
    let kode_anggota  = button.data('kode')
    let nama_anggota  = button.data('nama')
    let jenis_kelamin = button.data('jenkel')
    let tanggal_lahir = button.data('tgllahir')
    let alamat        = button.data('alamat')
    let modal = $(this)

    modal.find('#id').val(id_anggota)
    modal.find('#kode').val(kode_anggota)
    modal.find('#nama_anggota').val(nama_anggota)
    modal.find('#jenis_kelamin').val(jenis_kelamin)
    modal.find('#tgl_lahir').val(tanggal_lahir)
    modal.find('#alamat').val(alamat)
  })

  $('#editmodalpenerbit').on('show.bs.modal', function(event) {
    let button = $(event.relatedTarget)

    let id_penerbit   = button.data('id')
    let kode_penerbit = button.data('kode')
    let nama_penerbit = button.data('penerbit')
    let modal = $(this)

    modal.find('#id').val(id_penerbit)
    modal.find('#kode').val(kode_penerbit)
    modal.find('#nama_penerbit').val(nama_penerbit)
  })

  $('#modaleditbuku').on('show.bs.modal', function(event) {
    let button = $(event.relatedTarget)

    let id_buku = button.data('id')
    let kode_buku = button.data('kode')
    let judul_buku = button.data('judul')
    let pengarang = button.data('pengarang')
    let penerbit = button.data('penerbit')
    let tahun_terbit = button.data('tahun')
    let jumlah_buku = button.data('jumlah')
    let modal = $(this)

    modal.find('#id').val(id_buku)
    modal.find('#kode').val(kode_buku)
    modal.find('#judul_buku').val(judul_buku)
    modal.find('#nama_pengarang').val(pengarang)
    modal.find('#nama_penerbit').val(penerbit)
    modal.find('#tahun_terbit').val(tahun_terbit)
    modal.find('#jumlah').val(jumlah_buku)
  })

  $('#modaleditpeminjam').on('show.bs.modal', function(event) {
    let button = $(event.relatedTarget)

    let id_peminjam = button.data('id')
    let kode_pinjam = button.data('kode')
    let judul_buku = button.data('judulbuku')
    let anggota = button.data('anggota')
    let tgl_pinjam = button.data('tglpinjam')
    let tgl_kembali = button.data('tglkembali')
    let keterlambatan = button.data('keterlambatan')
    let modal = $(this)

    modal.find('#id').val(id_peminjam)
    modal.find('#kode').val(kode_pinjam)
    modal.find('#judul_buku').val(judul_buku)
    modal.find('#nama_anggota').val(anggota)
    modal.find('#tgl_pinjam').val(tgl_pinjam)
    modal.find('#tgl_kembali').val(tgl_kembali)
    modal.find('#keterlambatan').val(keterlambatan)
  })

</script>

<!-- menampilkan data laporan -->
<script type="text/javascript">
  let tabelAnggota = $('#anggota');
  let tabelPenerbit = $('#penerbit');
  let tabelBuku = $('#buku');
  let tabelPeminjam = $('#peminjam');

  $('#custom-button').click(function() {
    let pilihan = $('#laporan').val(); 

    if (pilihan === 'anggota') {
      tabelAnggota.show();
      tabelPenerbit.hide();
      tabelBuku.hide();
      tabelPeminjam.hide();
    }
    else if (pilihan === 'penerbit') {
      tabelAnggota.hide();
      tabelPenerbit.show();
      tabelBuku.hide();
      tabelPeminjam.hide();
    } 
    else if (pilihan === 'buku') {
      tabelAnggota.hide();
      tabelPenerbit.hide();
      tabelBuku.show();
      tabelPeminjam.hide();
    } 
    else if (pilihan === 'peminjam') {
      tabelAnggota.hide();
      tabelPenerbit.hide();
      tabelBuku.hide();
      tabelPeminjam.show();
    }
  });
</script>

<!-- pesan / alert popup -->
<?php if (session()->getFlashData('pesan')) : ?>
  <script type="text/javascript">
    toastr.success('<?= session()->getFlashData('pesan'); ?>')
  </script>
<?php endif; ?>

<script>
  let holdClick = false;

  document.addEventListener('mousedown', function() {
    const customButton = document.querySelectorAll('#custom-button');

    holdClick = true;
    for(let i = 0; i < customButton.length; i++) {
      customButton[i].style.backgroundColor = '#56173F'; // Ganti dengan warna latar belakang yang Anda inginkan
      customButton[i].style.borderColor = '#56173F'; // Ganti dengan warna latar belakang yang Anda inginkan
      customButton[i].style.color = 'white'; // Ganti dengan warna latar belakang yang Anda inginkan
    }

  });

  document.addEventListener('mouseup', function() {
    const customButton = document.querySelectorAll('#custom-button');

    if (holdClick) {
      for(let i = 0; i < customButton.length; i++) {
        customButton[i].style.backgroundColor = '#6F1E51'; // Kembalikan warna latar belakang awal
        customButton[i].style.borderColor = '#6F1E51'; // Kembalikan warna latar belakang awal 
      }

      holdClick = false; 
    }

  });
</script>

</body>
</html>