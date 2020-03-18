<?php

class Auth extends CI_Controller
{

    public function __construct()
    { 
        parent::__construct();
        loggedInAdmin();
        $this->load->model('AuthModel', 'auth');
    }

    public function index()
    {
        $this->auth->validation();
        if ($this->form_validation->run()) {
            $this->auth->loginAdmin();
        } else {
            $data = [
                'title' => 'E-report | Sign In Petugas',
            ];
            $this->load->view('layouts/header', $data)
                ->view('auth/admin')
                ->view('layouts/footer');
        }
    }

}
