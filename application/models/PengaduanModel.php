<?php

class PengaduanModel extends CI_Model
{

    // Form Validation
    public function validation()
    {
        $this->form_validation->set_rules('');
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
