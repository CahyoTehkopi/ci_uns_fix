<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PesertaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'=>'Siti Nurbaya',
                'email' => 'siti@mail.com',
                'created_at' => Time::now()
            ],
            [
                'name'=>'Jatmiko Nugoroho',
                'email' => 'jatmiko@mail.com',
                'created_at' => Time::now()
            ],
            [
                'name'=>'Pandu Surya',
                'email' => 'pandu@mail.com',
                'created_at' => Time::now()
            ],
            [
                'name'=>'Mahesa Gemilang',
                'email' => 'mahesa@mail.com',
                'created_at' => Time::now()
            ],
            [
                'name'=>'Tika Putri',
                'email' => 'tika@mail.com',
                'created_at' => Time::now()
            ]
        ];
        $this->db->table('peserta')->insertBatch($data);
    }
}
