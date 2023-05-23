<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\m_Pegawai;
use CodeIgniter\Exceptions\PageNotFoundException;
class c_pegawai extends Controller{
    
    function __construct(){

        $this->pegawai = new m_Pegawai();
    }

    public function displayPegawai(){

        $data['pegawai'] = $this->pegawai->getDataPegawai();
        return view('v_displayPegawai', $data);
    }

    public function tambahPegawai(){

        return view('v_inputPegawai');
    }

    public function simpanDataPegawai(){

        if (!$this->validate([
            'nip' => [
                'label' => 'nip',
                'rules' => 'required|numeric|min_length[9]|max_length[9]|is_unique[pegawai.nip]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'numeric' => '{field} harus berupa angka',
                    'min_length' => '{field} harus berjumlah 9 karakter',
                    'max_length' => '{field} harus berjumlah 9 karakter',
                    'is_unique' => '{field} sudah terdaftar'
                ]
            ],
            'nama' => [
                'label' => 'nama',
                'rules' => 'required|alpha_space',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'alpha_space' => '{field} harus berupa huruf'
                ]
            ],
            'gender' => [
                'label' => 'gender',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'telp' => [
                'label' => 'telp',
                'rules' => 'required|numeric|min_length[11]|max_length[15]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'numeric' => '{field} harus berupa angka',
                    'min_length' => '{field} minimal harus berjumlah 11 karakter',
                    'max_length' => '{field} maximal harus berjumlah 15 karakter'
                ]
            ],
            'email' => [
                'label' => 'email',
                'rules' => 'required|valid_email|is_unique[pegawai.email]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'valid_email' => '{field} tidak valid',
                    'is_unique' => '{field} sudah terdaftar'
                ]
            ],
            'pendidikan' => [
                'label' => 'pendidikan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
        ])){
            return view('v_inputPegawai', [
                'errors' => $this->validator->getErrors(),
                'title' => 'Tambah Pegawai Error !'
            ]);
        }

        $data = [
            'nip' => $this->request->getPost('nip'),
            'nama' => $this->request->getPost('nama'),
            'gender' => $this->request->getPost('gender'),
            'telp' => $this->request->getPost('telp'),
            'email' => $this->request->getPost('email'),
            'pendidikan' => $this->request->getPost('pendidikan')
        ];

        $this->pegawai->postDataPegawai($data);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan!');
        return redirect()->to('/pegawai');
    }
}
