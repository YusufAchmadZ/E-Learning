<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\KelasModel;

class Kelas extends BaseController
{
    protected $KelasModel;

    public function __construct()
    {

        $this->KelasModel = new KelasModel();
    }

    // Kelas 7
    public function kelasa()
    {
        $data = [
            'tittle' => 'Mata Pelajaran Kelas 7',
            'kelasa' => $this->KelasModel->get_kelasa(),
            'isi'    => 'kelas/kelasa',
        ];
        echo view('layout/wrapper', $data);
    }

    public function learning_07()
    {
        $data = [
            'tittle' => 'Daftar Mata Pelajaran',
            'kelasa' => $this->KelasModel->get_kelasa(),
        ];
        echo view('user/learninga', $data);
    }

    // ----------------------------------------- Forum ----------------------------------------

    public function learning_a($id_mapel)
    {
        $data = [
            'tittle' => 'Forum Kelas 7',
            'learninga' => $this->KelasModel->learning_a($id_mapel),
            'tittleDiskusi' => 'Daftar Forum Diskusi',
            'diskusi'  => $this->KelasModel->get_diskusi(),
            'isi'    => 'learning/learning',
        ];
        echo view('layout/wrapper', $data);
    }



    public function v_kuis($id_kuis)
    {

        $data = [
            'tittle' => 'Kuis',
            'kuis'  => $this->KelasModel->v_kuis($id_kuis),
            'jumlah' => $this->KelasModel->j_kuis($id_kuis),
            'pager'  => $this->KelasModel->pager,
            'isi'    => 'learning/kuis',
        ];
        echo view('layout/wrapper', $data);
    }


    // Kelas 8

    public function kelasb()
    {
        $data = [
            'tittle' => 'Mata Pelajaran Kelas 8',
            'kelasb' => $this->KelasModel->get_kelasb(),
            'isi'    => 'kelas/kelasb',
        ];
        echo view('layout/wrapper', $data);
    }

    public function learning_08()
    {
        $data = [
            'tittle' => 'Daftar Mata Pelajaran',
            'kelasb' => $this->KelasModel->get_kelasb(),
        ];
        echo view('user/learningb', $data);
    }


    public function tambah_b()
    {
        $data = [
            'kode_kelas' => $this->request->getPost('kode_kelas'),
            'kode_pelajaran' => $this->request->getPost('kode_pelajaran'),
            'kode_mapel' => $this->request->getPost('kode_mapel'),
        ];
        $this->KelasModel->tambah_mapel_b($data);

        session()->setFlashdata('success', 'Data Berhasil Ditambahkan');
        return redirect()->to(base_url('kelas/kelasb'));
    }

    public function delete_b($id_mapel)
    {
        $this->KelasModel->delete_mapel_b($id_mapel);

        session()->setFlashdata('success', 'Data Berhasil Di Hapus');
        return redirect()->to(base_url('kelas/kelasb'));
    }
    public function edit_b($id_mapel)
    {
        $data = [
            'tittle' => 'Edit Data Mata Pelajaran Kelas 8',
            'kelasb' => $this->KelasModel->edit_b($id_mapel),
            'isi'    => 'kelas/edit_kelas_b',
        ];
        echo view('layout/wrapper', $data);
    }
    public function update_b($id_mapel)
    {
        $data = [
            'kode_kelas' => $this->request->getPost('kode_kelas'),
            'kode_pelajaran' => $this->request->getPost('kode_pelajaran'),
            'kode_mapel' => $this->request->getPost('kode_mapel'),
        ];
        $this->KelasModel->update_b($data, $id_mapel);

        session()->setFlashdata('success', 'Data Berhasil Dirubah');
        return redirect()->to(base_url('kelas/kelasb'));
    }


    // Kelas 9

    public function kelasc()
    {
        $data = [
            'tittle' => 'Mata Pelajaran Kelas 9',
            'kelasc' => $this->KelasModel->get_kelasc(),
            'isi'    => 'kelas/kelasc',
        ];
        echo view('layout/wrapper', $data);
    }
    // Fron End
    public function learning_09()
    {
        $data = [
            'tittle' => 'Daftar Mata Pelajaran',
            'kelasc' => $this->KelasModel->get_kelasc(),
        ];
        echo view('user/learningc', $data);
    }

    public function tambah_c()
    {
        $data = [
            'kode_kelas' => $this->request->getPost('kode_kelas'),
            'kode_pelajaran' => $this->request->getPost('kode_pelajaran'),
            'kode_mapel' => $this->request->getPost('kode_mapel'),
        ];
        $this->KelasModel->tambah_mapel_c($data);

        session()->setFlashdata('success', 'Data Berhasil Ditambahkan');
        return redirect()->to(base_url('kelas/kelasc'));
    }
    public function delete_c($id_mapel)
    {
        $this->KelasModel->delete_mapel_c($id_mapel);

        session()->setFlashdata('success', 'Data Berhasil Di Hapus');
        return redirect()->to(base_url('kelas/kelasc'));
    }
    public function edit_c($id_mapel)
    {
        $data = [
            'tittle' => 'Edit Data Mata Pelajaran Kelas 9',
            'kelasc' => $this->KelasModel->edit_c($id_mapel),
            'isi'    => 'kelas/edit_kelas_c',
        ];
        echo view('layout/wrapper', $data);
    }
    public function update_c($id_mapel)
    {
        $data = [
            'kode_kelas' => $this->request->getPost('kode_kelas'),
            'kode_pelajaran' => $this->request->getPost('kode_pelajaran'),
            'kode_mapel' => $this->request->getPost('kode_mapel'),
        ];
        $this->KelasModel->update_c($data, $id_mapel);

        session()->setFlashdata('success', 'Data Berhasil Dirubah');
        return redirect()->to(base_url('kelas/kelasc'));
    }
}
