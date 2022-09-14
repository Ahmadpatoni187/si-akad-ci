<?php

namespace App\Controllers;
use App\Models\ModelTa;

class Ta extends BaseController

{

    public function __construct()
    {
        helper('form');
        $this->ModelTa = new ModelTa();
    }    
    public function index()
    {
        $data = [
            'title' => 'Tahun Akademik',
            'ta' => $this->ModelTa->allData(),
            'isi' => 'admin/ta/v_ta'
        ];
        return view('layout/v_wrapper', $data);

    }

    public function add()
    {
        $data = [
            'ta' => $this->request->getPost('ta'),
            'semester' => $this->request->getPost('semester'),
        ];
        $this->ModelTa->add($data);
        session()->getFlashdata('success', 'Data berhasil di tambahkan');
        return redirect()->to(base_url('Ta'));
    }

    public function edit($id_ta)
    {
        $data = [
            'id_ta' => $id_ta,
            'ta' => $this->request->getPost('ta'),
            'semester' => $this->request->getPost('semester'),
            'status' => $this->request->getPost('status'),
        ];
        $this->ModelTa->edit($data);
        session()->getFlashdata('success', 'Data berhasil di Edit');
        return redirect()->to(base_url('Ta'));
    }

    public function delete($id_ta)
    {
        $data = [
            'id_ta' => $id_ta,
        ];
        $this->ModelTa->delete_data($data);
        session()->getFlashdata('danger', 'Data berhasil di delete');
        return redirect()->to(base_url('Ta'));
    }

   
}
