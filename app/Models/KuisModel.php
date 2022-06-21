<?php

namespace App\Models;

use CodeIgniter\Model;

class KuisModel extends Model
{
    public function kuis($id_mapel)
    {
        return $this->db->table('kuis')
            ->join('mapel', 'mapel.kode_kuis=kuis.kode_kuis')
            ->join('tugas', 'tugas.kode_soal=kuis.kode_soal')
            ->where('id_mapel', $id_mapel)
            ->get()->getResultArray();
    }

    public function tambah_kuis($id_tugas)
    {
        return $this->db->table('tugas')
            ->join('kuis', 'kuis.kode_soal=tugas.kode_soal')
            ->where('id_tugas', $id_tugas)
            ->get()->getRowArray();
    }

    public function tambah_pertemuan($id_mapel)
    {
        return $this->db->table('kuis')
            ->join('mapel', 'mapel.kode_kuis=kuis.kode_kuis')
            ->where('id_mapel', $id_mapel)
            ->get()->getRowArray();
    }

    public function tambah_forum($data)
    {
        return $this->db->table('tugas')->insert($data);
    }

    public function get_soal()
    {
        return $this->db->table('soal')
            ->get()->getResultArray();
    }

    public function detail_kuis($id_tugas)
    {
        return $this->db->table('soal')
            ->join('tugas', 'tugas.kode_tugas=soal.kode_tugas')
            ->where('id_tugas', $id_tugas)
            ->get()->getResultArray();
    }

    public function tambah_soal($data)
    {
        return $this->db->table('soal')->insert($data);
    }

    public function edit_soal($id_soal)
    {
        return $this->db->table('soal')
            ->join('tugas', 'tugas.kode_tugas=soal.kode_tugas')
            ->where('id_soal', $id_soal)
            ->get()->getRowArray();
    }

    public function update_soal($data, $id_soal)
    {
        return $this->db->table('soal')
            ->join('tugas', 'tugas.kode_tugas=soal.kode_tugas')
            ->update($data, array('id_soal' => $id_soal));
    }

    public function v_kuis($id_kuis)
    {
        return $this->db->table('soal')
            ->join('kuis', 'kuis.kode_soal=soal.kode_soal')
            ->where('id_kuis', $id_kuis)
            ->get()->getResultArray();
    }

    public function pertanyaan($id_kuis)
    {
        return $this->db->table('soal')
            ->join('kuis', 'kuis.kode_soal=soal.kode_soal')
            ->where('id_kuis', $id_kuis)
            ->get()->getResultArray();
    }

    public function delete_soal($id_soal)
    {
        return $this->db->table('soal')->delete(array('id_soal' => $id_soal));
    }

    public function jawab($id_kuis)
    {
        return $this->db->table('soal')
            ->join('kuis', 'kuis.kode_soal=soal.kode_soal')
            ->where('id_kuis', $id_kuis)
            ->get()->getResultArray();
    }


    public function j_kuis($id_kuis)
    {
        return $this->db->table('soal')
            ->join('kuis', 'kuis.kode_soal=soal.kode_soal')
            ->where('id_kuis', $id_kuis)
            ->get()->getRowArray();
    }
}
