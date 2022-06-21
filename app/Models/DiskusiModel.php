<?php

namespace App\Models;

use CodeIgniter\Model;

class DiskusiModel extends Model
{

    // Front End
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


    public function komentar_siswa($id_posting)
    {
        return $this->db->table('komentar')
            ->join('posting', 'posting.kode_postingan=komentar.kode_postingan')
            ->join('siswa', 'siswa.nis=komentar.nis')
            ->where('id_posting', $id_posting)
            ->get()->getResultArray();
    }
    public function komentar_balas($id_posting)
    {
        return $this->db->table('komentar')
            ->join('balasan', 'balasan.kode_balas=komentar.kode_balas')
            ->join('posting', 'posting.kode_postingan=komentar.kode_postingan')
            ->join('siswa', 'siswa.nis=balasan.nis')
            ->where('id_posting', $id_posting)
            ->get()->getResultArray();
    }
    public function komentar_guru($id_posting)
    {
        return $this->db->table('komentar')
            ->join('posting', 'posting.kode_postingan=komentar.kode_postingan')
            ->join('guru', 'guru.nig=komentar.nig')
            ->where('id_posting', $id_posting)
            ->get()->getResultArray();
    }

    public function get_komen($id_posting)
    {
        return $this->db->table('komentar')
            ->join('posting', 'posting.kode_postingan=komentar.kode_postingan')
            ->where('id_posting', $id_posting)
            ->get()->getRowArray();
    }
    public function get_posting($id_posting)
    {
        return $this->db->table('posting')
            ->join('guru', 'guru.nig=posting.nig')
            ->where('id_posting', $id_posting)
            ->get()->getRowArray();
    }

    public function komen_guru($id_komentar)
    {
        return $this->db->table('komentar')
            ->join('siswa', 'siswa.nis=komentar.nis')
            ->where('id_komentar', $id_komentar)
            ->get()->getRowArray();
    }

    public function komen_siswa($id_komentar)
    {
        return $this->db->table('komentar')
            ->join('guru', 'guru.nig=komentar.nig')
            ->where('id_komentar', $id_komentar)
            ->get()->getRowArray();
    }

    public function tambah_balas($data)
    {
        return $this->db->table('balasan')->insert($data);
    }

    public function tambah_posting($data)
    {
        return $this->db->table('posting')->insert($data);
    }

    public function edit_view($id_posting)
    {
        return $this->db->table('posting')
            ->where('id_posting', $id_posting)
            ->get()->getRowArray();
    }

    public function update_postingan($data, $id_posting)
    {
        return $this->db->table('posting')
            ->update($data, array('id_posting' => $id_posting));
    }

    public function delete_posting($id_posting)
    {
        return $this->db->table('posting')->delete(array('id_posting' => $id_posting));
    }

    public function tambah_komen($data)
    {
        return $this->db->table('komentar')->insert($data);
    }
}
