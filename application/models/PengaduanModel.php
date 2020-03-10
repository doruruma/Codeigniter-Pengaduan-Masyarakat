<?php

class PengaduanModel extends CI_Model
{

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

}
