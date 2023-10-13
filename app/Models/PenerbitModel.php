<?php

namespace App\Models;

use CodeIgniter\Model;

class PenerbitModel extends Model
{
    protected $table            = 'dt_penerbit';
    protected $primaryKey       = 'id_penerbit';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['kode_penerbit', 'nama_penerbit'];

    public function dataPenerbit() {
        $sql = "SELECT *, CONCAT ('PPS', id_penerbit) AS kode FROM dt_penerbit";
        $query = $this->query($sql)->getResultArray();
        return $query;
    }

    public function addPenerbit($kode, $penerbit) {
        $data = [
            'kode_penerbit' => $kode,
            'nama_penerbit' => $penerbit
        ];

        $insertPenerbit = $this->insert($data);
        return $insertPenerbit;
    }

    public function editPenerbit($id, $kode, $penerbit) {
        $data = [
            'kode_penerbit' => $kode,
            'nama_penerbit' => $penerbit
        ];

        $updatePenerbit = $this->update($id, $data);
        return $updatePenerbit;
    }

    public function hapusPenerbit($id) {
        $deletePenerbit = $this->delete($id);
        return $deletePenerbit;
    }

    public function jumlahPenerbit() {
        $sql = "SELECT * FROM dt_penerbit";
        $query = $this->query($sql);
        return $query->getNumRows();
    }
}
