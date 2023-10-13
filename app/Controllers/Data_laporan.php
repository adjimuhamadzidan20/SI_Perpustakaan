<?php

namespace App\Controllers;
use App\Models\AnggotaModel;
use App\Models\PenerbitModel;
use App\Models\KoleksibukuModel;
use App\Models\PeminjamanModel;
use App\Controllers\BaseController;

class Data_laporan extends BaseController
{   
    protected $modelAnggota;
    protected $modelPenerbit;
    protected $modelBuku;
    protected $modelPeminjam;

    public function __construct() {
        $this->modelAnggota = new AnggotaModel();
        $this->modelPenerbit = new PenerbitModel();
        $this->modelBuku = new KoleksibukuModel();
        $this->modelPeminjam = new PeminjamanModel();
    }

    public function index()
    {
        $hasil1 = $this->modelAnggota->dataAnggota();
        $hasil2 = $this->modelPenerbit->dataPenerbit();
        $hasil3 = $this->modelBuku->dataBuku();
        $hasil4 = $this->modelPeminjam->dataPeminjam();
        
        $data = [
            'title' => 'Cetak Laporan',
            'activeMenu' => 'laporan',
            'dataAnggota' => $hasil1,
            'dataPenerbit' => $hasil2,
            'dataBuku' => $hasil3,
            'dataPeminjam' => $hasil4
        ];

        echo view('partial/header', $data);
        echo view('partial/top_menu');
        echo view('partial/sidebar');
        echo view('laporan', $data);
        echo view('partial/footer');
    }
}
