<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        if (session()->get('active') == "") {
            session()->getFlashdata('pesan', 'Silahkan Login Terlebih Dahulu !!!');
            return redirect()->to(base_url('auth/login_siswa'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
        if (session()->get('active') == 3) {
            return redirect()->to(base_url('home/siswa'));
        }
    }
}
