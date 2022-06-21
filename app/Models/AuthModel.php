<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    public function save_register($data)
    {
        $this->db->table('siswa')->insert($data);
    }

    public function login_siswa($nis, $password)
    {
        return $this->db->table('siswa')
            ->where([
                'nis' => $nis,
                'password' => $password,
            ])
            ->get()->getRowArray();
    }

    public function save_guru($data)
    {
        $this->db->table('guru')->insert($data);
    }

    public function login_guru($nig, $password)
    {
        return $this->db->table('guru')
            ->where([
                'nig' => $nig,
                'password' => $password,
            ])
            ->get()->getRowArray();
    }

    public function login_admin($email, $password)
    {
        return $this->db->table('admin')
            ->where([
                'email' => $email,
                'password' => $password,
            ])
            ->get()->getRowArray();
    }
}
