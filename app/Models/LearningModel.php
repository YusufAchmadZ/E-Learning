<?php

namespace App\Models;

use CodeIgniter\Model;

class LearningModel extends Model
{
    public function get_learning()
    {
        return $this->db->table('kuis')
            ->get()->getResultArray();
    }
}
