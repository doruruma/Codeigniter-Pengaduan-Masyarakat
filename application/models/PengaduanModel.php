<?php

class PengaduanModel extends CI_Model
{

    // Form Validation
    public function validation()
    {
        $this->form_validation->set_rules('tempat', 'Tempat', 'required')
            ->set_rules('date', 'Tanggal', 'required')
            ->set_rules('aduan', 'Aduan', 'required|trim|min_length[10]');
    }


    // Form Handler
    public function insert()
    {
        $aduan = $this->input->post('aduan');
        $date = $this->input->post('date');
        $tempat = $this->input->post('tempat');
        $data = [
            'id_masyarakat' => $this->session->user['id'],
            'date' => $date,
            'laporan' => $aduan,
            'tempat' => $tempat,
            'date_created' => date('d-m-y'),
            'id_status' => 0
        ];
        $this->db->insert('pengaduan', $data);
        $id_pengaduan = $this->db->insert_id();

        $imgCount = count($_FILES['images']['name']);
        for ($i = 0; $i < $imgCount; $i++) {
            if (!empty($_FILES['images']['name'][$i])) {
                // new var
                $_FILES['img']['name'] = $_FILES['images']['name'][$i];
                $_FILES['img']['type'] = $_FILES['images']['type'][$i];
                $_FILES['img']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
                $_FILES['img']['error'] = $_FILES['images']['error'][$i];
                $_FILES['img']['size'] = $_FILES['images']['size'][$i];
                // config
                $config = [
                    'upload_path' => './assets/img/pengaduan/',
                    'allowed_types' => 'jpg|jpeg|png',
                    'max_size' => '6000',
                    'encrypt_name' => true
                ];
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('img')) {
                    $imgName = $this->upload->data('file_name');
                    $this->db->insert('img', ['id_pengaduan' => $id_pengaduan, 'img' => $imgName]);
                } else { 
                    flashAlert('error', $this->upload->display_errors());
                    redirect('public/pengaduan');
                }
            }
        }
        flashAlert('success', 'Berhasil Input Pengaduan');
        redirect('public/pengaduan');
    }


    // API
    public function getAllPengaduan()
    {
        return $this->db->select('pengaduan.*, masyarakat.nama, masyarakat.nik')->from('pengaduan')
            ->join('masyarakat', 'pengaduan.id_masyarakat = masyarakat.id')->get()->result();
    }

    public function getPengaduan($id)
    {
        return $this->db->select('pengaduan.*, masyarakat.*')->from('pengaduan')->where('pengaduan.id', $id)
            ->join('masyarakat', 'pengaduan.id_masyarakat = masyarakat.id')->get()->row();
    }

    public function getPengaduanByMasyarakat($id)
    {
        return $this->db->select('pengaduan.*, status.status')->from('pengaduan')->where('pengaduan.id_masyarakat', $id)
            ->join('status', 'pengaduan.id_status = status.id')
            ->get()->result();
    }
}
