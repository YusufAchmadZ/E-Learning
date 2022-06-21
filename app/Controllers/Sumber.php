<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SumberModel;


class Sumber extends BaseController
{
    protected $SumberModel;
    public function __construct()
    {
        $this->SumberModel = new SumberModel();
        helper('form');
    }


    public function s_materi()
    {
        $data = [
            'tittle' => 'Resource Materi',
            'sumbera' => $this->SumberModel->get_sumbera(),
            'sumberb'   => $this->SumberModel->get_sumberb(),
            'sumberc'   => $this->SumberModel->get_sumberc(),
            'validation' => $this->validator,
            'isi'    => 'sumber/s_materi',
        ];
        echo view('layout/wrapper', $data);
    }

    public function s_detail($id_sumber)
    {
        $data = [
            'tittle' => 'Sumber Materi',
            'tambah' => 'Tambah Data Materi',
            's_detail'  => $this->SumberModel->s_detail($id_sumber),
            'isi'    => 'sumber/s_detail',
        ];
        echo view('layout/wrapper', $data);
    }

    public function tambah_materi()
    {
        session();
        $data = [
            'tittle' => 'Tambah Data Materi',
            'validation' => \Config\Services::validation(),
            'isi'   => 'sumber/t_materi',
        ];
        echo view('layout/wrapper', $data);
    }

    public function save_detail()
    {
        if (!$this->validate(
            [
                'judul' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Judul Harus diisi.'
                    ]
                ],
                'kode_sumber' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Materi Harus diisi.'
                    ]
                ],
                'bab_sumber' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tidak Boleh Kosong.'
                    ]
                ],
                'data' => [

                    'rules' => 'max_size[data,20480]|mime_in[data,application/pdf,application/zip,application/msword]',
                    'errors' => [
                        'max_size' => 'Ukuran Gambar Terlalu Besar',
                        'mime_in' => 'File harus Format PDF / MS.WORD / ZIP'

                    ]
                ]
            ]
        )) {

            return redirect()->to(base_url('sumber/t_materi'))->withInput();
        }
        $fileSumber = $this->request->getFile('data');
        if ($fileSumber->getError() == 4) {
            $namaData = '';
        } else {
            $namaData = $fileSumber->getRandomName();
            $fileSumber->move('file_sumber', $namaData);
        }

        $data = [
            'judul' => $this->request->getPost('judul'),
            'kode_sumber' => $this->request->getPost('kode_sumber'),
            'bab_sumber' => $this->request->getPost('bab_sumber'),
            'tahun' => $this->request->getPost('tahun'),
            'data'  => $namaData
        ];
        $this->SumberModel->tambah_detail($data);

        session()->setFlashdata('success', 'Ditambahkan');
        return redirect()->to(base_url('home/index'));
    }

    public function edit_data($id_data)
    {
        session();
        $data = [
            'tittle' => 'Edit data Sumber',
            'validation' => \Config\Services::validation(),
            'detail' => $this->SumberModel->edit_data($id_data),
            'isi'    => 'sumber/s_detail_edit',
        ];
        echo view('layout/wrapper', $data);
    }

    public function update_data($id_data)
    {
        if (!$this->validate(
            [
                'judul' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Judul Harus diisi.'
                    ]
                ],
                'kode_sumber' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Materi Harus diisi.'
                    ]
                ],
                'bab_sumber' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tidak Boleh Kosong.'
                    ]
                ],
                'data' => [

                    'rules' => 'max_size[data,20480]|mime_in[data,application/pdf,application/zip,application/msword]',
                    'errors' => [
                        'max_size' => 'Ukuran Gambar Terlalu Besar',
                        'mime_in' => 'File harus Format PDF / MS.WORD / ZIP'

                    ]
                ]
            ]
        )) {

            return redirect()->to(base_url('sumber/s_detail_edit'))->withInput();
        }

        $fileSumber = $this->request->getFile('data');

        if ($fileSumber->getError() == 4) {
            $namaData = $this->request->getVar('dataLama');
        } else {
            $namaData = $fileSumber->getRandomName();
            $fileSumber->move('file_sumber', $namaData);
            unlink('file_sumber/' . $this->request->getVar('dataLama'));
        }
        $data = [
            'id_data'   => $id_data,
            'judul' => $this->request->getPost('judul'),
            'kode_sumber' => $this->request->getPost('kode_sumber'),
            'bab_sumber' => $this->request->getPost('bab_sumber'),
            'tahun' => $this->request->getPost('tahun'),
            'data'  => $namaData
        ];
        $this->SumberModel->update_data($data, $id_data);

        session()->setFlashdata('success', 'Data Berhasil Dirubah');
        return redirect()->to(base_url('sumber/s_materi'));
    }

    public function delete($id_data)
    {
        $this->SumberModel->delete_data($id_data);


        session()->setFlashdata('success', 'Dihapus');
        return redirect()->to(base_url('home/index'));
    }
}
