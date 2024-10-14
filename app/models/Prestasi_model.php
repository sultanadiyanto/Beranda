<?php

class Prestasi_model {
    private $dbh;
    private $stmt;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=PIPPolindra';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function getAllmahasiswa() 
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // private $mhs = [
    //     [
    //         "nama" => "Airani Iofiften",
    //         "nim" => "010201",
    //         "email" => "iofiobisa@gmail.com",
    //         "jurusan" => "Seni Rupa dan Desain",
    //         "prestasi" => "Juara 1 Art National Competition"
    //     ],
    //     [
    //         "nama" => "Moona Hoshinova",
    //         "nim" => "010202",
    //         "email" => "heymoona@gmail.com",
    //         "jurusan" => "Seni Musik",
    //         "prestasi" => "Juara Favorit Hololive mencari bakat 2023"
    //     ],
    //     [
    //         "nama" => "Ayunda Risu",
    //         "nim" => "010203",
    //         "email" => "ayundarisuch@gmail.com",
    //         "jurusan" => "Seni Musik",
    //         "prestasi" => "Juara Harapan 2 HoloMusic Fest 2023"
    //     ]
    // ];

    
}