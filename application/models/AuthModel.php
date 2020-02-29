<?php

class AuthModel extends CI_Model
{

    // Validation
    public function validation()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim')
            ->set_rules('password', 'Password', 'required|min_length[5]');
    }

    // public function registerMasyarakatValidation()
    // {
    //     $this->form_validation->set_rules('nik', 'NIK', 'required|trim')
    //         ->set_rules('nama', 'Nama', 'required|trim')
    //         ->set_rules('username', 'Username', 'required|trim')
    //         ->set_rules('password', 'Password', 'required|min_length[5]')
    //         ->set_rules('telp', 'Telepon', 'required|integer|min_length[9]');
    // }

    // Form Handler
    public function login()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $data = $this->db->get_where('petugas', ['username' => $username])->row();
        var_dump($data);
        if ($data) {
            if (password_verify($password, $data->password)) {
                setSessionPetugas($data->id, $data->username, $data->id_level);
                $data->id_level == 1 ? redirect('admin') : ($data->id_level == 2 ? redirect('petugas') : var_dump($data->id_level));
            } else {
                flashAlert('error', 'Username atau Password Tidak Valid');
                redirect('auth');
            }
        } else {
            flashAlert('error', 'Username atau Password Tidak Valid');
            redirect('auth');
        }
    }

    public function registerMasyarakat()
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
                'id_level' => 1
            ]);
            flashAlert('success', 'Berhasil Input Data');
            redirect('auth/registerMasyarakat');
        } catch (Exception $e) {
            flashAlert('error', $e->getMessage());
            redirect('auth/registerMasyarakat');
        }
    }
}
