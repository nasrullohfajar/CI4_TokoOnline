<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class c_home extends Controller
{
    public function home(){

        return view('v_home');
    }
}
