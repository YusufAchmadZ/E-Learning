<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MateriModel;

class Materi extends BaseController
{

    protected $MateriModel;

    public function __construct()
    {
        $this->MateriModel = new MateriModel();
    }

    public function v_materi($id_materi)
    {
        $data = [
            'tittle' => 'Materi',
            'materi' => $this->MateriModel->v_materi($id_materi),
            'isi' => 'materi/v_materi'
        ];
        echo view('layout/wrapper', $data);
    }

    public function tambah_materi()
    {
        session();
        $data = [
            'tittle' => 'Tambah Materi ',
            'validation' => \Config\Services::validation(),
            'isi'    => 'materi/materi',
        ];
        echo view('layout/wrapper', $data);
    }

    public function save_materi()
    {
        if (!$this->validate(
            [
                'judul' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Judul Harus diisi.'
                    ]
                ],
                'kode_data' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Materi Harus diisi.'
                    ]
                ],
                'kode_forum' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tidak Boleh Kosong.'
                    ]
                ],
                'data' => [

                    'rules' => 'max_size[data,5120]|mime_in[data,application/pdf,application/zip,application/msword]',
                    'errors' => [
                        'max_size' => 'Ukuran Gambar Terlalu Besar',
                        'mime_in' => 'File harus Format PDF'

                    ]
                ]
            ]
        )) {

            return redirect()->to(base_url('materi/tambah_materi'))->withInput();
        }
        $fileMateri = $this->request->getFile('data');
        if ($fileMateri->getError() == 4) {
            $namaData = '';
        } else {
            $namaData = $fileMateri->getRandomName();
            $fileMateri->move('file_materi', $namaData);
        }

        $data = [
            'kode_forum' => $this->request->getPost('kode_forum'),
            'judul' => $this->request->getPost('judul'),
            'kode_data' => $this->request->getPost('kode_data'),
            'data'  => $namaData
        ];
        $this->MateriModel->tambah_materi($data);

        session()->setFlashdata('success', 'Ditambahkan');
        return redirect()->to(base_url('mapel/guru'));
    }

    public function delete($id_data_materi)
    {
        $this->MateriModel->delete_data($id_data_materi);


        session()->setFlashdata('success', 'Dihapus');
        return redirect()->to(base_url('mapel/guru'));
    }

    public function edit_materi($id_data_materi)
    {
        session();
        $data = [
            'tittle' => 'Edit Materi',
            'validation' => \Config\Services::validation(),
            'materi' => $this->MateriModel->edit_materi($id_data_materi),
            'isi'   => 'materi/e_materi',
        ];
        echo view('layout/wrapper', $data);
    }

    public function update_materi($id_data_materi)
    {
        if (!$this->validate(
            [
                'judul' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Judul Harus diisi.'
                    ]
                ],
                'kode_forum' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Materi Harus diisi.'
                    ]
                ],
                'kode_data' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tidak Boleh Kosong.'
                    ]
                ],
                'data' => [

                    'rules' => 'max_size[data,5120]|mime_in[data,application/pdf,application/zip,application/msword]',
                    'errors' => [
                        'max_size' => 'Ukuran Gambar Terlalu Besar',
                        'mime_in' => 'File harus Format PDF / MS.WORD / ZIP'

                    ]
                ]
            ]
        )) {

            return redirect()->to(base_url('materi/e_materi'))->withInput();
        }

        $fileMateri = $this->request->getFile('data');

        if ($fileMateri->getError() == 4) {
            $namaData = $this->request->getVar('dataLama');
        } else {
            $namaData = $fileMateri->getRandomName();
            $fileMateri->move('file_materi', $namaData);
            unlink('file_materi/' . $this->request->getVar('dataLama'));
        }
        $data = [
            'id_materi'   => $id_data_materi,
            'judul' => $this->request->getPost('judul'),
            'kode_forum' => $this->request->getPost('kode_forum'),
            'kode_data' => $this->request->getPost('kode_data'),
            'data'  => $namaData
        ];
        $this->MateriModel->update_materi($data, $id_data_materi);

        session()->setFlashdata('success', 'Di Update');
        return redirect()->to(base_url('mapel/guru'));
    }

    public function v_file($id_data_materi)
    {
        $data = [
            'tittle' => 'Materi',
            'file' => $this->MateriModel->v_file($id_data_materi),
            'isi'  => 'materi/v_file'
        ];
        echo view('layout/wrapper', $data);
    }

    public function file($id_data_materi)
    {
        $data = [
            'tittle' => 'Materi Pelajaran',
            'file' => $this->MateriModel->v_file($id_data_materi),
        ];
        echo view('user/file', $data);
    }
}
