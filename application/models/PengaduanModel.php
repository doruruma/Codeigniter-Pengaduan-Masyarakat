<?php

class PengaduanModel extends CI_Model
{
    
    // API
    public function getAllPengaduan()
    {
        return $this->db->select('pengaduan.*, masyarakat.nama, masyarakat.nik')->from('pengaduan')
            ->join('masyarakat', 'pengaduan.id_masyarakat = masyarakat.id')->get()->result();
    }

}
