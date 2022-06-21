<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DiskusiModel;
use DateTime;

class Diskusi extends BaseController
{
    protected $DiskusiModel;

    public function __construct()
    {

        $this->DiskusiModel = new DiskusiModel();
    }

    public function v_diskusia($id_diskusi)
    {
        $data = [
            'tittle' => 'Forum Diskusi',
            'posting' => $this->DiskusiModel->get_postinga($id_diskusi),
            'isi'      => 'diskusi/v_diskusia'
        ];
        echo view('layout/wrapper', $data);
    }

    public function v_diskusib($id_diskusi)
    {
        $data = [
            'tittle' => 'Forum Diskusi',
            'posting' => $this->DiskusiModel->get_postingb($id_diskusi),
            'isi'      => 'diskusi/v_diskusib'
        ];
        echo view('layout/wrapper', $data);
    }
    public function v_diskusic($id_diskusi)
    {
        $data = [
            'tittle' => 'Forum Diskusi',
            'posting' => $this->DiskusiModel->get_postingc($id_diskusi),
            'isi'      => 'diskusi/v_diskusic'
        ];
        echo view('layout/wrapper', $data);
    }

    public function diskusi($id_posting)
    {
        $data = [
            'tittle' => 'Diskusi Online',
            'status' => $this->DiskusiModel->get_posting($id_posting),
            'komen' => $this->DiskusiModel->komentar_siswa($id_posting),
            'guru' => $this->DiskusiModel->komentar_guru($id_posting),
            'balas' => $this->DiskusiModel->komentar_balas($id_posting),

        ];
        echo view('user/diskusi', $data);
    }
    // Front End end ..





    public function d_diskusi($id_posting)
    {
        $data = [
            'tittle' => 'Diskusi',
            'status' => $this->DiskusiModel->get_posting($id_posting),
            'guru' => $this->DiskusiModel->komentar_guru($id_posting),
            'komen' => $this->DiskusiModel->komentar_siswa($id_posting),
            'balas' => $this->DiskusiModel->komentar_balas($id_posting),
            'isi'      => 'diskusi/d_diskusi'
        ];
        echo view('layout/wrapper', $data);
    }

    public function komen_guru($id_komentar)
    {
        $data = [
            'tittle' => 'Komentar Guru',
            'guru'  => $this->DiskusiModel->komen_guru($id_komentar),
            'isi'  => 'diskusi/komentar'
        ];

        echo view('layout/wrapper', $data);
    }

    public function komen_siswa($id_komentar)
    {
        $data = [
            'tittle' => 'Komentar Postingan',
            'siswa'  => $this->DiskusiModel->komen_siswa($id_komentar)
        ];
        echo view('user/komentar', $data);
    }

    public function tambah_balas()
    {
        $data = [
            'nis' => $this->request->getPost('nis'),
            'isi_balas' => $this->request->getPost('isi_balas'),
            'kode_balas' => $this->request->getPost('kode_balas'),
            'date' => date('Y-m-d H:i:s'),
        ];
        $this->DiskusiModel->tambah_balas($data);

        session()->setFlashdata('success', 'Komentar Ditambahkan');
        return redirect()->to(base_url('home/siswa'));
    }

    public function tambah_posting()
    {
        $data = [
            'kode_komentar' => $this->request->getPost('kode_komentar'),
            'nig' => $this->request->getPost('nig'),
            'kode_postingan' => $this->request->getPost('kode_postingan'),
            'kode_forum' => $this->request->getPost('kode_forum'),
            'level' => $this->request->getPost('level'),
            'isi' => $this->request->getPost('isi'),
        ];
        $this->DiskusiModel->tambah_posting($data);

        session()->setFlashdata('success', 'Ditambahkan');
        return redirect()->to(base_url('mapel/guru'));
    }

    public function v_edit($id_posting)
    {
        $data = [
            'tittle' => 'Tambah Postingan',
            'postingan' => $this->DiskusiModel->edit_view($id_posting),
            'isi'   => 'diskusi/edit_diskusi'
        ];
        echo view('layout/wrapper', $data);
    }
    public function update_posting($id_posting)
    {
        $data = [
            'id_posting' => $id_posting,
            'kode_komentar' => $this->request->getPost('kode_komentar'),
            'nig' => $this->request->getPost('nig'),
            'kode_postingan' => $this->request->getPost('kode_postingan'),
            'kode_forum' => $this->request->getPost('kode_forum'),
            'isi' => $this->request->getPost('isi'),
        ];
        $this->DiskusiModel->update_postingan($data, $id_posting);

        session()->setFlashdata('success', 'Dirubah');
        return redirect()->to(base_url('mapel/guru'));
    }

    public function delete_postingan($id_posting)
    {
        $this->DiskusiModel->delete_posting($id_posting);

        session()->setFlashdata('success', 'Dihapus');
        return redirect()->to(base_url('mapel/guru'));
    }

    public function tambah_komen()
    {
        $data = [
            'kode_postingan' => $this->request->getPost('kode_postingan'),
            'nig' => $this->request->getPost('nig'),
            'isi_komen' => $this->request->getPost('isi_komen'),
            'kode_balas' => $this->request->getPost('kode_balas'),
            'date' => date('Y-m-d H:i:s'),
        ];
        $this->DiskusiModel->tambah_komen($data);

        session()->setFlashdata('success', 'Komentar Ditambahkan');
        return redirect()->to(base_url('mapel/guru'));
    }

    public function tambah_komen_siswa()
    {
        $data = [
            'kode_postingan' => $this->request->getPost('kode_postingan'),
            'nis' => $this->request->getPost('nis'),
            'isi_komen' => $this->request->getPost('isi_komen'),
            'date' => date('Y-m-d H:i:s'),
        ];
        $this->DiskusiModel->tambah_komen($data);

        session()->setFlashdata('success', 'Ditambahkan');
        return redirect()->to(base_url('diskusi/diskusi'));
    }
}
