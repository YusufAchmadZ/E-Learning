<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{

    public function gambar1()
    {
        return $this->db->table('home')
            ->where('judul', 's1')
            ->get()->getResultArray();
    }
    public function gambar2()
    {
        return $this->db->table('home')
            ->where('judul', 's2')
            ->get()->getResultArray();
    }
    public function gambar3()
    {
        return $this->db->table('home')
            ->where('judul', 's3')
            ->get()->getResultArray();
    }

    public function login()
    {
        return $this->db->table('info')
            ->where('id_info', '1')
            ->get()->getResultArray();
    }
    public function learning()
    {
        return $this->db->table('info')
            ->where('id_info', '3')
            ->get()->getResultArray();
    }
    public function password()
    {
        return $this->db->table('info')
            ->where('id_info', '4')
            ->get()->getResultArray();
    }
    public function detail_home()
    {
        return $this->db->table('home')->get()->getResultArray();
    }
    public function edit_sampul($id_home)
    {
        return $this->db->table('home')->where('id_home', $id_home)->get()->getRowArray();
    }
    public function update_sampul($data, $id_home)
    {
        return $this->db->table('home')->update($data, array('id_home' => $id_home));
    }

    public function get_info()
    {
        return $this->db->table('info')
            ->get()->getResultArray();
    }
    public function edit_info($id_info)
    {
        return $this->db->table('info')->where('id_info', $id_info)->get()->getRowArray();
    }

    public function update_info($data, $id_info)
    {
        return $this->db->table('info')->update($data, array('id_info' => $id_info));
    }
    public function total_guru()
    {
        return $this->db->table('guru')

            ->get()->getResultArray();
    }

    public function get_kelas()
    {
        return $this->db->table('kelas')
            ->get()->getResultArray();
    }

    // Menu Guru User

    public function get_gurua()
    {
        return $this->db->table('guru')
            ->join('mapel', 'mapel.kode_guru=guru.kode_guru')
            ->like('kelas', '7')
            ->get()->getResultArray();
    }
    public function get_gurub()
    {
        return $this->db->table('guru')
            ->join('mapel', 'mapel.kode_guru=guru.kode_guru')
            ->like('kelas', '8')
            ->get()->getResultArray();
    }
    public function get_guruc()
    {
        return $this->db->table('guru')
            ->join('mapel', 'mapel.kode_guru=guru.kode_guru')
            ->like('kelas', '9')
            ->get()->getResultArray();
    }

    public function pesan($id_guru)
    {
        return $this->db->table('guru')
            ->where('id_guru', $id_guru)
            ->get()->getRowArray();
    }

    public function tambah_pesan($data)
    {
        return $this->db->table('pesan')->insert($data);
    }
}
