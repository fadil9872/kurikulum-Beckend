<?php

class Home extends Controller{
    public function index()
    {
        $data['judul']  = 'Home';
        $data['artikel']   = $this->model('User_model')->index();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function page($id)
    {
        $data['judul']      = 'Page';
        $data['artikel']    = $this->model('User_model')->getArtikelById($id);
        $this->view('templates/header', $data);
        $this->view('home/page', $data);
        $this->view('templates/footer');
    }

    public function login()
    {
        if ( $this->model('Login_model')->loginUser($_POST) > 0) {
            Flasher::setFlash('login', 'Anda', 'Berhasil');
            header('Location: ' . BASEURL . '/Dashboard' );
            exit;
        } else {
            Flasher::setFlash('silahkan periksa ', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL );
            exit;
        }
    }
    
    public function register()
    {
        $data['judul']      = 'Register';

        $this->view('templates/header', $data);
        $this->view('home/register', $data);
        $this->view('templates/footer');
    }

    public function tambahregister()
    {
        $data['artikel']    = $this->model('Login_model')->registerUser($_POST) > 0;

        header('Location:' . BASEURL );
    }

    
}