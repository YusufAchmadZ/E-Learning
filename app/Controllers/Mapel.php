<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MapelModels;


class Mapel extends BaseController
{
    protected $MapelModels;

    public function __construct()
    {
        $this->MapelModels = new MapelModels();
    }

    public function guru()
    {
        $data = [
            'tittle' => 'Dashboard Guru',
            // Mapel Kelas 07
            'bia07'   => $this->MapelModels->bia07(),
            'ski07'   => $this->MapelModels->ski07(),
            'mtk07'   => $this->MapelModels->mtk07(),
            'pkn07'   => $this->MapelModels->pkn07(),
            'bar07'   => $this->MapelModels->bar07(),
            'fkh07'   => $this->MapelModels->fkh07(),
            'aak07'   => $this->MapelModels->aaq07(),
            'qhs07'   => $this->MapelModels->qhs07(),
            'big07'   => $this->MapelModels->big07(),
            'ipa07'   => $this->MapelModels->ipa07(),
            'ips07'   => $this->MapelModels->ips07(),
            'pjo07'   => $this->MapelModels->pjo07(),
            'tik07'   => $this->MapelModels->tik07(),
            'sba07'   => $this->MapelModels->sba07(),
            // Mapel Kelas 8
            'bia08'   => $this->MapelModels->bia08(),
            'ski08'   => $this->MapelModels->ski08(),
            'mtk08'   => $this->MapelModels->mtk08(),
            'pkn08'   => $this->MapelModels->pkn08(),
            'bar08'   => $this->MapelModels->bar08(),
            'fkh08'   => $this->MapelModels->fkh08(),
            'aak08'   => $this->MapelModels->aak08(),
            'qhs08'   => $this->MapelModels->qhs08(),
            'big08'   => $this->MapelModels->big08(),
            'ipa08'   => $this->MapelModels->ipa08(),
            'ips08'   => $this->MapelModels->ips08(),
            'pjo08'   => $this->MapelModels->pjo08(),
            'tik08'   => $this->MapelModels->tik08(),
            'sba08'   => $this->MapelModels->sba08(),
            // Mapel Kelas 9
            'bia09'   => $this->MapelModels->bia09(),
            'ski09'   => $this->MapelModels->ski09(),
            'mtk09'   => $this->MapelModels->mtk09(),
            'pkn09'   => $this->MapelModels->pkn09(),
            'bar09'   => $this->MapelModels->bar09(),
            'fkh09'   => $this->MapelModels->fkh09(),
            'aak09'   => $this->MapelModels->aak09(),
            'qhs09'   => $this->MapelModels->qhs09(),
            'big09'   => $this->MapelModels->big09(),
            'ipa09'   => $this->MapelModels->ipa09(),
            'ips09'   => $this->MapelModels->ips09(),
            'pjo09'   => $this->MapelModels->pjo09(),
            'tik09'   => $this->MapelModels->tik09(),
            'sba09'   => $this->MapelModels->sba09(),
            'gambar1'    => $this->MapelModels->gambar1(),
            'gambar2'    => $this->MapelModels->gambar2(),
            'gambar3'    => $this->MapelModels->gambar3(),
            'more1'        => $this->MapelModels->more1(),
            'more2'        => $this->MapelModels->more2(),
            'more3'        => $this->MapelModels->more3(),
            'kelas7' => $this->MapelModels->get_kelas7(),
            'kelas8' => $this->MapelModels->get_kelas8(),
            'kelas9' => $this->MapelModels->get_kelas9(),
            'isi'    => 'mapel/guru',
        ];
        echo view('layout/wrapper', $data);
    }
}
