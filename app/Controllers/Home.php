<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $table = array(
            array("Tono", "ALPRO 1", 8),
            array("Budi", "ALPRO 1", 7),
            array("Adi", "ALPRO 1", 6),
            array("Seto", "ALPRO 1", 4),
            array("Tini", "ALPRO 1", 3),
            array("Kinan", "ALPRO 2", 9),
            array("Nanan", "ALPRO 2", 10),
            array("Alif", "ALPRO 2", 8),
            array("Bata", "ALPRO 2", 8),
            array("Dono", "ALPRO 2", 5),
        );

        $arr = [
            'apps' => 'UNS',
            'dataTable' => $table
        ];

        return view('Univ/UNSMahasiswa', $arr);
    }

    public function fakultas($nama, $nim)
    {
        $table = array(
            array("Tono", "ALPRO 1", 8),
            array("Budi", "ALPRO 1", 7),
            array("Adi", "ALPRO 1", 6),
            array("Seto", "ALPRO 1", 4),
            array("Tini", "ALPRO 1", 3),
            array("Kinan", "ALPRO 2", 9),
            array("Nanan", "ALPRO 2", 10),
            array("Alif", "ALPRO 2", 8),
            array("Bata", "ALPRO 2", 8),
            array("Dono", "ALPRO 2", 5),
        );

        $arr = [
            'apps' => 'UNS',
            'dataTable' => $table
        ];

        return view('Univ/UNSProdi', $arr);
    }
}
