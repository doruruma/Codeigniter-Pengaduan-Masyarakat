<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        isLoginPublic();
    }

    public function index()
    {
        $data = [
            'title' => 'E-report | Home Page'
        ];
        $this->load->view('layouts/header', $data)
            ->view('layouts/nav')
            ->view('public/home')
            ->view('layouts/footer');
    }

    public function logout()
    {
        $this->session->unset_userdata('user');
        redirect('auth');
    }

}
