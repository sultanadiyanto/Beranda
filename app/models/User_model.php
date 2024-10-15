<?php

class User_model {
    private $table = 'mahasiswa';
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
}