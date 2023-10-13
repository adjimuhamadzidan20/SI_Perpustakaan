<?php

namespace App\Controllers;
use App\Models\AnggotaModel;

class Data_anggota extends BaseController
{
    protected $modelAnggota;

    public function __construct() {
        $this->modelAnggota = new AnggotaModel();
    }

    public function index()
    {
        $hasil = $this->modelAnggota->dataAnggota();

        $data = [
            'title' => 'Data Anggota',
            'activeMenu' => 'anggota',
            'data' => $hasil
        ];

        echo view('partial/header', $data);
        echo view('partial/top_menu', $data);
        echo view('partial/sidebar', $data);
        echo view('anggota', $data);
        echo view('partial/footer');
    }

    public function tambah() {
        $kode = 'APS';
        $nama = $this->request->getPost('nama_anggota');
        $jenkel = $this->request->getPost('jenis_kelamin');
        $tgllahir = $this->request->getPost('tgl_lahir');
        $alamat = $this->request->getPost('alamat');

        $this->modelAnggota->addAnggota($kode, $nama, $jenkel, $tgllahir, $alamat);
        session()->setFlashData('pesan', 'Data anggota berhasil tersimpan!');
        return redirect()->to('/data_anggota');
    }

    public function editProses() {
        $id = $this->request->getPost('id');
        $kode = $this->request->getPost('kode');
        $nama = $this->request->getPost('nama_anggota');
        $jenkel = $this->request->getPost('jenis_kelamin');
        $tgllahir = $this->request->getPost('tgl_lahir');
        $alamat = $this->request->getPost('alamat');

        $this->modelAnggota->editAnggota($id, $kode, $nama, $jenkel, $tgllahir, $alamat);
        session()->setFlashData('pesan', 'Data anggota berhasil terupdate!');
        return redirect()->to('/data_anggota');
    }

    public function deleteProses($id) {
        $this->modelAnggota->hapusAnggota($id);
        session()->setFlashData('pesan', 'Data anggota berhasil terhapus!');
        return redirect()->to('/data_anggota');
    }

    public function cetak_anggota() {
        $hasil = $this->modelAnggota->dataAnggota();

        $data = [
            'title' => 'Cetak Laporan Anggota',
            'data' => $hasil
        ];

        echo view('partial/header', $data);
        echo view('cetak_laporan/cetak_anggota', $data);
        echo view('partial/footer_cetak');
    }
}
