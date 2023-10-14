<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Anggota extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 30; $i++) {
            $data = [
                'kode_anggota' => 'APS',
                'nama_anggota' => $faker->name,
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'tanggal_lahir' => $faker->date(),
                'alamat' => $faker->randomElement(['Kota Bekasi', 'Depok', 'Jakarta Timur', 
                'Jakarta Selatan', 'Tangerang', 'Bogor'])
            ];

            $this->db->table('dt_anggota')->insert($data);
        }
    }
}
