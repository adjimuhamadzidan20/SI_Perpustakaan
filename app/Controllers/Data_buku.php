<?php

namespace App\Controllers;
use App\Models\KoleksibukuModel;

class Data_buku extends BaseController
{
    protected $modelBuku;

    public function __construct() {
        $this->modelBuku = new KoleksibukuModel();
    }

    public function index()
    { 
        $hasil = $this->modelBuku->dataBuku();
        $penerbit = $this->modelBuku->dataPenerbit();

        $data = [
            'title' => 'Data Buku',
            'activeMenu' => 'buku',
            'data' => $hasil,
            'penerbit' => $penerbit
        ];

        echo view('partial/header', $data);
        echo view('partial/top_menu');
        echo view('partial/sidebar');
        echo view('katalog_buku', $data);
        echo view('partial/footer');
    }

    public function tambah() {
        $kode = 'BPS';
        $judulBuku = $this->request->getPost('judul_buku');
        $pengarang = $this->request->getPost('nama_pengarang');
        $penerbit = $this->request->getPost('nama_penerbit');
        $tahun = $this->request->getPost('tahun_terbit');
        $jumlah = $this->request->getPost('jumlah');

        $this->modelBuku->addBuku($kode, $judulBuku, $pengarang, $penerbit, $tahun, $jumlah);
        session()->setFlashData('pesan', 'Data buku berhasil tersimpan!');
        return redirect()->to('/data_buku');
    }

    public function editProses() {
        $id = $this->request->getVar('id');
        $kode = $this->request->getVar('kode');
        $judulBuku = $this->request->getVar('judul_buku');
        $pengarang = $this->request->getVar('nama_pengarang');
        $penerbit = $this->request->getVar('nama_penerbit');
        $tahun = $this->request->getVar('tahun_terbit');
        $jumlah = $this->request->getVar('jumlah');

        $this->modelBuku->editBuku($id, $kode, $judulBuku, $pengarang, $penerbit, $tahun, $jumlah);
        session()->setFlashData('pesan', 'Data buku berhasil terupdate!');
        return redirect()->to('/data_buku');
    }

    public function deleteProses($id) {
        $this->modelBuku->hapusBuku($id);
        session()->setFlashData('pesan', 'Data buku berhasil terhapus!');
        return redirect()->to('/data_buku');
    }

    public function cetak_buku() {
        $hasil = $this->modelBuku->dataBuku();

        $data = [
            'title' => 'Cetak Laporan Buku',
            'data' => $hasil
        ];

        echo view('partial/header', $data);
        echo view('cetak_laporan/cetak_buku', $data);
        echo view('partial/footer_cetak');
    }
}
