<?php

namespace App\Models;

use CodeIgniter\Model;

class SumberModel extends Model
{
    public function get_sumbera()
    {
        return $this->db->table('sumber')
            ->join('mapel', 'mapel.kode_mapel=sumber.kode_mapel')
            ->like('kelas', '7')
            ->get()->getResultArray();
    }
    public function get_sumberb()
    {
        return $this->db->table('sumber')
            ->join('mapel', 'mapel.kode_mapel=sumber.kode_mapel')
            ->like('kelas', '8')
            ->get()->getResultArray();
    }
    public function get_sumberc()
    {
        return $this->db->table('sumber')
            ->join('mapel', 'mapel.kode_mapel=sumber.kode_mapel')
            ->like('kelas', '9')
            ->get()->getResultArray();
    }


    public function s_detail($id_sumber)
    {
        return $this->db->table('sumber')
            ->join('mapel', 'mapel.kode_mapel=sumber.kode_mapel')
            ->join('data_sumber', 'data_sumber.kode_sumber=sumber.kode_sumber')
            ->where('id_sumber', $id_sumber)
            ->get()->getResultArray();
    }

    public function tambah_detail($data)
    {
        return $this->db->table('data_sumber')->insert($data);
    }
    public function delete_data($id_data)
    {
        return $this->db->table('data_sumber')->delete(array('id_data' => $id_data));
    }

    public function edit_data($id_data)
    {
        return $this->db->table('data_sumber')
            ->where('id_data', $id_data)
            ->get()->getRowArray();
    }

    public function update_data($data, $id_data)
    {
        return $this->db->table('data_sumber')->update($data, array('id_data' => $id_data));
    }
}
