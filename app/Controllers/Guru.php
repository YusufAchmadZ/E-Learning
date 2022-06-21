<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\GuruModel;

class Guru extends BaseController
{

    protected $GuruModel;

    public function __construct()
    {

        $this->GuruModel = new GuruModel();
    }

    public function v_guru()
    {
        $data = [
            'tittle' => 'Daftar Guru',
            'guru1' => $this->GuruModel->get_guru_a(),
            'gurua' => $this->GuruModel->get_gurua(),
            'gurub' => $this->GuruModel->get_gurub(),
            'guruc' => $this->GuruModel->get_guruc(),
            'validation' => \Config\Services::validation(),
            'isi'    => 'guru/v_guru',
        ];
        echo view('layout/wrapper', $data);
    }
    public function v_detail()
    {
        $data = [
            'tittle' => 'Informasi Guru',
            'guru'   => $this->GuruModel->get_guru(),
            'isi'   => 'guru/v_detail',
        ];
        echo view('layout/wrapper', $data);
    }

    public function tambah_guru()
    {
        session();
        $data = [
            'tittle' => 'Tambah Data Guru',
            'validation' => \Config\Services::validation(),
            'isi' => 'guru/v_create',
        ];
        echo view('layout/wrapper', $data);
    }

    public function tambah()
    {
        if (!$this->validate(
            [
                'nig' =>
                [
                    'rules' => 'required|is_unique[guru.nig]',
                    'errors'    => [
                        'required' => 'Nomor Induk Harus diisi.',
                        'is_unique' => 'Nomor Induk Sudah Terdaftar'
                    ]
                ],
                'nama_guru' => [
                    'rules' => 'required[guru.nama_guru]',
                    'errors' => [
                        'required' => 'Nama Tidak Boleh Kosong. '
                    ]
                ],
                'kode_mapel' => [
                    'rules' => 'required|is_unique[guru.kode_mapel]',
                    'errors' => [
                        'required' => '{field} Nama Harus Diisi. ',
                        'is_unique' => '{field} Mata Pelajaran Sudah Terdaftar '
                    ]
                ],
                'gambar' => [

                    'rules' => 'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'Ukuran Gambar Terlalu Besar',
                        'is_image' => 'Yang anda Pilih Bukan Gambar',
                        'mime_in' => 'Yang anda Pilih Bukan Gambar'

                    ]
                ]
            ]
        )) {

            return redirect()->to(base_url('guru/tambah_guru'))->withInput();
        }

        $fileFoto = $this->request->getFile('gambar');
        if ($fileFoto->getError() == 4) {
            $namaFoto = 'default.jpg';
        } else {
            $namaFoto = $fileFoto->getRandomName();
            $fileFoto->move('img_guru', $namaFoto);
        }


        $data = [
            'nig' => $this->request->getPost('nig'),
            'nama_guru' => $this->request->getPost('nama_guru'),
            'jabatan' => $this->request->getPost('jabatan'),
            'gender' => $this->request->getPost('gender'),
            'kode_mapel' => $this->request->getPost('kode_mapel'),
            'no_hp' => $this->request->getPost('no_hp'),
            'email' => $this->request->getPost('email'),
            'gambar' => $namaFoto
        ];
        $this->GuruModel->tambah_guru($data);

        session()->setFlashdata('success', 'Ditambahkan');
        return redirect()->to(base_url('guru/v_guru'));
    }

    public function g_profil()
    {
        $data = [
            'tittle' => 'Profil Guru',
            'isi'  => 'guru/g_profil'
        ];
        echo view('layout/wrapper', $data);
    }

    public function v_edit($id_guru)
    {
        $data = [
            'tittle' => 'Edit Data Guru',
            'validation' => \Config\Services::validation(),
            'guru'  => $this->GuruModel->edit_guru($id_guru),
            'isi'    => 'guru/v_edit',
        ];
        echo view('layout/wrapper', $data);
    }

    public function update($id_guru)
    {

        if (!$this->validate(
            [
                'nig' =>
                [
                    'rules' => 'required',
                    'errors'    => [
                        'required' => 'Nomor Induk Harus diisi.'
                    ]
                ],
                'nama_guru' => [
                    'rules' => 'required[guru.nama_guru]',
                    'errors' => [
                        'required' => 'Nama Tidak Boleh Kosong. '
                    ]
                ],
                'email' => [
                    'label' => 'Email',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong !!!',
                    ]
                ],
                'no_hp' => [
                    'label' => 'Handphone',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong !!!',
                    ]
                ],
                'kelas' => [
                    'label' => 'Kelas',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong !!!',
                    ]
                ],
                'kode_mapel' => [
                    'label' => 'Mata Pelajaran',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong !!!',
                    ]
                ],
                'gambar' => [
                    'rules' => 'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'Ukuran Gambar Terlalu Besar',
                        'is_image' => 'Yang anda Pilih Bukan Gambar',
                        'mime_in' => 'Yang anda Pilih Bukan Gambar'
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
            ]
        )) {

            return redirect()->to(base_url('guru/v_edit'))->withInput();
        }

        $fileFoto = $this->request->getFile('gambar');

        if ($fileFoto->getError() == 4) {
            $namaFoto = $this->request->getVar('gambarLama');
        } else {
            $namaFoto = $fileFoto->getRandomName();
            $fileFoto->move('img_guru', $namaFoto);
            unlink('img_guru/' . $this->request->getVar('gambarLama'));
        } {
            $data = [
                'active' => 2,
                'nig' => $this->request->getPost('nig'),
                'nama_guru' => $this->request->getPost('nama_guru'),
                'password' => $this->request->getPost('password'),
                'kelas' => $this->request->getPost('kelas'),
                'kode_mapel' => $this->request->getPost('kode_mapel'),
                'no_hp' => $this->request->getPost('no_hp'),
                'email' => $this->request->getPost('email'),
                'gambar' => $namaFoto
            ];
            $this->GuruModel->update_guru($data, $id_guru);

            session()->setFlashdata('success', 'Di Update');
            return redirect()->to(base_url('guru/g_profil'));
        }
    }
    public function delete($id_guru)
    {
        $this->GuruModel->delete_guru($id_guru);


        session()->setFlashdata('success', 'Dihapus');
        return redirect()->to(base_url('guru/g_profil'));
    }

    public function tambah_user()
    {
        session();
        $data = [
            'tittle' => 'Tambah Data User',
            'validation' => \Config\Services::validation(),
            'isi' => 'guru/t_user',
        ];
        echo view('layout/wrapper', $data);
    }
}
