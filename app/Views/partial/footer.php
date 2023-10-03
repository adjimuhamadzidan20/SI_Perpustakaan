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
<!-- ChartJS -->
<!-- <script src="plugins/chart.js/Chart.min.js"></script> -->
<!-- Sparkline -->
<!-- <script src="plugins/sparklines/sparkline.js"></script> -->
<!-- JQVMap -->
<!-- <script src="plugins/jqvmap/jquery.vmap.min.js"></script> -->
<!-- <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<!-- <script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script> -->
<!-- Tempusdominus Bootstrap 4 -->
<!-- <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script> -->
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>

<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script> -->
<!-- <script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script> -->
<!-- <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script> -->
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

<script>
  $('#editmodalanggota').on('show.bs.modal', function (event) {
    // event.relatedtarget menampilkan elemen mana yang digunakan saat diklik.
    let button = $(event.relatedTarget)

    // data-data yang disimpan pada tombol edit dimasukkan ke dalam variabelnya masing-masing
    let id_anggota    = button.data('id') 
    let kode_anggota  = button.data('kode')
    let nama_anggota  = button.data('nama')
    let jenis_kelamin = button.data('jenkel')
    let tanggal_lahir = button.data('tgllahir')
    let alamat        = button.data('alamat')
    let modal = $(this)

    //variabel di atas dimasukkan ke dalam element yang sesuai dengan idnya masing-masing
    modal.find('#id').val(id_anggota)
    modal.find('#kode').val(kode_anggota)
    modal.find('#nama').val(nama_anggota)
    modal.find('#jenkel').val(jenis_kelamin)
    modal.find('#tgllahir').val(tanggal_lahir)
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
    modal.find('#penerbit').val(nama_penerbit)
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
    modal.find('#judul').val(judul_buku)
    modal.find('#pengarang').val(pengarang)
    modal.find('#penerbit').val(penerbit)
    modal.find('#tahun').val(tahun_terbit)
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
    modal.find('#judulbuku').val(judul_buku)
    modal.find('#anggota').val(anggota)
    modal.find('#tglpinjam').val(tgl_pinjam)
    modal.find('#tglkembali').val(tgl_kembali)
    modal.find('#keterlambatan').val(keterlambatan)
  })

</script>

<script type="text/javascript">
  let tabelAnggota = $('#anggota');
  let tabelPenerbit = $('#penerbit');
  let tabelBuku = $('#buku');
  let tabelPeminjam = $('#peminjam');

  $('#tampilkan').click(function() {
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

<?php if (session()->getFlashData('pesan')) : ?>
  <script type="text/javascript">
    toastr.success('<?= session()->getFlashData('pesan'); ?>')
  </script>
<?php endif; ?>

</body>
</html>