<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard Admin',
            'activeMenu' => 'dashboard'
        ];

        echo view('partial/header', $data);
        echo view('partial/top_menu', $data);
        echo view('partial/sidebar', $data);
        echo view('dashboard', $data);
        echo view('partial/footer');
    }
}
