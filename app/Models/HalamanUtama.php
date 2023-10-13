<?php

namespace App\Models;

use CodeIgniter\Model;

class HalamanUtama extends Model
{
    protected $table            = 'dt_buku';
    protected $primaryKey       = 'id_buku';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['judul_buku', 'pengarang', 'tahun_terbit'];

    public function cari($keyword) {

        $table = $this->table('dt_buku');
        $table->like('judul_buku', $keyword);
        $table->orLike('pengarang', $keyword);
        $table->orLike('tahun_terbit', $keyword);
        
        return $table;
    }
}
