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
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim')
            ->set_rules('nama', 'Nama', 'required|trim')
            ->set_rules('username', 'Username', 'required|trim')
            ->set_rules('password', 'Password', 'required|min_length[5]')
            ->set_rules('telp', 'Telepon', 'required|integer|min_length[9]');
    }

    // Form Handler
    public function login($table)
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $data = $this->db->get_where($table, ['username' => $username])->row();
        if ($data) {
            if (password_verify($password, $data->password)) {
                isset($data->nik) ? setSessionMasyarakat($data) && redirect('masyarakat') : (isset($data->id_level) ? setSessionPetugas($data) && redirect('admin') : '');
            } else {
                flashAlert('error', 'Username atau Password Tidak Valid');
                redirect('auth');
            }
        } else {
            flashAlert('error', 'Username atau Password Tidak Valid');
            redirect('auth');
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
        try {
            $this->db->insert('masyarakat', [
                'nik' => $nik,
                'nama' => $nama,
                'username' => $username,
                'password' => $finalPassword,
                'telp' => $telp,
            ]);
            flashAlert('success', 'Berhasil Register Akun, Silahkan Login');
            redirect('auth/login');
        } catch (Exception $e) {
            flashAlert('error', $e->getMessage());
            redirect('auth');
        }
    }
}
