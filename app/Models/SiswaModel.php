<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    public function get_kelas()
    {
        return $this->db->table('kelas')
            ->get()->getResultArray();
    }
    public function detail_kelas($id_kelas)
    {
        return $this->db->table('kelas')
            ->join('siswa', 'siswa.kelas=kelas.kelas')
            ->where('id_kelas', $id_kelas)
            ->get()->getResultArray();
    }

    public function kelasa($id_kelas)
    {
        return $this->db->table('siswa')
            ->join('kelas', 'kelas.kelas=siswa.kelas')
            ->where('id_kelas', $id_kelas)
            ->like('level', '1')
            ->get()->getResultArray();
    }

    public function kelasga()
    {
        return $this->db->table('siswa')
            ->where('kelas', '7')
            ->like('level', '1')
            ->get()->getResultArray();
    }

    public function kelasb($id_kelas)
    {
        return $this->db->table('siswa')
            ->join('kelas', 'kelas.kelas=siswa.kelas')
            ->where('id_kelas', $id_kelas)
            ->like('level', '2')
            ->get()->getResultArray();
    }
    public function kelasc($id_kelas)
    {
        return $this->db->table('siswa')
            ->join('kelas', 'kelas.kelas=siswa.kelas')
            ->where('id_kelas', $id_kelas)
            ->like('level', '3')
            ->get()->getResultArray();
    }
    public function tambah_siswa($data)
    {
        return $this->db->table('siswa')->insert($data);
    }
    public function edit_siswa($id_siswa)
    {
        return $this->db->table('siswa')->where('id_siswa', $id_siswa)->get()->getRowArray();
    }
    public function update_siswa($data, $id_siswa)
    {
        return $this->db->table('siswa')->update($data, array('id_siswa' => $id_siswa));
    }
    public function delete_siswa($id_siswa)
    {
        return $this->db->table('siswa')->delete(array('id_siswa' => $id_siswa));
    }

    public function tambah_socre($id_siswa)
    {
        return $this->db->table('siswa')
            ->where('id_siswa', $id_siswa)
            ->get()->getRowArray();
    }

    public function data($id_siswa)
    {
        return $this->db->table('siswa')
            ->join('kelas', 'kelas.sub_kelas=siswa.sub_kelas')
            ->where('id_siswa', $id_siswa)
            ->get()->getResultArray();
    }

    // TAMPILAN NILAI SISWA

    public function r_nilai($id_siswa)
    {
        return $this->db->table('score')
            ->join('siswa', 'siswa.nis=score.nis')
            ->where('id_siswa', $id_siswa)
            ->get()->getRowArray();
    }

    public function kode_nilai()
    {
        return $this->db->table('siswa')
            ->get()->getResultArray();
    }

    public function tambah_data($data)
    {
        return $this->db->table('score')
            ->insert($data);
    }

    public function nilai($id_siswa)
    {
        return $this->db->table('score')
            ->join('nilai', 'nilai.kode_nilai=score.kode_nilai')
            ->join('siswa', 'siswa.nis=score.nis')
            ->where('id_siswa', $id_siswa)
            ->get()->getResultArray();
    }

    public function score($id_siswa)
    {
        return $this->db->table('score')
            ->join('siswa', 'siswa.nis=score.nis')
            ->where('id_siswa', $id_siswa)
            ->get()->getRowArray();
    }


    public function tambah_nilai($data)
    {
        return $this->db->table('nilai')
            ->insert($data);
    }

    public function edit_nilai($id_siswa)
    {
        return $this->db->table('score')
            ->join('siswa', 'siswa.nis=score.nis')
            ->join('nilai', 'nilai.kode_nilai=score.kode_nilai')
            ->where('id_siswa', $id_siswa)
            ->get()->getResultArray();
    }
    public function public($id_siswa)
    {
        return $this->db->table('siswa')
            ->where('id_siswa', $id_siswa)
            ->get()->getRowArray();
    }

    public function update_nilai($data, $id_nilai)
    {
        return $this->db->table('nilai')
            ->update($data, array('id_nilai' => $id_nilai));
    }

    public function delete_nilai($id_nilai)
    {
        return $this->db->table('nilai')->delete(array('id_nilai' => $id_nilai));
    }

    public function hasil($id_tugas)
    {
        return $this->db->table('hasil')
            ->join('siswa', 'siswa.nis=hasil.nis')
            ->join('tugas', 'tugas.kode_tugas=hasil.kode_tugas')
            ->where('id_tugas', $id_tugas)
            ->get()->getResultArray();
    }
}
