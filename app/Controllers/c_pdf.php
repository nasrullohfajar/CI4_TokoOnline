<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\m_Mahasiswa;

class c_pdf extends Controller
{
    protected $mahasiswa;
    
    function __construct(){

        $this->mahasiswa = new m_Mahasiswa();
    }
    
    public function index()
    {
        $mpdf = new \Mpdf\Mpdf();
        
        $data['mahasiswa'] = $this->mahasiswa->getData();
		$html = view('v_pdf',$data);
		$mpdf->WriteHTML($html);
		$this->response->setHeader('Content-Type', 'application/pdf');
		$mpdf->Output('DataMahasiswa.pdf','I');
    }
}