<?php
namespace App\Controllers;

use App\Models\ModelRuangan;
use App\Models\ModelGedung;

class Ruangan extends BaseController
{   

    public function __construct()
    {
        helper('form');
        $this->ModelRuangan = new ModelRuangan();
        $this->ModelGedung = new ModelGedung();
    }

    // VIEW 
    public function index()
    {
        $data = [
            'title'     => 'Ruangan',
            'ruangan'   => $this->ModelRuangan->allData(),
            'gedung'    => $this->ModelGedung->allData(),
            // 'detailruang'     => $this->ModelRuangan->get_Data(),
            'isi'       => 'admin/ruangan/v_ruangan'
        ];
        return view('layout/v_wrapper', $data);
    }


    // TAMBAH DATA
    public function add()
    {
        if ($this->validate([
            'id_gedung' => [
                'label' => 'Ruangan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib isi !!'
                ]
            ],

        ])){
                 //jika valid
                 $data = [
                    'id_gedung' => $this->request->getPost('id_gedung'),
                    'ruangan' => $this->request->getPost('ruangan'),
                ];
                $this->ModelRuangan->add($data);
                session()->getFlashdata('success', 'Data berhasil di tambahkan');
                return redirect()->to(base_url('Ruangan')); 
        }else {
                 //jika tidak valid
                 session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Ruangan/add'));
        }
    }


    // EDIT DATA
    public function edit($id_ruangan)
    {
        $data = [
            'id_ruangan' => $id_ruangan,
            'ruangan' => $this->request->getPost('ruangan'),
        ];
        $this->ModelRuangan->edit($data);
        session()->getFlashdata('warning', 'Data berhasil di update');
        return redirect()->to(base_url('Ruangan'));
    }
    

    // HAPUS DATA
    public function delete($id_ruangan)
    {
        $data = [
            'id_ruangan' => $id_ruangan,
        ];
        $this->ModelRuangan->delete_data($data);
        session()->getFlashdata('danger', 'Data berhasil di delete');
        return redirect()->to(base_url('Ruangan'));
    }

}