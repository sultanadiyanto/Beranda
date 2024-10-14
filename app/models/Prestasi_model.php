<?php

class Prestasi_model {
    private $mhs = [
        [
            "nama" => "Airani Iofiften",
            "nim" => "010201",
            "email" => "iofiobisa@gmail.com",
            "jurusan" => "Seni Rupa dan Desain",
            "prestasi" => "Juara 1 Art National Competition"
        ],
        [
            "nama" => "Moona Hoshinova",
            "nim" => "010202",
            "email" => "heymoona@gmail.com",
            "jurusan" => "Seni Musik",
            "prestasi" => "Juara Favorit Hololive mencari bakat 2023"
        ],
        [
            "nama" => "Ayunda Risu",
            "nim" => "010203",
            "email" => "ayundarisuch@gmail.com",
            "jurusan" => "Seni Musik",
            "prestasi" => "Juara Harapan 2 HoloMusic Fest 2023"
        ]
    ];

    public function getAllmahasiswa() 
    {
        return $this->mhs;
    }
}