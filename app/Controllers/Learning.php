<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LearningModel;

class Learning extends BaseController
{
    protected $LearningModel;

    public function __construct()
    {

        $this->LearningModel = new LearningModel();
    }
    public function learning()
    {
        $data = [
            'tittle' => 'Leraning ',
            'kuis' => $this->LearningModel->get_learning(),
            'isi'    => 'learning/learning',
        ];
        echo view('layout/wrapper', $data);
    }
}
