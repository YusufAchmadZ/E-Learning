<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SiswaModel;

class Siswa extends BaseController
{

    protected $SiswaModel;

    public function __construct()
    {
        $this->SiswaModel = new SiswaModel();
    }

    public function kelas()
    {
        $data = [
            'tittle' => 'Daftar Kelas',
            'kelas' => $this->SiswaModel->get_kelas(),
            'isi' => 'siswa/kelas',
        ];
        echo view('layout/wrapper', $data);
    }
    public function d_kelas($id_kelas)
    {
        $nis = $this->request->getPost('nis');
        $nama_siswa = $this->request->getPost('nama_siswa');
        $data = [
            'tittle' => 'Daftar Siswa',
            'nis'   => $nis,
            'nama_siswa'   => $nama_siswa,
            'd_kelas' => $this->SiswaModel->detail_kelas($id_kelas),
            'kelasa'   => $this->SiswaModel->kelasa($id_kelas),
            'kelasb'   => $this->SiswaModel->kelasb($id_kelas),
            'kelasc'   => $this->SiswaModel->kelasc($id_kelas),
            'isi' => 'siswa/d_kelas',
        ];
        echo view('layout/wrapper', $data);
    }

    public function tambah_siswa()
    {
        $data = [
            'tittle' => 'Tambah Data Siswa',
            'isi' => 'siswa/v_tambah'
        ];
        echo view('layout/wrapper', $data);
    }

    public function save()
    {
        $data = [
            'nis' => $this->request->getPost('nis'),
            'nama_siswa' => $this->request->getPost('nama_siswa'),
            'kode_kelas' => $this->request->getPost('kode_kelas'),
            'gender'    => $this->request->getPost('gender'),
            'sub_kelas' => $this->request->getPost('sub_kelas'),
            'hp_siswa' => $this->request->getPost('hp_siswa'),
            'email_siswa' => $this->request->getPost('email_siswa'),
        ];
        $this->SiswaModel->tambah_siswa($data);

        session()->setFlashdata('success', 'Ditambahkan');
        return redirect()->to(base_url('siswa/kode_nilai'));
    }
    public function v_edit($id_siswa)
    {
        $data = [
            'tittle' => 'Edit Data Siswa',
            'siswa'  => $this->SiswaModel->edit_siswa($id_siswa),
            'isi'    => 'siswa/v_edit',
        ];
        echo view('layout/wrapper', $data);
    }
    public function update($id_siswa)
    {

        $data = [
            'nis' => $this->request->getPost('nis'),
            'nama_siswa' => $this->request->getPost('nama_siswa'),
            'kelas' => $this->request->getPost('kelas'),
            'level' => $this->request->getPost('level'),
            'hp_siswa' => $this->request->getPost('hp_siswa'),
            'email_siswa' => $this->request->getPost('email_siswa'),
        ];
        $this->SiswaModel->update_siswa($data, $id_siswa);
        session()->setFlashdata('success', 'di Update');
        return redirect()->to(base_url('siswa/kelas'));
    }


    public function delete($id_siswa)
    {
        $this->SiswaModel->delete_siswa($id_siswa);


        session()->setFlashdata('success', 'Dihapus');
        return redirect()->to(base_url('siswa/kelas'));
    }

    public function kode_nilai()
    {
        $data = [
            'tittle' => 'Tambah Data Siswa',
            'data'   => $this->SiswaModel->kode_nilai(),
            'isi' => 'siswa/t_data'
        ];
        echo view('layout/wrapper', $data);
    }

    public function tambah_data()
    {
        $data = [
            'nis'  => $this->request->getPost('nis'),
            'kode_nilai' => $this->request->getPost('kode_nilai')
        ];
        $this->SiswaModel->tambah_data($data);

        session()->setFlashdata('success', 'Siswa Berhasil DI TAMBAHKAN');
        return redirect()->to(base_url('siswa/kelas'));
    }

    public function tambah_score($id_siswa)
    {
        $data = [
            'tittle'  => 'Tambah Nilai',
            'score'   => $this->SiswaModel->tambah_socre($id_siswa),
            'isi'     => 'siswa/t_score'
        ];
        echo view('layout/wrapper', $data);
    }

    public function nilai($id_siswa)
    {
        $data = [
            'tittle' => 'Data Nilai Siswa',
            'nilai' => $this->SiswaModel->nilai($id_siswa),
            'tambah' => $this->SiswaModel->r_nilai($id_siswa),
            'isi'   => 'siswa/nilai'
        ];
        echo view('layout/wrapper', $data);
    }

