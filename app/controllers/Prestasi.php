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

    public function detail($id)
    {
        $data['judul'] = 'Berita Prestasi';
        $data['mhs'] = $this->model('Prestasi_model')->getPrestasiById($id);
        $this->view('templates/header', $data);
        $this->view('prestasi/detail', $data);
        $this->view('templates/footer');
    }
}