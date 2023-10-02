<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamanModel extends Model
{
    protected $table            = 'dt_peminjam';
    protected $primaryKey       = 'id_peminjam';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['kode_pinjam', 'id_buku', 'id_anggota', 'tanggal_pinjam', 'tanggal_kembali', 'keterlambatan'];

    public function dataPeminjam() {
        $sql = "SELECT dt_peminjam.id_peminjam, dt_peminjam.kode_pinjam, dt_peminjam.id_buku, dt_buku.judul_buku, 
        dt_peminjam.id_anggota, dt_anggota.nama_anggota, dt_peminjam.tanggal_pinjam, dt_peminjam.tanggal_kembali, 
        dt_peminjam.keterlambatan, CONCAT ('PMPS', id_peminjam) AS kode FROM dt_peminjam INNER JOIN dt_buku 
        ON dt_peminjam.id_buku = dt_buku.id_buku INNER JOIN dt_anggota ON dt_peminjam.id_anggota = dt_anggota.id_anggota";

        $query = $this->query($sql)->getResultArray();
        return $query;
    }

    public function judulBuku() {
        $sql = "SELECT id_buku, judul_buku FROM dt_buku";
        $query = $this->query($sql)->getResultArray();
        return $query;
    }

    public function namaAnggota() {
        $sql = "SELECT id_anggota, nama_anggota FROM dt_anggota";
        $query = $this->query($sql)->getResultArray();
        return $query;
    }

    public function addPeminjam($kode, $judul, $nama, $tglPinjam, $tglKembali, $keterlambatan) {
       $data = [
            'kode_pinjam' => $kode,
            'id_buku' => $judul,
            'id_anggota' => $nama,
            'tanggal_pinjam' => $tglPinjam,
            'tanggal_kembali' => $tglKembali,
            'keterlambatan' => $keterlambatan
       ];

       $insertPinjam = $this->insert($data);
       return $insertPinjam;
    }

    public function editPeminjam($id, $kode, $judul, $nama, $tglPinjam, $tglKembali, $keterlambatan) {
        $data = [
            'kode_pinjam' => $kode,
            'id_buku' => $judul,
            'id_anggota' => $nama,
            'tanggal_pinjam' => $tglPinjam,
            'tanggal_kembali' => $tglKembali,
            'keterlambatan' => $keterlambatan
       ];

       $updatePinjam = $this->update($id, $data);
       return $updatePinjam;
    }

    public function hapusPeminjam($id) {
        $deletePinjam = $this->delete($id);
        return $deletePinjam;
    }
}
