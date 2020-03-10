<?php

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        isLoginAdmin();
        $this->load->model('PetugasModel', 'petugas');
        $this->load->model('PengaduanModel', 'pengaduan');
        $this->load->model('AdminModel', 'admin');
    }

    public function index()
    {
        $data = [
            'title' => 'E-report | Admin',
            'petugas' => $this->petugas->getPetugas($this->session->petugas['id'])
        ];
        $this->load->view('layouts/header', $data)
            ->view('layouts/nav')
            ->view('layouts/sidebar')
            ->view('profile/index')
            ->view('layouts/footer');
    }

    public function edit_profile()
    {
        $data = [
            'title' => 'E-report | Edit Profile Admin',
            'pageJS' => 'admin/editProfile.js',

            'petugas' => $this->admin->getAdmin($this->session->user['id']),
        ];
        $this->load->view('layouts/header', $data)
            ->view('layouts/nav')
            ->view('layouts/sidebar')
            ->view('profile/editProfile')
            ->view('layouts/footer');
    }

    public function change_password()
    {
        $data = [
            'title' => 'E-report | Change Password Admin',
            'petugas' => $this->admin->getAdmin($this->session->user['id']),
        ];
        $this->load->view('layouts/header', $data)
            ->view('layouts/nav')
            ->view('layouts/sidebar')
            ->view('profile/changePassword')
            ->view('layouts/footer');
    }

}
