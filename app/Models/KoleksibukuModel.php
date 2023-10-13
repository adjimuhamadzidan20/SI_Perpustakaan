<?php

namespace App\Models;

use CodeIgniter\Model;

class KoleksibukuModel extends Model
{
    protected $table            = 'dt_buku';
    protected $primaryKey       = 'id_buku';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['kode_buku', 'judul_buku', 'pengarang', 'id_penerbit', 'tahun_terbit', 'jumlah_buku'];

    public function dataBuku() {
        $sql = "SELECT dt_buku.id_buku, dt_buku.kode_buku, dt_buku.judul_buku, dt_buku.pengarang, dt_buku.id_penerbit, 
        dt_penerbit.nama_penerbit, dt_buku.tahun_terbit, dt_buku.jumlah_buku, CONCAT ('BPS', id_buku) AS kode FROM dt_buku 
        INNER JOIN dt_penerbit ON dt_buku.id_penerbit = dt_penerbit.id_penerbit";
        $query = $this->query($sql)->getResultArray();
        return $query;
    }

    public function dataPenerbit() {
        $sql = "SELECT id_penerbit, nama_penerbit FROM dt_penerbit";
        $query = $this->query($sql)->getResultArray();
        return $query;
    }

    public function addBuku($kode, $judul, $pengarang, $id_penerbit, $tahun, $jumlah) {
        $data = [
            'kode_buku' => $kode,
            'judul_buku' => $judul,
            'pengarang' => $pengarang,
            'id_penerbit' => $id_penerbit,
            'tahun_terbit' => $tahun,
            'jumlah_buku' => $jumlah
        ];

        $insertBuku = $this->insert($data);
        return $insertBuku;
    }

    public function editBuku($id, $kode, $judul, $pengarang, $id_penerbit, $tahun, $jumlah) {
        $data = [
            'kode_buku' => $kode,
            'judul_buku' => $judul,
            'pengarang' => $pengarang,
            'id_penerbit' => $id_penerbit,
            'tahun_terbit' => $tahun,
            'jumlah_buku' => $jumlah
        ];

        $updateBuku = $this->update($id, $data);
        return $updateBuku;
    }    

    public function hapusBuku($id) {
        $deleteBuku = $this->delete($id);
        return $deleteBuku;
    }

    public function jumlahBuku() {
        $sql = "SELECT * FROM dt_buku";
        $query = $this->query($sql);
        return $query->getNumRows();
    }
}
