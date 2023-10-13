<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginModel;

class Login extends BaseController
{
    protected $modelLogin;

    public function __construct() {
        $this->modelLogin = new LoginModel();
    }

    public function index()
    {
        return view('login');
    }

    public function masuk() {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if ($username == '' OR $password == '') {
            $error = 'Silahkan masukan username & password!';
        }

        if (empty($error)) {
            $dtAdmin = $this->modelLogin->where('username', $username)->first();

            if ($dtAdmin['password'] != md5($password)) {
                $error = 'Password tidak sesuai!';
            }
        }

        if (empty($error)) {
            $dataSesi = [
                'id_admin' => $dtAdmin['id_admin'],
                'nama_admin' => $dtAdmin['nama_admin'],
                'username' => $dtAdmin['username'],
                'password' => $dtAdmin['password'],
            ];

            session()->set($dataSesi);
            return redirect()->to('/dashboard');
        }

        if ($error) {
            session()->setFlashData('username', $username);
            session()->setFlashData('pesan', $error);
            return redirect()->to('/login');
        }
    }

    public function logout() {
        session()->destroy();
        return redirect()->to('/login');
    }
}
