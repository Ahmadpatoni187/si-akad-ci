<?php

namespace App\Controllers;
use App\Models\ModelMatkul;
use App\Models\ModelProdi;

class Matkul extends BaseController
{
    public function __construct()
    {
        $this->ModelMatkul = new ModelMatkul();
        $this->ModelProdi = new ModelProdi();
    }

    public function index()
    {
        $data = [
            'title' => 'Mata Kuliah',
            'matkul' => $this->ModelMatkul->allData(),
            'prodi' => $this->ModelProdi->allData(),
            'isi' => 'admin/matkul/v_matkul'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function detail($id_prodi)
    {
        $data = [
            'title' => 'Mata Kuliah',
            'prodi' => $this->ModelProdi->detail_Data($id_prodi),
            'matkul' => $this->ModelMatkul->allDataMatkul($id_prodi),
            'isi' => 'admin/matkul/v_matkul_detail'
        ];

        // dd($data);
        return view('layout/v_wrapper', $data);
    }

    // TAMBAH DATA
    public function add()
    {
        $data = [
            'id_prodi' => $this->request->getPost('id_prodi'),
            'kode_matkul' => $this->request->getPost('kode_matkul'),
            'matkul' => $this->request->getPost('matkul'),
            'sks' => $this->request->getPost('sks'),
            'kategori' => $this->request->getPost('kategori'),
            'smt' => $this->request->getPost('smt'),
            'semester' => $this->request->getPost('semester'),
        ];
        $this->ModelMatkul->add($data);
        session()->getFlashdata('success', 'Data berhasil di tambahkan');
        return redirect()->to(base_url('Matkul'));
    }


    // EDIT DATA
    // public function edit($id_matkul)
    // {
    //     $data = [
    //         'id_matkul' => $id_matkul,

    //     ];
    //     $this->ModelMatkul->edit($data);
    //     session()->getFlashdata('warning', 'Data berhasil di update');
    //     return redirect()->to(base_url('Matkul'));
    // }
        
    
        // HAPUS DATA
        public function delete($id_matkul)
        {
            $data = [
                'id_matkul' => $id_matkul,
            ];
            $this->ModelMatkul->delete_data($data);
            session()->getFlashdata('danger', 'Data berhasil di delete');
            return redirect()->to(base_url('Matkul'));
        }
    
}
