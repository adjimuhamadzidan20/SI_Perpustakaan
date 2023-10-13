<?php

namespace App\Controllers;
use App\Models\AnggotaModel;
use App\Models\PenerbitModel;
use App\Models\KoleksibukuModel;
use App\Models\PeminjamanModel;

class Dashboard extends BaseController
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
        $hasil1 = $this->modelAnggota->jumlahAnggota();
        $hasil2 = $this->modelPenerbit->jumlahPenerbit();
        $hasil3 = $this->modelBuku->jumlahBuku();
        $hasil4 = $this->modelPeminjam->jumlahPeminjam();

        $data = [
            'title' => 'Dashboard',
            'activeMenu' => 'dashboard',
            'dataAnggota' => $hasil1,
            'dataPenerbit' => $hasil2,
            'dataBuku' => $hasil3,
            'dataPeminjam' => $hasil4
        ];

        echo view('partial/header', $data);
        echo view('partial/top_menu', $data);
        echo view('partial/sidebar', $data);
        echo view('dashboard', $data);
        echo view('partial/footer');
    }
}