    public function data($id_siswa)
    {
        $data = [

            'tittle' => 'Data Pribadi Siswa',
            'data'  => $this->SiswaModel->data($id_siswa),
            'isi'   => 'siswa/result'
        ];
        echo view('layout/wrapper', $data);
    }

    public function t_nilai($id_siswa)
    {
        $data = [
            'tittle' => 'Tambah Pelajaran',
            'score'  => $this->SiswaModel->score($id_siswa),
            'isi'   => 'siswa/t_nilai'
        ];
        echo view('layout/wrapper', $data);
    }

    public function tambah_nilai()
    {
        $data = [
            'pelajaran' => $this->request->getPost('pelajaran'),
            'kode_nilai' => $this->request->getPost('kode_nilai'),
            'grade' => $this->request->getPost('grade'),
            'nilai'    => $this->request->getPost('nilai'),
            'kkm' => $this->request->getPost('kkm'),
            'catatan' => $this->request->getPost('catatan'),
            'kode_mapel' => $this->request->getPost('kode_mapel'),
        ];

        $this->SiswaModel->tambah_nilai($data);

        session()->setFlashdata('success', 'Nilai Pelajaran Berhasil Di Tambahkan');
        return redirect()->to(base_url('mapel/guru'));
    }

    public function edit_nilai($id_siswa)
    {

        $data = [
            'tittle' => 'Daftar Nilai',
            'edit'  => $this->SiswaModel->edit_nilai($id_siswa),
            'public' => $this->SiswaModel->public($id_siswa),
            'isi' => 'siswa/e_nilai'
        ];
        echo view('layout/wrapper', $data);
    }
    public function update_nilai($id_nilai)
    {
        $data = [
            'pelajaran' => $this->request->getPost('pelajaran'),
            'kode_nilai' => $this->request->getPost('kode_nilai'),
            'grade' => $this->request->getPost('grade'),
            'nilai'    => $this->request->getPost('nilai'),
            'kkm' => $this->request->getPost('kkm'),
            'catatan' => $this->request->getPost('catatan'),
        ];
        $this->SiswaModel->update_nilai($data, $id_nilai);

        session()->setFlashdata('success', 'Nilai Berhasil Di Masukkan');
        return redirect()->to(base_url('siswa/kelas'));
    }

    public function delete_nilai($id_nilai)
    {
        $this->SiswaModel->delete_nilai($id_nilai);


        session()->setFlashdata('success', 'Nilai Berhasil Di Hapus');
        return redirect()->to(base_url('home/index'));
    }


    public function update_user($id_siswa)
    {
        if ($this->validate([
            'nis' => [
                'label' => 'NIS',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !!!',
                ]
            ],
            'nama_siswa' => [
                'label' => 'Nama Siswa',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !!!'
                ]
            ],
            'email_siswa' => [
                'label' => 'E-Mail',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !!!',

                ]
            ],
            'hp_siswa' => [
                'label' => 'No Handphone',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !!!'
                ]
            ],
            'kelas' => [
                'label' => 'Kelas',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !!!',
                ]
            ],
            'level' => [
                'label' => 'Sub Kelas',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !!!',

                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !!!',

                ]
            ],
            'repassword' => [
                'label' => 'Password',
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !!!',
                    'matches' => '{field} Tidak Sama !!!'

                ]
            ],
        ])) {
            $data = [
                'nis' => $this->request->getPost('nis'),
                'nama_siswa' => $this->request->getPost('nama_siswa'),
                'kelas' => $this->request->getPost('kelas'),
                'level' => $this->request->getPost('level'),
                'hp_siswa' => $this->request->getPost('hp_siswa'),
                'email_siswa' => $this->request->getPost('email_siswa'),
                'password' => $this->request->getPost('password'),
                'active'  => 3,
            ];
            $this->SiswaModel->update_siswa($data, $id_siswa);

            session()->setFlashdata('success', 'di Update');
            return redirect()->to(base_url('user/profil'));
        }
    }

    public function hasil($id_tugas)
    {
        $data = [
            'tittle'  => 'Rekap Hasil Kuis',
            'isi'     => 'siswa/hasil',
            'hasil'   => $this->SiswaModel->hasil($id_tugas)
        ];
        return view('layout/wrapper', $data);
    }
}
