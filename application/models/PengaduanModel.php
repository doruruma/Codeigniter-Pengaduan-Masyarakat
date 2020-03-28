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
        $img = $_FILES['img1']['name'];
        if ($img) { }
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
