<?php

class Programmer_model
{
    private $prg = [
        [
            "nama" => "Joko Basuki",
            "alamat" => 'Bandung',
            "jurusan" => 'Teknik Mesin',
            "umur" => 30
        ],
        [
            "nama" => "Budi Sakti Perkasa",
            "alamat" => 'Solo',
            "jurusan" => 'Teknik Nuklir',
            "umur" => 27
        ],
        [
            "nama" => "Dhimas anggara",
            "alamat" => 'Boyolali',
            "jurusan" => 'Teknik industri',
            "umur" => 38
        ],
        [
            "nama" => "Rahmat Setiadi",
            "alamat" => 'Jogja',
            "jurusan" => 'Hukum',
            "umur" => 26
        ]
    ];

    public function getAllPrg()
    {
        return $this->prg;
    }
}
