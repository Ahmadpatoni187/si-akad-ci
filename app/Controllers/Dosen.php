<?php 

namespace App\Controllers;

use App\Models\ModelDosen;
use App\Models\ModelProdi;

class Dosen extends BaseController
{

    public function __construct()
    {
        $this->ModelDosen = new ModelDosen();
    }


    // HALAMAN VIEW
    public function index()
    {
        $data = [
            'title' => 'Dosen',
            'dosen' => $this->ModelDosen->allData(),
            'isi' => 'admin/dosen/v_dosen'
        ];
        return view('layout/v_wrapper', $data);
    }


    // HALAMAN DETAIL
    public function detail($id_dosen)
    {
        $data = [
            'title' => 'Detail Dosen',
            'dosen' => $this->ModelDosen->detail_Data($id_dosen),
            'isi' => 'admin/dosen/v_dosen_detail'
        ];
        // dd($data);
        return view('layout/v_wrapper', $data);
    }

    // HALAMAN TAMBAH
    public function add()
    {
        $data = [
            'title' => 'Tambah Data Dosen',
            'isi' => 'admin/dosen/v_dosen_add'
        ];
        return view('layout/v_wrapper', $data);
    }

    // HALAMAN EDIT
    public function insert()
    {
        $data = [
            'nidn' => $this->request->getPost('nidn'),
            'nama_dosen' => $this->request->getPost('nama_dosen'),
            'nama_panjang' => $this->request->getPost('nama_panjang'),
            'jk' => $this->request->getPost('jk'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'alamat' => $this->request->getPost('alamat'),
            'email' => $this->request->getPost('email'),
            'hp' => $this->request->getPost('hp'),
            'pendidikan' => $this->request->getPost('pendidikan'),
            'password' => $this->request->getPost('password'),
        ];
        // dd($data);
        $this->ModelDosen->add($data);
        session()->getFlashdata('success', 'Data berhasil di tambahkan');
        return redirect()->to(base_url('Dosen'));
    }

    // HALAMAN DETAIL
    public function edit($id_dosen)
    {
        $data = [
            'title' => 'Edit Data Dosen',
            'dosen' => $this->ModelDosen->detail_Data($id_dosen),
            'isi' => 'admin/dosen/v_dosen_edit'
        ];
        // dd($data);
        return view('layout/v_wrapper', $data);
    }


    // PROSES EDIT DATA
    public function update($id_dosen)
    {
        $data = [
            'id_dosen' => $id_dosen,
            'nidn' => $this->request->getPost('nidn'),
            'nama_dosen' => $this->request->getPost('nama_dosen'),
            'nama_panjang' => $this->request->getPost('nama_panjang'),
            'jk' => $this->request->getPost('jk'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'alamat' => $this->request->getPost('alamat'),
            'email' => $this->request->getPost('email'),
            'hp' => $this->request->getPost('hp'),
            'pendidikan' => $this->request->getPost('pendidikan'),
            'password' => $this->request->getPost('password'),
        ];
        // dd($data);
        $this->ModelDosen->edit($data);
        session()->getFlashdata('warning', 'Data berhasil di update');
        return redirect()->to(base_url('Dosen'));
    }

    // PROSES HAPUS DATA
    public function delete($id_dosen)
    {
        $data = [
            'id_dosen' => $id_dosen,
        ];
        $this->ModelDosen->delete_data($data);
        session()->getFlashdata('danger', 'Data berhasil di delete');
        return redirect()->to(base_url('Dosen'));
    }
}