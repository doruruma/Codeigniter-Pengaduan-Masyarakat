<?php

class AuthModel extends CI_Model
{

    // Validation
    public function registerPetugasValidation()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim')
            ->set_rules('username', 'Username', 'required|trim')
            ->set_rules('password', 'Password', 'required|min_length[5]')
            ->set_rules('telp', 'Telepon', 'required|integer|min_length[9]');
    }

    // Form Handler
    public function registerPetugas()
    {
        $nama = $this->input->post('nama', true);
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $finalPassword = password_hash($password, PASSWORD_DEFAULT);
        $telp = $this->input->post('telp', true);
        try {
            $this->db->insert('petugas', [
                'nama' => $nama,
                'username' => $username,
                'password' => $finalPassword,
                'telp' => $telp,
                'id_level' => 1
            ]);
            flashAlert('success', 'Berhasil Input Data');
            redirect('auth');
        } catch (Exception $e) {
            flashAlert('error', $e);
            redirect('auth');
        }
    }

}
