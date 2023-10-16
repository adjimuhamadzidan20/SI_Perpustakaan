<?php

namespace App\Controllers;
use App\Models\PenerbitModel;

class Data_penerbit extends BaseController
{
    protected $modelPenerbit;

    public function __construct() {
        $this->modelPenerbit = new PenerbitModel();
    }
    public function index()
    {
        $hasil = $this->modelPenerbit->dataPenerbit();

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
        $kode = 'PPS';
        $namaPenerbit = $this->request->getPost('nama_penerbit');

        $this->modelPenerbit->addPenerbit($kode, $namaPenerbit);
        session()->setFlashData('pesan', 'Data penerbit berhasil tersimpan!');
        return redirect()->to('/data_penerbit');
    }

    public function editProses() {
        $id = $this->request->getPost('id');
        $kode = $this->request->getPost('kode');
        $namaPenerbit = $this->request->getPost('nama_penerbit');

        $this->modelPenerbit->editPenerbit($id, $kode, $namaPenerbit);
        session()->setFlashData('pesan', 'Data penerbit berhasil terupdate!');
        return redirect()->to('/data_penerbit');
    }

    public function deleteProses() {
        $id = $this->request->getPost('idpenerbit');
        $this->modelPenerbit->hapusPenerbit($id);
        session()->setFlashData('pesan', 'Data penerbit berhasil terhapus!');
        return redirect()->to('/data_penerbit');
    }

    public function cetak_penerbit() {
        $hasil = $this->modelPenerbit->dataPenerbit();
        $id = $this->request->getPost('id');
        $data = [
            'title' => 'Cetak Laporan Penerbit',
            'data' => $hasil
        ];

        echo view('partial/header', $data);
        echo view('cetak_laporan/cetak_penerbit', $data);
        echo view('partial/footer_cetak');
    }
}
