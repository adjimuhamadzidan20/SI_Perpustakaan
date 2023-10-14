<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Penerbit extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 10; $i++) {
            $data = [
                'kode_penerbit' => 'PPS',
                'nama_penerbit' => $faker->company,
            ];

            $this->db->table('dt_penerbit')->insert($data);
        }
    }
}
