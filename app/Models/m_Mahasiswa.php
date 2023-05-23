<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class m_Mahasiswa extends Model{

    protected $table = 'mahasiswa';
    protected $primarykey = 'NIM';
    protected $returntype = "array";
    protected $allowedFields = ['NIM', 'Nama', 'Umur'];


    public function getDataDetail($NIM){

        $query = $this->db->query("SELECT * FROM mahasiswa where NIM='".$NIM."'");
        return $query->getResultArray();
    }

    public function getData(){

        $query = $this->db->query("SELECT * FROM mahasiswa");
        return $query->getResultArray();
    }

    public function simpanData($data){
        $query = $this->db->query("INSERT INTO {$this->table} (NIM, Nama, Umur) VALUES ('{$data['NIM']}', '{$data['Nama']}', '{$data['Umur']}')");
        return $query;
    }

    public function cariNama($Nama){
        $query = $this->db->query("SELECT * FROM mahasiswa where Nama like '%".$Nama."%'");
        return $query->getResultArray();
    }

    public function updateData($data, $NIM){

        $query = $this->db->query("UPDATE {$this->table} SET NIM = '{$data['NIM']}', Nama = '{$data['Nama']}', Umur = '{$data['Umur']}' where NIM='".$NIM."'");
    }
}