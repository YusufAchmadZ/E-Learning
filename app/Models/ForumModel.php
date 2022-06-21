<?php

namespace App\Models;

use CodeIgniter\Model;

class ForumModel extends Model
{
    public function get_forum()
    {
        return $this->db->table('forum')
            ->join('kuis', 'kuis.kode_kuis=forum.kode_kuis')
            ->get()->getResultArray();
    }
}
