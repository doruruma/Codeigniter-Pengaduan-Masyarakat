<?php

class Petugas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        isLoginAdmin();
        $this->load->model('PetugasModel', 'petugas');
    }

    public function index()
    {
        $data = [
            'title' => 'E-report | Petugas',
            'pageJS' => 'petugas/index.js',
            'pluginCSS' => ['datatables/dataTables.bootstrap4.min.css'],
            'pluginJS' => ['datatables/jquery.dataTables.js', 'datatables/dataTables.bootstrap4.min.js'],

            'petugas' => $this->petugas->getAllPetugas()
        ];
        $this->load->view('layouts/header', $data)
            ->view('layouts/nav')
            ->view('layouts/sidebar')
            ->view('petugas/index')
            ->view('layouts/footer');
    }

    public function edit($id)
    {
        $this->petugas->editValidation();
        if ($this->form_validation->run()) {
            $this->petugas->edit($id);
        } else {
            $data = [
                'title' => 'E-report | Edit Petugas',
                'petugas' => $this->petugas->getPetugas($id)
            ];
            $this->load->view('layouts/header', $data)
                ->view('layouts/nav')
                ->view('layouts/sidebar')
                ->view('petugas/edit')
                ->view('layouts/footer');
        }
    }

    public function tambah()
    {
        $this->petugas->validation();
        if ($this->form_validation->run()) {
            $this->petugas->register();
        } else {
            $data = [
                'title' => 'E-report | Tambah Petugas',
            ];
            $this->load->view('layouts/header', $data)
                ->view('layouts/nav')
                ->view('layouts/sidebar')
                ->view('petugas/tambah')
                ->view('layouts/footer');
        }
    }

    public function delete($id)
    {
        $this->db->where('id', $id)->delete('petugas');
        flashAlert('success', 'Berhasil Menghapus Data');
        redirect('petugas');
    }
}
