<?php

class Competition extends Controller {
    public function index() {
        $data['judul'] = 'Kompetisi';
        $data['page'] = 'Kompetisi';
        $this->view('templates/header', $data);
        $this->view('competition/index', $data);
        $this->view('templates/footer');
    }

    public function daftarKompetisi() {
        $data['judul'] = 'daftar Kompetisi';
        $this->view('templates/header', $data);
        $this->view('competition/daftar', $data);
        $this->view('templates/footer');
    }
}