<?php

class Dashboard extends Controller{

    public function index()
    {
        $data['judul']      = 'Dashboard';
        $data['artikel']    = $this->model('Artikel_model')->index();
        $this->view('templates/header2', $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/footer');
    }
    
    public function halamantambah()
    {

        $this->model('Artikel_model')->tambahDataArtikel($_POST) ;
        header('Location:' . BASEURL . '/Dashboard');
    }

    public function tambah()
    {
        $data['judul']      = 'Tambah Artikel';

        $this->view('templates/header2', $data);
        $this->view('dashboard/insert', $data);
        $this->view('templates/footer');
    }
    
    public function detail($id)
    {
        $data['judul']      = 'Detail';
        $data['artikel']    = $this->model('Artikel_model')->getArtikelById($id);
        $this->view('templates/header2', $data);
        $this->view('dashboard/detail', $data);
        $this->view('templates/footer');
    }
    public function hapus($id)
    {
        if ( $this->model('Artikel_model')->hapusDataArtikel($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/Dashboard' );
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/Dashboard' );
            exit;
        }
    }

    public function getubah($id)
    {
        $data['judul']      = 'Ubah';
        $data['artikel']    = $this->model('Artikel_model')->getArtikelById($id);
        $this->view('templates/header2', $data);
        $this->view('dashboard/ubah', $data);
        $this->view('templates/footer');
    }

    public function ubah()
    {
         ;
        if ( $this->model('Artikel_model')->ubahDataArtikel($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/Dashboard' );
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/Dashboard' );
            exit;
        }

    }

    public function logout()
    {
        session_unset();
        session_destroy();
        header('Location: ' . BASEURL );
    }


}