<?php

namespace App\Controllers;

use CodeIgniter\Controller;



class User extends BaseController
{
    protected $db, $builder;
    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }

    public function profil()
    {

        $data = [
            'tittle'  => 'Profil',
        ];
        return view('user/profil', $data);
    }

    public function nilai($id_siswa)
    {
        $nilai = $this->db->table('score')
            ->join('nilai', 'nilai.kode_nilai=score.kode_nilai')
            ->join('siswa', 'siswa.nis=score.nis')
            ->where('id_siswa', $id_siswa)
            ->get()->getResultArray();
        $data = [
            'tittle'  => 'Nilai',
            'nilai'   => $nilai,
        ];
        return view('user/nilai', $data);
    }

    public function kuis()
    {

        $data = [
            'tittle'  => 'Kuis'
        ];
        return view('user/kuis', $data);
    }

    public function pertanyaan($id_tugas)
    {
        $jumlah = $this->db->table('soal')
            ->join('tugas', 'tugas.kode_tugas=soal.kode_tugas')
            ->where('id_tugas', $id_tugas)
            ->get()->getRowArray();
        $kuis = $this->db->table('soal')
            ->join('tugas', 'tugas.kode_tugas=soal.kode_tugas')
            ->where('id_tugas', $id_tugas)
            ->get()->getResultArray();
        $data = [
            'id_tugas' => $id_tugas,
            'tittle' => 'Kuis',
            'tittleKuis' => 'Kerjakan Pilihan Ganda Di Bawah ini dengan Benar !',
            'jumlah' => $jumlah,
            'kuis'  => $kuis
        ];

        echo view('user/kuis', $data);
    }

    public function proses()
    {

        $param = $this->request->getPost();
        $id_tugas = $this->request->getPost('id_tugas');
        $data = $this->db->table('soal')
            ->join('tugas', 'tugas.kode_tugas=soal.kode_tugas')
            ->where('id_tugas', $id_tugas)
            ->get()->getResultArray();
        $nilai = 0;

        foreach ($data as $key => $value) {
            if ($param['pilihan' . $value['id_soal']] == $value['jawaban']) {
                $nilai = $nilai + 1;
            }
        }
        $total = ($nilai / count($data)) * 100;

        $hasil = [
            'nilai' => $total,
            'nis'  => $this->request->getPost('nis'),
            'kode_tugas' => $this->request->getPost('kode_tugas'),
        ];
        $this->db->table('hasil')->insert($hasil);

        session()->setFlashdata('success', 'Kuis Dikerjakan');
        return redirect()->to(base_url('home/siswa'));
    }

    public function daftar_kuis($id_kuis)
    {
        $kuis =  $this->db->table('kuis')
            ->join('mapel', 'mapel.kode_kuis=kuis.kode_kuis')
            ->join('tugas', 'tugas.kode_soal=kuis.kode_soal')
            ->where('id_kuis', $id_kuis)
            ->get()->getResultArray();
        $data = [
            'tittle' => 'kuis',
            'kuiss' => $kuis,

        ];
        return view('user/daftar_kuis', $data);
    }

    // MATERI 

    public function materi($id_materi)
    {


        $materi = $this->db->table('data_materi')
            ->join('forum', 'forum.kode_forum=data_materi.kode_forum')
            ->join('materi', 'materi.kode_data=data_materi.kode_data')
            ->where('id_materi', $id_materi)
            ->get()->getResultArray();

        $data = [
            'tittle'  => 'Materi Pelajaran',
            'materi'  => $materi,
        ];
        return view('user/materi', $data);
    }

    public function foruma($id_diskusi)
    {
        $diskusia = $this->db->table('posting')
            ->join('diskusi', 'diskusi.kode_komentar=posting.kode_komentar')
            ->join('forum', 'forum.kode_forum=posting.kode_forum')
            ->join('guru', 'guru.nig=posting.nig')
            ->like('level', '1')
            ->where('id_diskusi', $id_diskusi)
            ->get()->getResultArray();
        $data = [
            'tittle' => 'Forum Diskusi',
            'posting' => $diskusia
        ];
        return view('user/forum', $data);
    }

    public function forumb($id_diskusi)
    {
        $diskusib = $this->db->table('posting')
            ->join('diskusi', 'diskusi.kode_komentar=posting.kode_komentar')
            ->join('forum', 'forum.kode_forum=posting.kode_forum')
            ->join('guru', 'guru.nig=posting.nig')
            ->like('level', '1')
            ->where('id_diskusi', $id_diskusi)
            ->get()->getResultArray();
        $data = [
            'tittle' => 'Forum Diskusi',
            'posting' => $diskusib
        ];
        return view('user/forum', $data);
    }

    public function forumc($id_diskusi)
    {
        $diskusic = $this->db->table('posting')
            ->join('diskusi', 'diskusi.kode_komentar=posting.kode_komentar')
            ->join('forum', 'forum.kode_forum=posting.kode_forum')
            ->join('guru', 'guru.nig=posting.nig')
            ->like('level', '1')
            ->where('id_diskusi', $id_diskusi)
            ->get()->getResultArray();
        $data = [
            'tittle' => 'Forum Diskusi',
            'posting' => $diskusic
        ];
        return view('user/forum', $data);
    }

    public function diskusi()
    {

        $data = [
            'tittle'  => 'Diskusi Online'
        ];
        return view('user/diskusi', $data);
    }

    public function e_siswa($id_siswa)
    {
        $siswa = $this->db->table('siswa')->where('id_siswa', $id_siswa)->get()->getRowArray();
        $data = [
            'tittle' => 'Edit Data Siswa',
            'siswa'  => $siswa
        ];
        return view('user/e_siswa', $data);
    }

    public function inbox($id_siswa)
    {
        $inbox = $this->db->table('pesan')
            ->join('siswa', 'siswa.nis=pesan.nis')
            ->join('guru', 'guru.kode_guru=pesan.kode_guru')
            ->where('id_siswa', $id_siswa)
            ->get()->getResultArray();
        $send = $this->db->table('pesan_guru')
            ->join('siswa', 'siswa.nis=pesan_guru.nis')
            ->join('guru', 'guru.kode_guru=pesan_guru.kode_guru')
            ->get()->getResultArray();
        $data = [
            'tittle' => 'Inbox',
            'inbox'  => $inbox,
            'send'  => $send,
        ];
        return view('user/inbox', $data);
    }
}
