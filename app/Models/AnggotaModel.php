<?php

namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel extends Model
{
    protected $table            = 'dt_anggota';
    protected $primaryKey       = 'id_anggota';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['kode_anggota', 'nama_anggota', 'jenis_kelamin', 'tanggal_lahir', 'alamat'];

    public function dataAnggota() {
        $sql = "SELECT *, CONCAT ('APS', id_anggota) AS kode FROM dt_anggota";
        $query = $this->query($sql)->getResultArray();
        return $query;
    }

    public function addAnggota($kodeAnggota, $namaAnggota, $jenisKelamin, $tglLahir, $alamat) {
        $data = [
            'kode_anggota' => $kodeAnggota,
            'nama_anggota' => $namaAnggota,
            'jenis_kelamin' => $jenisKelamin,
            'tanggal_lahir' => $tglLahir,
            'alamat' => $alamat
        ];

        $insertAnggota = $this->insert($data);
        return $insertAnggota;
    }

    public function editAnggota($id, $kodeAnggota, $namaAnggota, $jenisKelamin, $tglLahir, $alamat) {
        $data = [
            'kode_anggota' => $kodeAnggota,
            'nama_anggota' => $namaAnggota,
            'jenis_kelamin' => $jenisKelamin,
            'tanggal_lahir' => $tglLahir,
            'alamat' => $alamat
        ];

        $updateAnggota = $this->update($id, $data);
        return $updateAnggota;
    }

    public function hapusAnggota($id) {
        $deleteAnggota = $this->delete($id);
        return $deleteAnggota;
    }
}
