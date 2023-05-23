<?php
 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\m_Admin;

class c_login extends Controller{

    protected $admin;

    function __construct(){

        $this->admin = new m_Admin();
    }

    public function index(){

        return view('v_login');
    }
 
    public function login(){
        $session = session();
        $koneksi = mysqli_connect("localhost","root","","akademik");
        $username = $_POST['username'];
        $password = md5($_POST['password']);
         
        $data = mysqli_query($koneksi,"select * from admin where binary username='$username' and password='$password'");
        $cek = mysqli_num_rows($data);
         
        if($cek > 0){
            $_SESSION['status']= "login";
            return redirect()->to(base_url('/home'));
        }else{
            return redirect()->to(base_url('/'));
        }
    }

    function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}