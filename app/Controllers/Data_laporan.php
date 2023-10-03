<?php

namespace App\Controllers;
use App\Models\AnggotaModel;
use App\Models\PenerbitModel;
use App\Models\KoleksibukuModel;
use App\Models\PeminjamanModel;

use App\Controllers\BaseController;

class Data_laporan extends BaseController
{
    public function index()
    {
        $modelAnggota = new AnggotaModel();
        $modelPenerbit = new PenerbitModel();
        $modelBuku = new KoleksibukuModel();
        $modelPeminjam = new PeminjamanModel();

        $hasil1 = $modelAnggota->dataAnggota();
        $hasil2 = $modelPenerbit->dataPenerbit();
        $hasil3 = $modelBuku->dataBuku();
        $hasil4 = $modelPeminjam->dataPeminjam();
        
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
