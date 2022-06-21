<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AuthModel;

class Auth extends BaseController
{

    protected $AuthModel;

    public function __construct()
    {
        helper('form');
        $this->AuthModel = new AuthModel();
    }

    public function index()
    {
        $data = array(
            'tittle' => 'Informasi Learning',
        );

        return view('auth/server', $data);
    }

    public function register()
    {
        $data = array(
            'tittle' => 'Register Siswa',
        );
        return view('auth/register_siswa', $data);
    }

    public function save_register()
    {
        if ($this->validate([
            'nis' => [
                'label' => 'NIS',
                'rules' => 'required|is_unique[siswa.nis]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !!!',
                    'is_unique' => '{field} Mata Pelajaran Sudah Terdaftar '
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
                'rules' => 'required|is_unique[siswa.email_siswa]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !!!',
                    'is_unique' => '{field} Mata Pelajaran Sudah Terdaftar '
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
            // Jika Valid
            $data = array(
                'nis' => $this->request->getPost('nis'),
                'nama_siswa' => $this->request->getPost('nama_siswa'),
                'kelas' => $this->request->getPost('kelas'),
                'level' => $this->request->getPost('level'),
                'active' => 3,
                'email_siswa' => $this->request->getPost('email_siswa'),
                'hp_siswa' => $this->request->getPost('hp_siswa'),
                'password' => $this->request->getPost('password'),
            );
            $this->AuthModel->save_register($data);
            session()->setFlashdata('pesan', 'Pendaftaran Berhasil !!!');
            return redirect()->to(base_url('auth/register'));
        } else {
            // Jika Tidak Valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/register'));
        }
    }

    public function login()
    {
        $data = array(
            'tittle' => 'Login Siswa',
        );
        return view('auth/login', $data);
    }

    public function cek_login()
    {
        if ($this->validate([
            'nis' => [
                'label' => 'NIS',
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
        ])) {
            // Jika Valid
            $nis = $this->request->getPost('nis');
            $password = $this->request->getPost('password');
            $cek = $this->AuthModel->login_siswa($nis, $password);
            if ($cek) {
                // Cocok
                session()->set('log', true);
                session()->set('id_siswa', $cek['id_siswa']);
                session()->set('nama_siswa', $cek['nama_siswa']);
                session()->set('nis', $cek['nis']);
                session()->set('email_siswa', $cek['email_siswa']);
                session()->set('kelas', $cek['kelas']);
                session()->set('hp_siswa', $cek['hp_siswa']);
                session()->set('active', $cek['active']);
                session()->set('level', $cek['level']);
                return redirect()->to(base_url('home/siswa'));
            } else {
                // Tidak Cocok
                session()->setFlashdata('pesan', 'Nis atau Password Tidak Cocok');
                return redirect()->to(base_url('auth/login'));
            }
        } else {
            // Jika Tidak Vaid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/login'));
        }
    }

    public function logout()
    {
        session()->remove('log');
        session()->remove('nama_siswa');
        session()->remove('nis');
        session()->remove('email_siswa');
        session()->remove('kode_kelas');
        session()->remove('hp_siswa');
        session()->remove('active');
        session()->remove('level');
        session()->setFlashdata('pesan', 'Anda Berhasil Keluar !!');
        return redirect()->to(base_url('auth/login'));
    }

    public function register_guru()
    {
        $data = array(
            'tittle' => 'Register Guru',
        );
        return view('auth/register', $data);
    }

    public function save_guru()
    {
        if ($this->validate([
            'nig' => [
                'label' => 'Nomor Induk',
                'rules' => 'required|is_unique[guru.nig]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !!!',
                    'is_unique' => '{field} Mata Pelajaran Sudah Terdaftar '
                ]
            ],
            'nama_guru' => [
                'label' => 'Nama Guru',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !!!'
                ]
            ],
            'email' => [
                'label' => 'E-Mail',
                'rules' => 'required|is_unique[guru.email]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !!!',
                    'is_unique' => '{field} Mata Pelajaran Sudah Terdaftar '
                ]
            ],
            'no_hp' => [
                'label' => 'No Handphone',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !!!'
                ]
            ],
            'gambar' => [
                'label' => 'No Handphone',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !!!'
                ]
            ],
            'kode_guru' => [
                'label' => 'Mata Pelajaran',
                'rules' => 'required|is_unique[guru.kode_guru]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !!!',
                    'is_unique' => '{field} Mata Pelajaran Sudah Terdaftar '
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
            // Jika Valid
            $data = array(
                'nig' => $this->request->getPost('nig'),
                'nama_guru' => $this->request->getPost('nama_guru'),
                'kode_guru' => $this->request->getPost('kode_guru'),
                'kelas' => $this->request->getPost('kelas'),
                'gambar' => $this->request->getPost('gambar'),
                'active' => 2,
                'email' => $this->request->getPost('email'),
                'no_hp' => $this->request->getPost('no_hp'),
                'password' => $this->request->getPost('password'),
            );
            $this->AuthModel->save_guru($data);
            session()->setFlashdata('pesan', 'Pendaftaran Berhasil !!!');
            return redirect()->to(base_url('auth/register_guru'));
        } else {
            // Jika Tidak Valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/register_guru'));
        }
    }

    public function login_guru()
    {
        $data = array(
            'tittle' => 'Login Guru',
        );
        return view('auth/login_guru', $data);
    }
    public function cek_guru()
    {
        if ($this->validate([
            'nig' => [
                'label' => 'Nomor Induk',
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
        ])) {
            // Jika Valid
            $nig = $this->request->getPost('nig');
            $password = $this->request->getPost('password');
            $cek = $this->AuthModel->login_guru($nig, $password);
            if ($cek) {
                // Cocok
                session()->set('log', true);
                session()->set('id_guru', $cek['id_guru']);
                session()->set('nama_guru', $cek['nama_guru']);
                session()->set('nig', $cek['nig']);
                session()->set('email', $cek['email']);
                session()->set('kode_guru', $cek['kode_guru']);
                session()->set('kelas', $cek['kelas']);
                session()->set('kelas', $cek['kelas']);
                session()->set('no_hp', $cek['no_hp']);
                session()->set('active', $cek['active']);
                session()->set('gambar', $cek['gambar']);
                return redirect()->to(base_url('mapel/guru'));
            } else {
                // Tidak Cocok
                session()->setFlashdata('pesan', 'Nig atau Password Tidak Cocok');
                return redirect()->to(base_url('auth/login_guru'));
            }
        } else {
            // Jika Tidak Vaid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/login_guru'));
        }
    }
    public function logout_guru()
    {
        session()->remove('log');
        session()->remove('nama_guru');
        session()->remove('nig');
        session()->remove('email');
        session()->remove('kode_guru');
        session()->remove('kelas');
        session()->remove('kelas');
        session()->remove('no_hp');
        session()->remove('active');
        session()->remove('gambar');
        session()->setFlashdata('pesan', 'Anda Berhasil Keluar !!');
        return redirect()->to(base_url('auth/login_guru'));
    }


    public function login_admin()
    {
        $data = array(
            'tittle' => 'Login Admin',
        );
        return view('auth/login_admin', $data);
    }
    public function cek_admin()
    {
        if ($this->validate([
            'email' => [
                'label' => 'Email',
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
        ])) {
            // Jika Valid
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $cek = $this->AuthModel->login_admin($email, $password);
            if ($cek) {
                // Cocok
                session()->set('log', true);
                session()->set('id', $cek['id']);
                session()->set('nama', $cek['nama']);
                session()->set('email', $cek['email']);
                session()->set('hp', $cek['hp']);
                session()->set('active', $cek['active']);
                return redirect()->to(base_url('home/index'));
            } else {
                // Tidak Cocok
                session()->setFlashdata('pesan', 'Nis atau Password Tidak Cocok');
                return redirect()->to(base_url('auth/login_admin'));
            }
        } else {
            // Jika Tidak Vaid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/login_admin'));
        }
    }
    public function logout_admin()
    {
        session()->remove('log');
        session()->remove('id');
        session()->remove('nama');
        session()->remove('email');
        session()->remove('hp');
        session()->remove('active');
        session()->setFlashdata('pesan', 'Anda Berhasil Keluar !!');
        return redirect()->to(base_url('auth/login_admin'));
    }
}
