<?php

class Prestasi extends Controller{
    public function index()
    {
        $data['judul'] = 'Prestasi';
        $data['page'] = 'Prestasi';
        $data['mhs'] = $this->model('User_model')->getAllmahasiswa();
        $this->view('templates/header', $data);
        $this->view('prestasi/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail';
        $data['page'] = 'Prestasi';
        $data['mhs'] = $this->model('User_model')->getPrestasiById($id);
        $this->view('templates/header', $data);
        $this->view('prestasi/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if($this->model('User_model')->tambahDataPrestasi($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/prestasi');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/prestasi');
            exit;
        }
    }

    public function hapus($id)
    {
        if($this->model('User_model')->hapusDataPrestasi($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/prestasi');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/prestasi');
            exit;
        }
    }

    public function getedit()
    {
        echo json_encode($this->model('User_model')->getPrestasiById($_POST['id']));
    }

    public function edit()
    {
        if($this->model('User_model')->editDataPrestasi($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diedit', 'success');
            header('Location: ' . BASEURL . '/prestasi');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diedit', 'danger');
            header('Location: ' . BASEURL . '/prestasi');
            exit;
        }
    }
}