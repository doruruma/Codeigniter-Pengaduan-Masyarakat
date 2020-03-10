<?php

class DitanggapiModel extends CI_Model
{

    public function getAllTanggapan()
    {
        return $this->db->select('tanggapan.*, pengaduan.*, masyarakat.nik, masyarakat.nama')->from('tanggapan')
            ->join('pengaduan', 'tanggapan.id_pengaduan = pengaduan.id')
            ->join('masyarakat', 'pengaduan.id_masyarakat = masyarakat.id')->get()->result();
    }

}
