<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class m_Admin extends Model{

    protected $table = 'admin';
    protected $primarykey = 'id';
    protected $returntype = "array";
    protected $allowedFields = ['id', 'username', 'password'];

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getDataUser($username, $password){

        $query = $this->db->query("SELECT * FROM mahasiswa where NIM='".$NIM."'");
        return $query->getResultArray();
    }
}