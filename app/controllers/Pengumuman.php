<?php

class Pengumuman extends Controller {
    public function index(){
        $data['judul'] = 'Pengumuman';
        $data['page'] = 'Pengumuman';
        $this->view('templates/header', $data);
        $this->view('Pengumuman/index', $data);
        $this->view('templates/footer');
    }
}