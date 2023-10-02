<?php

namespace App\Controllers;
use App\Models\PeminjamanModel;

class Data_peminjam extends BaseController
{
    public function index()
    {
        $modelPeminjam = new PeminjamanModel();
        $hasil = $modelPeminjam->dataPeminjam();
        $dtBuku = $modelPeminjam->judulBuku();
        $dtAnggota = $modelPeminjam->namaAnggota();

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
        $modelPeminjam = new PeminjamanModel();

        $kodePinjam = 'PMPSI';
        $judulBuku = $this->request->getVar('judulbuku');
        $namaAnggota = $this->request->getVar('anggota');
        $tglPinjam = $this->request->getVar('tglpinjam');
        $tglKembali = $this->request->getVar('tglkembali');
        $keterlambatan = $this->request->getVar('keterlambatan');

        $modelPeminjam->addPeminjam($kodePinjam, $judulBuku, $namaAnggota, $tglPinjam, $tglKembali, $keterlambatan);
        return redirect()->to('/data_peminjam');
    }

    public function editProses() {
        $modelPeminjam = new PeminjamanModel();

        $id = $this->request->getVar('id');
        $kodePinjam = $this->request->getVar('kode');
        $judulBuku = $this->request->getVar('judulbuku');
        $namaAnggota = $this->request->getVar('anggota');
        $tglPinjam = $this->request->getVar('tglpinjam');
        $tglKembali = $this->request->getVar('tglkembali');
        $keterlambatan = $this->request->getVar('keterlambatan');

        $modelPeminjam->editPeminjam($id, $kodePinjam, $judulBuku, $namaAnggota, $tglPinjam, $tglKembali, $keterlambatan);
        return redirect()->to('/data_peminjam');
    }

    public function deleteProses($id) {
        $modelPeminjam = new PeminjamanModel();

        $modelPeminjam->hapusPeminjam($id);
        return redirect()->to('/data_peminjam');
    }
}
