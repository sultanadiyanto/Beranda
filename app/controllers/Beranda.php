<?php

class Beranda extends Controller {
    public function index() {
        $data['judul'] = 'Beranda';
        $data['page'] = 'Beranda';
        $this->view('templates/header', $data);
        $this->view('beranda/index', $data);
        $this->view('templates/footer');
    }
}