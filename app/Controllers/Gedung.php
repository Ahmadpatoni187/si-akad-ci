<?php

namespace App\Controllers;
use App\Models\ModelGedung;

class Gedung extends BaseController
{   
    public function __construct()
    {
        helper('form');
        $this->ModelGedung = new ModelGedung();
    }


    public function index()
    {
        $data = [
            'title'     => 'Gedung',
            'gedung'  => $this->ModelGedung->allData(),
            'isi'       => 'admin/gedung/v_gedung'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function add()
    {
        $data = [
            'gedung' => $this->request->getPost('gedung'),
        ];
        $this->ModelGedung->add($data);
        session()->getFlashdata('success', 'Data berhasil di tambahkan');
        return redirect()->to(base_url('Gedung'));
    }

    public function edit($id_gedung)
    {
        $data = [
            'id_gedung' => $id_gedung,
            'gedung' => $this->request->getPost('gedung'),
        ];
        $this->ModelGedung->edit($data);
        session()->getFlashdata('warning', 'Data berhasil di update');
        return redirect()->to(base_url('Gedung'));
    }
    
    public function delete($id_gedung)
    {
        $data = [
            'id_gedung' => $id_gedung,
        ];
        $this->ModelGedung->delete_data($data);
        session()->getFlashdata('danger', 'Data berhasil di delete');
        return redirect()->to(base_url('Gedung'));
    }


    
}
