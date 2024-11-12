<?php

class Beranda extends Controller {
    public function index() {
        $data['judul'] = 'Home';
        $data['page'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('beranda/index', $data);
        $this->view('templates/footer');
    }
}