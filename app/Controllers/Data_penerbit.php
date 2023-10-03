<?php

namespace App\Controllers;
use App\Models\PenerbitModel;

class Data_penerbit extends BaseController
{
    public function index()
    {
        $modelPenerbit = new PenerbitModel();
        $hasil = $modelPenerbit->dataPenerbit();

        $data = [
            'title' => 'Data Penerbit',
            'activeMenu' => 'penerbit',
            'data' => $hasil
        ];

        echo view('partial/header', $data);
        echo view('partial/top_menu');
        echo view('partial/sidebar');
        echo view('penerbit', $data);
        echo view('partial/footer');
    }

    public function tambah() {
        $modelPenerbit = new PenerbitModel();

        $kode = 'PPS';
        $namaPenerbit = $this->request->getVar('penerbit');

        $modelPenerbit->addPenerbit($kode, $namaPenerbit);
        session()->setFlashData('pesan', 'Data penerbit berhasil tersimpan!');
        return redirect()->to('/data_penerbit');
    }

    public function editProses() {
        $modelPenerbit = new PenerbitModel();

        $id = $this->request->getVar('id');
        $kode = $this->request->getVar('kode');
        $namaPenerbit = $this->request->getVar('penerbit');

        $modelPenerbit->editPenerbit($id, $kode, $namaPenerbit);
        session()->setFlashData('pesan', 'Data penerbit berhasil terupdate!');
        return redirect()->to('/data_penerbit');
    }

    public function deleteProses($id) {
        $modelPenerbit = new PenerbitModel();

        $modelPenerbit->hapusPenerbit($id);
        session()->setFlashData('pesan', 'Data penerbit berhasil terhapus!');
        return redirect()->to('/data_penerbit');
    }
}
