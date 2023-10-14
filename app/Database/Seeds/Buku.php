<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Buku extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 20; $i++) {
            $data = [
                'kode_buku' => 'BPS',
                'judul_buku' => $faker->randomElement(['Naruto Shipudden '. $i, 'One Piece '. $i, 'Pemrograman Web '. $i]),
                'pengarang' => $faker->name,
                'id_penerbit' => $faker->randomElement([15,16,17,18,19]),
                'tahun_terbit' => $faker->year,
                'jumlah_buku' => $faker->numberBetween($min = 20, $max = 60)
            ];

            $this->db->table('dt_buku')->insert($data);
        }
    }
}
