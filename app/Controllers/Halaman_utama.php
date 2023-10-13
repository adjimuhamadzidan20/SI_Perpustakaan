<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HalamanUtama;

class Halaman_utama extends BaseController
{
    protected $modelHalaman;

    public function __construct() {
        $this->modelHalaman = new HalamanUtama();
    }

    public function index()
    {
        $pagination = $this->request->getVar('page_buku') ? $this->request->getVar('page_buku') : 1;
        $keyword = $this->request->getGet('keyword');

        if ($keyword) {
            $hasil = $this->modelHalaman->cari($keyword);    
        } else {
            $hasil = $this->modelHalaman;
        }

        $jmlBaris = 3;
        $data = [
            'data' => $this->modelHalaman->paginate($jmlBaris, 'buku'),
            'pager' => $this->modelHalaman->pager,
            'page' => $pagination,
        ];

        return view('halaman_utama', $data);
    }
}
