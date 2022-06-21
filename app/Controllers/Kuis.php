<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\KuisModel;

class Kuis extends BaseController
{
    protected $KuisModel;

    public function __construct()
    {

        $this->KuisModel = new KuisModel();
    }

    public function kuis($id_mapel)
    {
        $data = [
            'tittle' => 'kuis',
            'kuiss' => $this->KuisModel->kuis($id_mapel),
            'tambah' => $this->KuisModel->tambah_pertemuan($id_mapel),
            'isi' => 'kuis/kuis',
        ];
        echo view('layout/wrapper', $data);
    }

    public function tambah_kuis()
    {

        $data = [
            'kode_tugas' => $this->request->getPost('kode_tugas'),
            'kode_soal' => $this->request->getPost('kode_soal'),
        ];
        $this->KuisModel->tambah_forum($data);

        session()->setFlashdata('success', 'Kuis Di Tambah');
        return redirect()->to(base_url('mapel/guru'));
    }

    public function detail_kuis($id_tugas)
    {

        $data = [
            'tittle' => 'Daftar Kuis',
            'dkuis'   => $this->KuisModel->detail_kuis($id_tugas),
            'tambah' => $this->KuisModel->tambah_kuis($id_tugas),
            'isi'   => 'kuis/detail_kuis'
        ];
        echo view('layout/wrapper', $data);
    }

    public function edit_soal($id_soal)
    {
        $data = [
            'tittle' => 'Edit Soal Pertanyaan',
            'edit'  => $this->KuisModel->edit_soal($id_soal),
            'isi'   => 'kuis/edit_kuis'
        ];
        echo view('layout/wrapper', $data);
    }

    public function update($id_soal)
    {
        $data = [
            'kode_tugas' => $this->request->getPost('kode_tugas'),
            'no_soal' => $this->request->getPost('no_soal'),
            'soal' => $this->request->getPost('soal'),
            'a' => $this->request->getPost('a'),
            'b' => $this->request->getPost('b'),
            'c' => $this->request->getPost('c'),
            'd' => $this->request->getPost('d'),
            'jawaban' => $this->request->getPost('jawaban'),
        ];
        $this->KuisModel->update_soal($data, $id_soal);

        session()->setFlashdata('success', 'Di Update');
        return redirect()->to(base_url('kuis/edit_soal/' . $id_soal));
    }

    public function v_kuis($id_kuis)
    {

        $data = [
            'tittle' => 'Kuis',
            'tittleKuis' => 'Kerjakan Pilihan Ganda Di Bawah ini dengan Benar !',
            'kuis'  => $this->KuisModel->v_kuis($id_kuis),
            'jumlah' => $this->KuisModel->j_kuis($id_kuis),
            'pager'  => $this->KuisModel->pager,
            'isi'    => 'kuis/v_kuis',
        ];
        echo view('layout/wrapper', $data);
    }


    public function jawab($id_kuis)
    {
        $data = [
            'tittle' => 'Kuis',
            'tittleKuis' => 'Kerjakan Pilihan Ganda Di Bawah ini dengan Benar !',
            'jumlah' => $this->KuisModel->j_kuis($id_kuis),
            'kuis'  => $this->KuisModel->jawab($id_kuis)
        ];

        echo view('user/jawab', $data);
    }

    public function tambah_soal($id_tugas)
    {
        $data = [
            'tittle' => 'Tambah Kuis ',
            'isi'   => 'kuis/t_kuis',
            'tambah' => $this->KuisModel->tambah_kuis($id_tugas),
        ];
        echo view('layout/wrapper', $data);
    }

    public function tambah()
    {

        $data = [
            'kode_tugas' => $this->request->getPost('kode_tugas'),
            'no_soal' => $this->request->getPost('no_soal'),
            'soal' => $this->request->getPost('soal'),
            'a' => $this->request->getPost('a'),
            'b' => $this->request->getPost('b'),
            'c' => $this->request->getPost('c'),
            'd' => $this->request->getPost('d'),
            'jawaban' => $this->request->getPost('jawaban'),
        ];
        $this->KuisModel->tambah_soal($data);

        session()->setFlashdata('success', 'Ditambahkan');
        return redirect()->to(base_url('mapel/guru'));
    }

    public function delete($id_soal)
    {
        $this->KuisModel->delete_soal($id_soal);


        session()->setFlashdata('success', 'Soal Dihapus');
        return redirect()->to(base_url('mapel/guru'));
    }

    public function pertanyaan($id_kuis)
    {
        $data = [
            'id_kuis' => $id_kuis,
            'tittle' => 'Kuis',
            'tittleKuis' => 'Kerjakan Pilihan Ganda Di Bawah ini dengan Benar !',
            'jumlah' => $this->KuisModel->j_kuis($id_kuis),
            'kuis'  => $this->KuisModel->pertanyaan($id_kuis)
        ];

        echo view('user/kuis', $data);
    }
    public function proses()
    {

        $param = $this->request->getPost();
        $id_kuis = $this->request->getPost('id_kuis');
        $data = $this->KuisModel->pertanyaan($id_kuis);
        $nilai = 0;

        foreach ($data as $key => $value) {
            if ($param['pilihan' . $value['id_soal']] == $value['jawaban']) {
                $nilai = $nilai + 1;
            }
        }
        $total = ($nilai / count($data)) * 100;

        echo ceil($total);
    }
}
