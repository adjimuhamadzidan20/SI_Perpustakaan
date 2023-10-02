<?php

namespace App\Controllers;
use App\Models\AnggotaModel;

class Data_anggota extends BaseController
{
    public function index()
    {
        $modelAnggota = new AnggotaModel();
        $hasil = $modelAnggota->dataAnggota();

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
        $modelAnggota = new AnggotaModel();

        $kode = 'APS';
        $nama = $this->request->getVar('nama_anggota');
        $jenkel = $this->request->getVar('jeniskelamin');
        $tgllahir = $this->request->getVar('tgl_lahir');
        $alamat = $this->request->getVar('alamat');

        $modelAnggota->addAnggota($kode, $nama, $jenkel, $tgllahir, $alamat);
        return redirect()->to('/data_anggota');
    }

    public function editProses() {
        $modelAnggota = new AnggotaModel();

        $id = $this->request->getVar('id');
        $kode = $this->request->getVar('kode');
        $nama = $this->request->getVar('nama');
        $jenkel = $this->request->getVar('jenkel');
        $tgllahir = $this->request->getVar('tgllahir');
        $alamat = $this->request->getVar('alamat');

        $modelAnggota->editAnggota($id, $kode, $nama, $jenkel, $tgllahir, $alamat);
        return redirect()->to('/data_anggota');
    }

    public function deleteProses($id) {
        $modelAnggota = new AnggotaModel();

        $modelAnggota->hapusAnggota($id);
        return redirect()->to('/data_anggota');
    }
}
