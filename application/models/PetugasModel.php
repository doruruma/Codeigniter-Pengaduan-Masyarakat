<?php

class PetugasModel extends CI_Model
{

    // Validation
    public function validation()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim')
            ->set_rules('username', 'Username', 'required|trim')
            ->set_rules('password', 'Password', 'required|min_length[5]')
            ->set_rules('telp', 'Telepon', 'required|integer|min_length[9]');
    }

    public function editValidation()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim')
            ->set_rules('username', 'Username', 'required|trim')
            ->set_rules('telp', 'Telepon', 'required|integer|min_length[9]');
    }

    // Form Handler
    public function register()
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
                'id_level' => 2
            ]);
            flashAlert('success', 'Berhasil Input Data');
            redirect('petugas');
        } catch (Exception $e) {
            flashAlert('error', $e->getMessage());
            redirect('petugas');
        }
    }

    public function edit($id)
    {
        $this->db->set([
            'nama' => $this->input->post('nama', true),
            'username' => $this->input->post('username', true),
            'telp' => $this->input->post('telp', true)
        ])->where('id', $id)->update('petugas');
        flashAlert('success', 'Berhasil Update Data');
        redirect('petugas');
    }

    // API
    public function getAllPetugas()
    {
        return $this->db->get_where('petugas', ['id_level' => 2])->result();
    }

    public function getPetugas($id)
    {
        return $this->db->get_where('petugas', ['id' => $id])->row();
    }
    
}
