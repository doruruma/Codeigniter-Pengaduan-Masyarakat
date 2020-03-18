<?php

class AuthModel extends CI_Model
{

    // Validation
    public function validation()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim')
            ->set_rules('password', 'Password', 'required|min_length[5]');
    }

    public function registerMasyarakatValidation()
    {
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim|is_unique[masyarakat.nik]')
            ->set_rules('nama', 'Nama', 'required|trim')
            ->set_rules('username', 'Username', 'required|trim|is_unique[masyarakat.username]')
            ->set_rules('password', 'Password', 'required|min_length[5]')
            ->set_rules('telp', 'Telepon', 'required|integer|min_length[9]');
    }

    // Form Handler
    public function login()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $data = $this->db->get_where('masyarakat', ['username' => $username])->row();
        if ($data) {
            if (password_verify($password, $data->password)) {
                $session = [
                    'id' => $data->id,
                    'nik' => $data->nik,
                    'nama' => $data->nama,
                    'username' => $data->username
                ];
                setSession($session);
                redirect('user/home');
            } else {
                flashAlert('error', 'Username atau Password Tidak Valid');
                redirect('auth/login');
            }
        } else {
            flashAlert('error', 'Username atau Password Tidak Valid');
            redirect('auth/login');
        }
    }

    public function register()
    {
        $nik = $this->input->post('nik', true);
        $nama = $this->input->post('nama', true);
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $finalPassword = password_hash($password, PASSWORD_DEFAULT);
        $telp = $this->input->post('telp', true);
        $this->db->insert('masyarakat', [
            'nik' => $nik,
            'nama' => $nama,
            'username' => $username,
            'password' => $finalPassword,
            'telp' => $telp,
        ]);
        flashAlert('success', 'Berhasil Register Akun, Silahkan Login');
        redirect('auth/login');
    }

    public function loginAdmin()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $data = $this->db->get_where('petugas', ['username' => $username])->row();
        if ($data) {
            if (password_verify($password, $data->password)) {
                $session = [
                    'id' => $data->id,
                    'username' => $data->username,
                    'level' => $data->id_level,
                ];
                setSession($session);
                redirect('admin/dashboard');
            } else {
                flashAlert('error', 'Username atau Password Tidak Valid');
                redirect('admin/auth');
            }
        } else {
            flashAlert('error', 'Username atau Password Tidak Valid');
            redirect('admin/auth');
        }
    }
    
}
