<?php

class Prestasi extends Controller{
    public function index()
    {
        $data['judul'] = 'Prestasi';
        $data['mhs'] = $this->model('Prestasi_model')->getAllmahasiswa();
        $this->view('templates/header', $data);
        $this->view('prestasi/index', $data);
        $this->view('templates/footer');
    }
}