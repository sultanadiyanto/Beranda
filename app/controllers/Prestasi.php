<?php

class Prestasi extends Controller{
    public function index()
    {
        $data['judul'] = 'coba Mahasiswa';
        $data['mhs'] = $this->model('User_model')->getAllmahasiswa();
        $this->view('templates/header', $data);
        $this->view('prestasi/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Data lengkap';
        $data['mhs'] = $this->model('User_model')->getPrestasiById($id);
        $this->view('templates/header', $data);
        $this->view('prestasi/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if($this->model('User_model')->tambahDataPrestasi($_POST) > 0) {
            header('Location: ' . BASEURL . '/prestasi');
            exit;
        }
    }
}