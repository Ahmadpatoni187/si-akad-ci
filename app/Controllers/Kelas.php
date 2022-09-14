<?php

namespace App\Controllers;
use App\Models\ModelKelas;
use App\Models\ModelDosen;
use App\Models\ModelProdi;

class Kelas extends BaseController
{
   public function  __construct()
   {
       $this->ModelKelas = new ModelKelas();
       $this->ModelDosen = new ModelDosen();
       $this->ModelProdi = new ModelProdi();
       helper('form');
    }
    public function index()
    {
        $data = [
            'title' => 'Rombongan Kelas',
            'kelas' => $this->ModelKelas->allData(),
            'dosen' => $this->ModelDosen->allData(),
            'prodi' => $this->ModelProdi->allData(),
            'isi' => 'admin/kelas/v_kelas'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function add()
    {
        $data = [
            'nama_kelas' => $this->request->getPost('nama_kelas'),
            'id_prodi' => $this->request->getPost('id_prodi'),
            'id_dosen' => $this->request->getPost('id_dosen'),
            'tahun_angkatan' => $this->request->getPost('tahun_angkatan'),
        ];
        $this->ModelKelas->add($data);
        session()->getFlashdata('success', 'Data berhasil di tambahkan');
        return redirect()->to(base_url('Kelas'));
    }

    // HAPUS DATA
    public function delete($id_kelas)
    {
        $data = [
            'id_kelas' => $id_kelas,
        ];
        $this->ModelKelas->delete_data($data);
        session()->getFlashdata('danger', 'Data berhasil di delete');
        return redirect()->to(base_url('Kelas'));
    }

    public function detail_kelas($id_kelas)
    {
        $data = [
            'title' => 'Rombongan Kelas',
            'kelas' => $this->ModelKelas->detail($id_kelas),
            'mhs' => $this->ModelKelas->mahasiswa($id_kelas),
            'jml' => $this->ModelKelas->jml_mhs($id_kelas),
            'mhs_tpk' => $this->ModelKelas->mhs_tdk_ada_kelas(),
            'isi' => 'admin/kelas/v_kelas_rincian'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function add_anggota_kelas($id_mhs, $id_kelas)
    {
        $data = [
            'id_mhs' => $id_mhs,
            'id_kelas' => $id_kelas,
        ];
        // dd($data);
        $this->ModelKelas->update_mhs($data);
        session()->getFlashdata('danger', 'Data berhasil di ditambahkan');
        return redirect()->to(base_url('Kelas/Detail/' . $id_kelas));
    }

    public function remove_anggota_kelas($id_mhs, $id_kelas)
    {
        $data = [
            'id_mhs' => $id_mhs,
            'id_kelas' => null
        ];
        // dd($data);
        $this->ModelKelas->update_mhs($data);
        session()->getFlashdata('danger', 'Data berhasil di ditambahkan');
        return redirect()->to(base_url('Kelas/Detail/' . $id_kelas));
    }


}
