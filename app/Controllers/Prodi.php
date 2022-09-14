<?php

namespace App\Controllers;
use App\Models\ModelProdi;
use App\Models\ModelFakultas;
use App\Models\ModelDosen;

class Prodi extends BaseController
{
    public function __construct()
    {
        $this->ModelProdi = new ModelProdi();
        $this->ModelFakultas = new ModelFakultas();
        $this->ModelDosen = new ModelDosen();
    }

    public function index()
    {
        $data = [
            'title' => 'Program Studi',
            'prodi' => $this->ModelProdi->allData(),
            'fakultas' => $this->ModelFakultas->allData(),
            'dosen' => $this->ModelDosen->allData(),
            'isi' => 'admin/prodi/v_prodi'
        ];
        // dd($data);
        return view('layout/v_wrapper', $data);
    }

    // TAMBAH DATA
    public function add()
    {
        $data = [
            'id_fakultas' => $this->request->getPost('id_fakultas'),
            'kode_prodi' => $this->request->getPost('kode_prodi'),
            'prodi' => $this->request->getPost('prodi'),
            'jenjang' => $this->request->getPost('jenjang'),
            'ka_prodi' => $this->request->getPost('ka_prodi'),
        ];
        // dd($data);
        $this->ModelProdi->add($data);
        session()->getFlashdata('success', 'Data berhasil di tambahkan');
        return redirect()->to(base_url('Prodi'));
    }


    // EDIT DATA
    public function edit($id_prodi)
    {
        $data = [
            'id_prodi' => $id_prodi,
            'id_fakultas' => $this->request->getPost('id_fakultas'),
            'kode_prodi' => $this->request->getPost('kode_prodi'),
            'prodi' => $this->request->getPost('prodi'),
            'jenjang' => $this->request->getPost('jenjang'),
            'ka_prodi' => $this->request->getPost('ka_prodi'),
        ];
        $this->ModelProdi->edit($data);
        session()->getFlashdata('warning', 'Data berhasil di update');
        return redirect()->to(base_url('Prodi'));
    }
        
    
        // HAPUS DATA
        public function delete($id_prodi)
        {
            $data = [
                'id_prodi' => $id_prodi,
            ];
            $this->ModelProdi->delete_data($data);
            session()->getFlashdata('danger', 'Data berhasil di delete');
            return redirect()->to(base_url('Prodi'));
        }
    
}
