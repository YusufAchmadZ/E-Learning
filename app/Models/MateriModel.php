<?php

namespace App\Models;

use CodeIgniter\Model;

class MateriModel extends Model
{

    public function v_materi($id_materi)
    {
        return $this->db->table('data_materi')
            ->join('forum', 'forum.kode_forum=data_materi.kode_forum')
            ->join('materi', 'materi.kode_data=data_materi.kode_data')
            ->where('id_materi', $id_materi)
            ->get()->getResultArray();
    }
    public function get_materi()
    {
        return $this->db->table('data_materi')
            ->get()->getResultArray();
    }

    public function tambah_materi($data)
    {
        return $this->db->table('data_materi')
            ->insert($data);
    }
    public function delete_data($id_data_materi)
    {
        return $this->db->table('data_materi')->delete(array('id_data_materi' => $id_data_materi));
    }
    public function edit_materi($id_data_materi)
    {
        return $this->db->table('data_materi')
            ->where('id_data_materi', $id_data_materi)
            ->get()->getRowArray();
    }
    public function update_materi($data, $id_data_materi)
    {
        return $this->db->table('data_materi')->update($data, array('id_data_materi' => $id_data_materi));
    }

    public function v_file($id_data_materi)
    {
        return $this->db->table('data_materi')
            ->where('id_data_materi', $id_data_materi)
            ->get()->getRowArray();
    }
}
