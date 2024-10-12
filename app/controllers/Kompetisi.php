<?php

class Kompetisi extends Controller{
    public function index($nama = 'Luqman', $istri = 'Kaela Kovalskia')
    {
        $data['nama'] = $nama;
        $data['istri'] = $istri;

        $data['judul'] = 'Index Kompetisi';
        $this->view('templates/header', $data);
        $this->view('kompetisi/index', $data);
        $this->view('templates/footer');
    }
    public function page() 
    {
        $data['judul'] = 'Page Kompetisi';
        $this->view('templates/header', $data);
        $this->view('kompetisi/page');
        $this->view('templates/footer');
    }
}