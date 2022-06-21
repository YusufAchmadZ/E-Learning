<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PesanModel;

class Pesan extends BaseController
{
    protected $PesanModel;

    public function __construct()
    {

        $this->PesanModel = new PesanModel();
    }

    public function masuk($id_guru)
    {
        $data = [
            'tittle'  => 'Pesan Masuk',
            'inbox'   => $this->PesanModel->inbox($id_guru),
            'outbox'   => $this->PesanModel->outbox($id_guru),
            'isi'    => 'pesan/inbox',
        ];
        echo view('layout/wrapper', $data);
    }

    public function kirim_siswa($id_siswa)
    {
        $data = [
            'tittle'  => 'Pesan ke Siswa',
            'siswa'   => $this->PesanModel->pesan_siswa($id_siswa),
            'isi'     => 'pesan/send_siswa'
        ];
        echo view('layout/wrapper', $data);
    }

    public function tambah_pesan($id_siswa)
    {
        $data = [
            'nis'            => $this->request->getPost('nis'),
            'kode_guru'       => $this->request->getPost('kode_guru'),
            'pesan_guru'       => $this->request->getPost('pesan_guru'),

        ];
        $this->PesanModel->tambah_pesan($data, $id_siswa);
        session()->setFlashdata('success', 'dikirim');
        return redirect()->to(base_url('mapel/guru'));
    }

    public function delete_guru($id_pesan)
    {
        $this->PesanModel->delete_pesan_guru($id_pesan);
        session()->setFlashdata('success', 'Dihapus');
        return redirect()->to(base_url('mapel/guru'));
    }

    public function delete_admin($id_pesan_admin)
    {
        $this->PesanModel->delete_pesan_admin($id_pesan_admin);
        session()->setFlashdata('success', 'Dihapus');
        return redirect()->to(base_url('mapel/guru'));
    }

    public function kirim_admin($id)
    {
        $data = [
            'tittle'  => 'Pesan ke Admin',
            'admin'   => $this->PesanModel->pesan_admin($id),
            'isi'     => 'pesan/send_guru'
        ];
        echo view('layout/wrapper', $data);
    }

    public function tambah_pesan_admin($id)
    {
        $data = [
            'email'            => $this->request->getPost('email'),
            'kode_guru'       => $this->request->getPost('kode_guru'),
            'pesan_guru'       => $this->request->getPost('pesan_guru'),

        ];
        $this->PesanModel->tambah_pesan($data, $id);
        session()->setFlashdata('success', 'dikirim');
        return redirect()->to(base_url('mapel/guru'));
    }

    public function outbox($id_guru)
    {
        $data = [
            'tittle' => 'Pesan Terkirim',
            'keluar' => $this->PesanModel->keluar($id_guru),
            'admin' => $this->PesanModel->keluar_admin($id_guru),
            'isi'    => 'pesan/outbox',
        ];
        echo view('layout/wrapper', $data);
    }

    public function admin($id)
    {
        $data = [
            'tittle' => 'Log Pesan',
            'masuk' => $this->PesanModel->masuk($id),
            'keluar' => $this->PesanModel->keluar_guru($id),
            'isi'    => 'pesan/admin',
        ];
        echo view('layout/wrapper', $data);
    }
    public function kirim_guru($id_guru)
    {
        $data = [
            'tittle'  => 'Pesan ke Guru',
            'guru'   => $this->PesanModel->pesan_guru($id_guru),
            'isi'     => 'pesan/send_admin'
        ];
        echo view('layout/wrapper', $data);
    }

    public function tambah_pesan_guru($id_guru)
    {
        $data = [
            'email'            => $this->request->getPost('email'),
            'kode_guru'       => $this->request->getPost('kode_guru'),
            'pesan_admin'       => $this->request->getPost('pesan_admin'),

        ];
        $this->PesanModel->reply_admin($data, $id_guru);
        session()->setFlashdata('success', 'dikirim');
        return redirect()->to(base_url('home/index'));
    }

    public function delete($id_pesan_guru)
    {
        $this->PesanModel->delete_pesan($id_pesan_guru);
        session()->setFlashdata('success', 'Dihapus');
        return redirect()->to(base_url('home/index'));
    }
}
