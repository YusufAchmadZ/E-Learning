<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BerandaModel;
use DateTime;

class Beranda extends BaseController
{
    protected $BerandaModel;

    public function __construct()
    {

        $this->BerandaModel = new BerandaModel();
    }

    public function beranda()
    {
        return view('beranda/beranda');
    }
}
