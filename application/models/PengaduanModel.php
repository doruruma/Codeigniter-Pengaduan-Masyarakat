<?php

class PengaduanModel extends CI_Model
{

    // API
    public function getAllPengaduan()
    {
        return $this->db->select('pengaduan.*, masyarakat.nama, masyarakat.nik')->from('pengaduan')
            ->join('masyarakat', 'pengaduan.id_masyarakat = masyarakat.id')->get()->result();
    }

    public function getAllDitanggapi()
    {
        return $this->db->select('tanggapan.*, pengaduan.*, masyarakat.nama, masyarakat.nik')->from('tanggapan')
            ->join('pengaduan', 'tanggapan.id_pengaduan = pengaduan.id')
            ->join('masyarakat', 'pengaduan.id_masyarakat = masyarakat.id')->get()->result();
    }
    
}
