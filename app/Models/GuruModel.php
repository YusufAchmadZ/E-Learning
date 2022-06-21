<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruModel extends Model
{
    public function get_gurua()
    {
        return $this->db->table('guru')
            ->join('mapel', 'mapel.kode_mapel=guru.kode_mapel')
            ->like('kelas', '7')
            ->get()->getResultArray();
    }
    public function get_gurub()
    {
        return $this->db->table('guru')
            ->join('mapel', 'mapel.kode_mapel=guru.kode_mapel')
            ->like('kelas', '8')
            ->get()->getResultArray();
    }
    public function get_guruc()
    {
        return $this->db->table('guru')
            ->join('mapel', 'mapel.kode_mapel=guru.kode_mapel')
            ->like('kelas', '9')
            ->get()->getResultArray();
    }



    public function tambah_guru($data)
    {
        return $this->db->table('guru')->insert($data);
    }
    public function edit_guru($id_guru)
    {
        return $this->db->table('guru')->where('id_guru', $id_guru)->get()->getRowArray();
    }
    public function update_guru($data, $id_guru)
    {
        return $this->db->table('guru')->update($data, array('id_guru' => $id_guru));
    }
    public function delete_guru($id_guru)
    {
        return $this->db->table('guru')->delete(array('id_guru' => $id_guru));
    }


    public function tambah_user($data)
    {
        return $this->db->table('users')->insert($data);
    }



    // public function cari_guru($id_guru)
    // {
    //     return $this->db->table('guru')->where('id_guru', $id_guru)->get()->getrow();
    // }
}
