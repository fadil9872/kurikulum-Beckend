<?php

class User extends Controller{
    public function index()
    {
        $data['judul'] = 'Login';
        // $data['nama'] = $this->model('UserLogin_model')->getUserLogin();
        $this->view('templates/header', $data);
        $this->view('user/index', $data);
        $this->view('templates/footer');
    }

    public function register()
    {
        $data['judul'] = 'Register';
        // $data['nama'] = $this->model('UserLogin_model')->getUserLogin();
        $this->view('templates/header', $data);
        $this->view('user/register', $data);
        $this->view('templates/footer');
    }

}