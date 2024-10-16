<?php

class Prestasi_model {
    private $table = 'prestasi';
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }

    

    public function getAllmahasiswa() 
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPrestasiById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataPrestasi($data)
    {
        $query = "INSERT INTO mahasiswa
                    VAlUES
                    ('', :nama, :email, :password, :nim, :jurusan )";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
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