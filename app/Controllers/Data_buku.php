<?php

namespace App\Controllers;
use App\Models\KoleksibukuModel;

class Data_buku extends BaseController
{
    public function index()
    {
        $modelBuku = new KoleksibukuModel();
        $hasil = $modelBuku->dataBuku();
        $penerbit = $modelBuku->dataPenerbit();

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
        $modelBuku = new KoleksibukuModel();

        $kode = 'BPS';
        $judulBuku = $this->request->getVar('judul');
        $pengarang = $this->request->getVar('pengarang');
        $penerbit = $this->request->getVar('penerbit');
        $tahun = $this->request->getVar('tahun');
        $jumlah = $this->request->getVar('jumlah');

        $modelBuku = $modelBuku->addBuku($kode, $judulBuku, $pengarang, $penerbit, $tahun, $jumlah);
        return redirect()->to('/data_buku');
    }

    public function editProses() {
        $modelBuku = new KoleksibukuModel();

        $id = $this->request->getVar('id');
        $kode = $this->request->getVar('kode');
        $judulBuku = $this->request->getVar('judul');
        $pengarang = $this->request->getVar('pengarang');
        $penerbit = $this->request->getVar('penerbit');
        $tahun = $this->request->getVar('tahun');
        $jumlah = $this->request->getVar('jumlah');

        $modelBuku = $modelBuku->editBuku($id, $kode, $judulBuku, $pengarang, $penerbit, $tahun, $jumlah);
        return redirect()->to('/data_buku');
    }

    public function deleteProses($id) {
        $modelBuku = new KoleksibukuModel();

        $modelBuku->hapusBuku($id);
        return redirect()->to('/data_buku');
    }
}
