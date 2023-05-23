<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class m_Pegawai extends Model{

    protected $table = 'pegawai';
    protected $primarykey = 'nip';
    protected $returntype = "array";
    protected $allowedFields = ['nip', 'nama', 'gender', 'telp', 'email', 'pendidikan'];

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getDataPegawai(){

        $query = $this->db->query("SELECT * FROM pegawai");
        return $query->getResultArray();
    }

    public function postDataPegawai($data){
        $query = $this->db->query("INSERT INTO {$this->table} (nip, nama, gender, telp, email, pendidikan) VALUES ('{$data['nip']}', '{$data['nama']}', '{$data['gender']}', '{$data['telp']}', '{$data['email']}', '{$data['pendidikan']}')");
        return $query;
    }
}