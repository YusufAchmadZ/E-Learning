<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
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

    public function profil()
    {
        return $this->db->table('siswa')
            ->get()->getRowArray();
    }

    public function get_postinga($id_diskusi)
    {
        return $this->db->table('posting')
            ->join('diskusi', 'diskusi.kode_komentar=posting.kode_komentar')
            ->join('forum', 'forum.kode_forum=posting.kode_forum')
            ->join('guru', 'guru.nig=posting.nig')
            ->like('level', '1')
            ->where('id_diskusi', $id_diskusi)
            ->get()->getResultArray();
    }
    public function get_postingb($id_diskusi)
    {
        return $this->db->table('posting')
            ->join('diskusi', 'diskusi.kode_komentar=posting.kode_komentar')
            ->join('forum', 'forum.kode_forum=posting.kode_forum')
            ->join('guru', 'guru.nig=posting.nig')
            ->like('level', '2')
            ->where('id_diskusi', $id_diskusi)
            ->get()->getResultArray();
    }
    public function get_postingc($id_diskusi)
    {
        return $this->db->table('posting')
            ->join('diskusi', 'diskusi.kode_komentar=posting.kode_komentar')
            ->join('forum', 'forum.kode_forum=posting.kode_forum')
            ->join('guru', 'guru.nig=posting.nig')
            ->like('level', '3')
            ->where('id_diskusi', $id_diskusi)
            ->get()->getResultArray();
    }

    public function kuis($id_kuis)
    {
        return $this->db->table('kuis')
            ->join('mapel', 'mapel.kode_kuis=kuis.kode_kuis')
            ->join('tugas', 'tugas.kode_soal=kuis.kode_soal')
            ->where('id_kuis', $id_kuis)
            ->get()->getResultArray();
    }

    public function pertanyaan($id_tugas)
    {
        return $this->db->table('soal')
            ->join('tugas', 'tugas.kode_tugas=soal.kode_tugas')
            ->where('id_tugas', $id_tugas)
            ->get()->getResultArray();
    }

    public function tambah($hasil)
    {
        return $this->db->table('hasil')->insert($hasil);
    }
}
