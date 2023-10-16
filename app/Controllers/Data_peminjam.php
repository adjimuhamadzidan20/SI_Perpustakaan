<?php

namespace App\Controllers;
use App\Models\PeminjamanModel;

class Data_peminjam extends BaseController
{
    protected $modelPeminjam;

    public function __construct() {
        $this->modelPeminjam = new PeminjamanModel();
    }

    public function index()
    {
        $hasil = $this->modelPeminjam->dataPeminjam();
        $dtBuku = $this->modelPeminjam->judulBuku();
        $dtAnggota = $this->modelPeminjam->namaAnggota();

        $data = [
            'title' => 'Data Peminjaman',
            'activeMenu' => 'peminjam',
            'data' => $hasil,
            'buku' => $dtBuku,
            'anggota' => $dtAnggota
        ];

        echo view('partial/header', $data);
        echo view('partial/top_menu');
        echo view('partial/sidebar');
        echo view('peminjaman', $data);
        echo view('partial/footer');
    }

    public function tambah() {
        $kodePinjam = 'PMPSI';
        $judulBuku = $this->request->getPost('judul_buku');
        $namaAnggota = $this->request->getPost('nama_anggota');
        $tglPinjam = $this->request->getPost('tgl_pinjam');
        $tglKembali = $this->request->getPost('tgl_kembali');
        $keterlambatan = $this->request->getPost('keterlambatan');

        $this->modelPeminjam->addPeminjam($kodePinjam, $judulBuku, $namaAnggota, $tglPinjam, $tglKembali, $keterlambatan);
        session()->setFlashData('pesan', 'Data peminjam berhasil tersimpan!');
        return redirect()->to('/data_peminjam');
    }

    public function editProses() {
        $id = $this->request->getPost('id');
        $kodePinjam = $this->request->getPost('kode');
        $judulBuku = $this->request->getPost('judul_buku');
        $namaAnggota = $this->request->getPost('nama_anggota');
        $tglPinjam = $this->request->getPost('tgl_pinjam');
        $tglKembali = $this->request->getPost('tgl_kembali');
        $keterlambatan = $this->request->getPost('keterlambatan');

        $this->modelPeminjam->editPeminjam($id, $kodePinjam, $judulBuku, $namaAnggota, $tglPinjam, $tglKembali, $keterlambatan);
        session()->setFlashData('pesan', 'Data peminjam berhasil terupdate!');
        return redirect()->to('/data_peminjam');
    }

    public function deleteProses() {
        $id = $this->request->getPost('idpeminjam');
        $this->modelPeminjam->hapusPeminjam($id);
        session()->setFlashData('pesan', 'Data peminjam berhasil terhapus!');
        return redirect()->to('/data_peminjam');
    }

    public function cetak_peminjam() {
        $hasil = $this->modelPeminjam->dataPeminjam();

        $data = [
            'title' => 'Cetak Laporan Peminjaman',
            'data' => $hasil
        ];

        echo view('partial/header', $data);
        echo view('cetak_laporan/cetak_peminjaman', $data);
        echo view('partial/footer_cetak');
    }
}
