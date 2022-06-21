<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model
{

    // Kelas 7
    public function get_kelasa()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('kode_kelas', 'k07')
            ->get()->getResultArray();
    }
    // Kelas 8

    public function get_kelasb()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('kode_kelas', 'k08')
            ->get()->getResultArray();
    }

    // Kelas 9

    public function get_kelasc()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('kode_kelas', 'k09')
            ->get()->getResultArray();
    }

    public function tambah_mapel_c($data)
    {
        return $this->db->table('mapel')->insert($data);
    }

    public function delete_mapel_c($id_mapel)
    {
        return $this->db->table('mapel')

            ->delete(['id_mapel' => $id_mapel]);
    }
    public function edit_c($id_mapel)
    {

        return $this->db->table('mapel')->where('id_mapel', $id_mapel)
            ->get()->getRowArray();
    }

    public function update_c($data, $id_mapel)
    {
        return $this->db->table('mapel')->update($data, array('id_mapel' => $id_mapel));
    }
}
