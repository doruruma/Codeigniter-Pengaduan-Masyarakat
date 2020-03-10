<?php

class DitanggapiModel extends CI_Model
{

    public function getAllTanggapan()
    {
        return $this->db->select('tanggapan.*, pengaduan.*, masyarakat.nik, masyarakat.nama')->from('tanggapan')
            ->join('pengaduan', 'tanggapan.id_pengaduan = pengaduan.id')
            ->join('masyarakat', 'pengaduan.id_masyarakat = masyarakat.id')->get()->result();
    }

    public function getTanggapan($id)
    {
        return $this->db->select('tanggapan.tanggapan, tanggapan.date as tanggap_date, pengaduan.*, masyarakat.*, petugas.nama as petugas')->from('tanggapan')->where('tanggapan.id', $id)
            ->join('pengaduan', 'tanggapan.id_pengaduan = pengaduan.id')
            ->join('masyarakat', 'pengaduan.id_masyarakat = masyarakat.id')
            ->join('petugas', 'tanggapan.id_petugas = petugas.id')->get()->row();
    }

}
