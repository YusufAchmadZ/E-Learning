<?php

namespace App\Models;

use CodeIgniter\Model;

class PesanModel extends Model
{

    public function inbox($id_guru)
    {
        return $this->db->table('pesan')
            ->join('siswa', 'siswa.nis=pesan.nis')
            ->join('guru', 'guru.kode_guru=pesan.kode_guru')
            ->where('id_guru', $id_guru)
            ->get()->getResultArray();
    }

    public function outbox($id_guru)
    {
        return $this->db->table('pesan_admin')
            ->join('admin', 'admin.email=pesan_admin.email')
            ->join('guru', 'guru.kode_guru=pesan_admin.kode_guru')
            ->where('id_guru', $id_guru)
            ->get()->getResultArray();
    }

    public function pesan_siswa($id_siswa)
    {
        return $this->db->table('siswa')
            ->where('id_siswa', $id_siswa)
            ->get()->getRowArray();
    }

    public function tambah_pesan($data)
    {
        return $this->db->table('pesan_guru')
            ->insert($data);
    }

    public function delete_pesan_guru($id_pesan)
    {
        return $this->db->table('pesan')->delete(array('id_pesan' => $id_pesan));
    }

    public function delete_pesan_admin($id_pesan_admin)
    {
        return $this->db->table('pesan_admin')->delete(array('id_pesan_admin' => $id_pesan_admin));
    }

    public function pesan_admin($id)
    {
        return $this->db->table('admin')
            ->where('id', $id)
            ->get()->getRowArray();
    }

    public function keluar($id_guru)
    {
        return $this->db->table('pesan_guru')
            ->join('siswa', 'siswa.nis=pesan_guru.nis')
            ->join('guru', 'guru.kode_guru=pesan_guru.kode_guru')
            ->where('id_guru', $id_guru)
            ->get()->getResultArray();
    }

    public function keluar_admin($id_guru)
    {
        return $this->db->table('pesan_guru')
            ->join('admin', 'admin.email=pesan_guru.email')
            ->join('guru', 'guru.kode_guru=pesan_guru.kode_guru')
            ->where('id_guru', $id_guru)
            ->get()->getResultArray();
    }

    // Admin 

    public function masuk($id)
    {
        return $this->db->table('pesan_guru')
            ->join('guru', 'guru.kode_guru=pesan_guru.kode_guru')
            ->join('admin', 'admin.email=pesan_guru.email')
            ->where('id', $id)
            ->get()->getResultArray();
    }

    public function keluar_guru($id)
    {
        return $this->db->table('pesan_admin')
            ->join('admin', 'admin.email=pesan_admin.email')
            ->join('guru', 'guru.kode_guru=pesan_admin.kode_guru')
            ->where('id', $id)
            ->get()->getResultArray();
    }

    public function pesan_guru($id_guru)
    {
        return $this->db->table('guru')
            ->where('id_guru', $id_guru)
            ->get()->getRowArray();
    }
    public function reply_admin($data)
    {
        return $this->db->table('pesan_admin')
            ->insert($data);
    }
    public function delete_pesan($id_pesan_guru)
    {
        return $this->db->table('pesan_guru')->delete(array('id_pesan_guru' => $id_pesan_guru));
    }
}
