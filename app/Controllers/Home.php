<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\HomeModel;

class Home extends BaseController
{
	protected $HomeModel;

	public function __construct()
	{

		$this->HomeModel = new HomeModel();
	}

	public function index()
	{
		$data = [
			'tittle' 	=> 'Dashboard Admin',
			'index1'	=> $this->HomeModel->gambar1(),
			'index2'	=> $this->HomeModel->gambar2(),
			'index3'	=> $this->HomeModel->gambar3(),
			'detail'	=> $this->HomeModel->detail_home(),
			'info'		=> $this->HomeModel->get_info(),
			'd_info'	=> $this->HomeModel->get_info(),
			'kelas'		=> $this->HomeModel->get_kelas(),
			'gurua' 	=> $this->HomeModel->get_gurua(),
			'gurub' 	=> $this->HomeModel->get_gurub(),
			'guruc' 	=> $this->HomeModel->get_guruc(),
			'validation' => \Config\Services::validation(),
			'tittle_info' => 'Edit Informasi',
			'isi'	=> 'home/index',
		];
		echo view('layout/wrapper', $data);
	}

	public function siswa()
	{
		$data = [
			'tittle' => 'E-learning MTS Al-Ittihadiyah',
			'index1'	=> $this->HomeModel->gambar1(),
			'index2'	=> $this->HomeModel->gambar2(),
			'index3'	=> $this->HomeModel->gambar3(),
			'info1'		=> $this->HomeModel->login(),
			'info2'		=> $this->HomeModel->learning(),
			'info3'		=> $this->HomeModel->password(),
		];
		echo view('user/home', $data);
	}


	public function edit_home($id_home)
	{
		session();
		$data = [
			'tittle' => 'Edit Sampul',
			'validation' => \Config\Services::validation(),
			'home'		=> $this->HomeModel->edit_sampul($id_home),
			'isi' => 'home/edit_home',
		];
		echo view('layout/wrapper', $data);
	}

	public function update($id_home)
	{
		if (!$this->validate(
			[
				'gambar' => [

					'rules' => 'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
					'errors' => [
						'max_size' => 'Ukuran Gambar Terlalu Besar',
						'is_image' => 'Yang anda Pilih Bukan Gambar',
						'mime_in' => 'Yang anda Pilih Bukan Gambar'

					]
				],

			]
		)) {

			return redirect()->to(base_url('home/edit_home'))->withInput();
		}

		$fileFoto = $this->request->getFile('gambar');

		if ($fileFoto->getError() == 4) {
			$namaFoto = $this->request->getVar('gambarLama');
		} else {
			$namaFoto = $fileFoto->getRandomName();
			$fileFoto->move('img_home', $namaFoto);
			unlink('img_home/' . $this->request->getVar('gambarLama'));
		}


		$data = [
			'id_home' => $id_home,
			'judul' => $this->request->getPost('judul'),
			'gambar' => $namaFoto
		];
		$this->HomeModel->update_sampul($data, $id_home);

		session()->setFlashdata('success', 'Dirubah');
		return redirect()->to(base_url('home/index'));
	}


	public function profil()
	{
		$data = [
			'tittle' => 'Profil',
			'isi'	=> 'profil',
		];
		echo view('layout/wrapper', $data);
	}
	public function edit_info($id_info)
	{

		$data = [
			'tittle' => 'Edit Informasi',
			'info'		=> $this->HomeModel->edit_info($id_info),
			'isi' => 'home/edit_info',
		];
		echo view('layout/wrapper', $data);
	}

	public function update_info($id_info)
	{
		$data = [
			'judul'		=> $this->request->getPost('judul'),
			'keterangan' => $this->request->getPost('keterangan')
		];
		$this->HomeModel->update_info($data, $id_info);
		session()->setFlashdata('success', 'Dirubah');
		return redirect()->to(base_url('home/index'));
	}

	public function daftar_guru()
	{
		$data = [
			'tittle' => 'Daftar Guru',
			'gurua' => $this->HomeModel->get_gurua(),
			'gurub' => $this->HomeModel->get_gurub(),
			'guruc' => $this->HomeModel->get_guruc(),
		];
		return view('user/guru', $data);
	}

	public function pesan($id_guru)
	{
		$data = [
			'tittle' => 'Pesan Ke Guru',
			'pesan' => $this->HomeModel->pesan($id_guru),
		];
		return view('user/pesan', $data);
	}

	public function tambah_pesan($id_guru)
	{
		$data = [
			'nis'		=> $this->request->getPost('nis'),
			'kode_guru'		=> $this->request->getPost('kode_guru'),
			'pesan'		=> $this->request->getPost('pesan'),

		];
		$this->HomeModel->tambah_pesan($data, $id_guru);
		session()->setFlashdata('success', 'dikirim');
		return redirect()->to(base_url('home/daftar_guru'));
	}
}
