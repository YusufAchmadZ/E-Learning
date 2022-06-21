<?php

namespace App\Models;

use CodeIgniter\Model;

class MapelModels extends Model
{

    // Mapel Kelas 7 
    public function bia07()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '1')
            ->get()->getRowArray();
    }
    public function ski07()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '2')
            ->get()->getRowArray();
    }
    public function mtk07()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '3')
            ->get()->getRowArray();
    }
    public function pkn07()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '4')
            ->get()->getRowArray();
    }
    public function bar07()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '5')
            ->get()->getRowArray();
    }
    public function fkh07()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '6')
            ->get()->getRowArray();
    }
    public function aaq07()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '7')
            ->get()->getRowArray();
    }
    public function qhs07()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '8')
            ->get()->getRowArray();
    }
    public function big07()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '9')
            ->get()->getRowArray();
    }
    public function ipa07()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '10')
            ->get()->getRowArray();
    }
    public function ips07()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '11')
            ->get()->getRowArray();
    }
    public function pjo07()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '12')
            ->get()->getRowArray();
    }
    public function tik07()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '13')
            ->get()->getRowArray();
    }
    public function sba07()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '14')
            ->get()->getRowArray();
    }

    // Mapel Kelas 8
    public function bia08()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '21')
            ->get()->getRowArray();
    }
    public function ski08()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '22')
            ->get()->getRowArray();
    }
    public function mtk08()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '23')
            ->get()->getRowArray();
    }
    public function pkn08()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '24')
            ->get()->getRowArray();
    }
    public function bar08()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '25')
            ->get()->getRowArray();
    }
    public function fkh08()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '26')
            ->get()->getRowArray();
    }
    public function aak08()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '27')
            ->get()->getRowArray();
    }
    public function qhs08()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '208')
            ->get()->getRowArray();
    }
    public function big08()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '29')
            ->get()->getRowArray();
    }
    public function ipa08()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '30')
            ->get()->getRowArray();
    }
    public function ips08()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '31')
            ->get()->getRowArray();
    }
    public function pjo08()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '32')
            ->get()->getRowArray();
    }
    public function tik08()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '33')
            ->get()->getRowArray();
    }
    public function sba08()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '34')
            ->get()->getRowArray();
    }

    // Mapel Kelas 09
    public function bia09()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '41')
            ->get()->getRowArray();
    }
    public function ski09()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '42')
            ->get()->getRowArray();
    }
    public function mtk09()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '43')
            ->get()->getRowArray();
    }
    public function pkn09()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '44')
            ->get()->getRowArray();
    }
    public function bar09()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '45')
            ->get()->getRowArray();
    }
    public function fkh09()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '46')
            ->get()->getRowArray();
    }
    public function aak09()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '47')
            ->get()->getRowArray();
    }
    public function qhs09()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '48')
            ->get()->getRowArray();
    }
    public function big09()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '49')
            ->get()->getRowArray();
    }
    public function ipa09()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '50')
            ->get()->getRowArray();
    }
    public function ips09()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '51')
            ->get()->getRowArray();
    }
    public function pjo09()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '52')
            ->get()->getRowArray();
    }
    public function tik09()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '53')
            ->get()->getRowArray();
    }
    public function sba09()
    {
        return $this->db->table('mapel')
            ->join('kuis', 'kuis.kode_kuis=mapel.kode_kuis')
            ->join('materi', 'materi.kode_materi=mapel.kode_materi')
            ->join('diskusi', 'diskusi.kode_diskusi=mapel.kode_diskusi')
            ->join('sumber', 'sumber.kode_mapel=mapel.kode_mapel')
            ->where('id_mapel', '54')
            ->get()->getRowArray();
    }

    public function gambar1()
    {
        return $this->db->table('home')
            ->where('judul', 's1')
            ->get()->getResultArray();
    }
    public function gambar2()
    {
        return $this->db->table('home')
            ->where('judul', 's2')
            ->get()->getResultArray();
    }
    public function gambar3()
    {
        return $this->db->table('home')
            ->where('judul', 's3')
            ->get()->getResultArray();
    }
    public function judul1()
    {
        return $this->db->table('info')
            ->where('id_info', '1')
            ->get()->getResultArray();
    }
    public function judul2()
    {
        return $this->db->table('info')
            ->where('id_info', '3')
            ->get()->getResultArray();
    }
    public function judul3()
    {
        return $this->db->table('info')
            ->where('id_info', '4')
            ->get()->getResultArray();
    }


    public function more1()
    {
        return $this->db->table('info')
            ->where('id_info', '1')
            ->get()->getResultArray();
    }
    public function more2()
    {
        return $this->db->table('info')
            ->where('id_info', '3')
            ->get()->getResultArray();
    }
    public function more3()
    {
        return $this->db->table('info')
            ->where('id_info', '4')
            ->get()->getResultArray();
    }
    public function get_kelas7()
    {
        return $this->db->table('kelas')
            ->where('kelas', '7')
            ->get()->getResultArray();
    }
    public function get_kelas8()
    {
        return $this->db->table('kelas')
            ->where('kelas', '8')
            ->get()->getResultArray();
    }
    public function get_kelas9()
    {
        return $this->db->table('kelas')
            ->where('kelas', '9')
            ->get()->getResultArray();
    }
}
