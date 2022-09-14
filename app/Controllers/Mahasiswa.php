<?php 

namespace App\Controllers;

use App\Models\ModelMahasiswa;
use App\Models\ModelProdi;
use App\Models\ModelKelas;

class Mahasiswa extends BaseController
{

    public function __construct()
    {
        $this->ModelMahasiswa = new ModelMahasiswa();
        $this->ModelProdi = new ModelProdi();
        $this->ModelKelas = new ModelKelas();
    }


    // HALAMAN VIEW
    public function index()
    {
        $data = [
            'title' => 'Mahasiswa',
            'mhs' => $this->ModelMahasiswa->allData(),
            'isi' => 'admin/mahasiswa/v_mahasiswa'
        ];
        return view('layout/v_wrapper', $data);
    }


    // HALAMAN DETAIL
    public function detail($id_mhs)
    {
        $data = [
            'title' => 'Detail Mahasiswa',
            'mhs' => $this->ModelMahasiswa->detail_Data($id_mhs),
            'isi' => 'admin/mahasiswa/v_mahasiswa_detail'
        ];
        // dd($data);
        return view('layout/v_wrapper', $data);
    }

    // HALAMAN TAMBAH
    public function add()
    {
        $data = [
            'title' => 'Tambah Data Mahasiswa',
            'prodi' => $this->ModelProdi->allData(),
            'kelas' => $this->ModelKelas->allData(),
            'isi' => 'admin/mahasiswa/v_mahasiswa_add'
        ];
        return view('layout/v_wrapper', $data);
    }


    // PROSES TAMBAH
    public function insert()
    {
        $data = [
            'id_prodi' => $this->request->getPost('id_prodi'),
            'nim' => $this->request->getPost('nim'),
            'nama_mhs' => $this->request->getPost('nama_mhs'),
            'nama_panjang' => $this->request->getPost('nama_panjang'),
            'jk' => $this->request->getPost('jk'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'alamat' => $this->request->getPost('alamat'),
            'email' => $this->request->getPost('email'),
            'hp' => $this->request->getPost('hp'),
            'nama_ayah' => $this->request->getPost('nama_ayah'),
            'nama_ibu' => $this->request->getPost('nama_ibu'),
            'hp_ortu' => $this->request->getPost('hp_ortu'),
            'password' => $this->request->getPost('password'),
            'id_kelas' => $this->request->getPost('id_kelas'),
        ];
        // var_dump($data)->die();
        $this->ModelMahasiswa->add($data);
        session()->getFlashdata('success', 'Data berhasil di tambahkan');
        return redirect()->to(base_url('Mahasiswa'));
    }

    // HALAMAN DETAIL
    public function edit($id_mhs)
    {
        $data = [
            'title' => 'Edit Data Mahasiswa',
            'prodi' => $this->ModelProdi->allData(),
            'mhs' => $this->ModelMahasiswa->detail_Data($id_mhs),
            'kelas' => $this->ModelKelas->allData(),
            'isi' => 'admin/mahasiswa/v_mahasiswa_edit'
        ];
        // dd($data);
        return view('layout/v_wrapper', $data);
    }

    // PROSES EDIT DATA
    public function update($id_mhs)
    {
        $data = [
            'id_mhs' => $id_mhs,
            'id_prodi' => $this->request->getPost('id_prodi'),
            'nim' => $this->request->getPost('nim'),
            'nama_mhs' => $this->request->getPost('nama_mhs'),
            'nama_panjang' => $this->request->getPost('nama_panjang'),
            'jk' => $this->request->getPost('jk'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'alamat' => $this->request->getPost('alamat'),
            'email' => $this->request->getPost('email'),
            'hp' => $this->request->getPost('hp'),
            'nama_ayah' => $this->request->getPost('nama_ayah'),
            'nama_ibu' => $this->request->getPost('nama_ibu'),
            'hp_ortu' => $this->request->getPost('hp_ortu'),
            'password' => $this->request->getPost('password'),
            'id_kelas' => $this->request->getPost('id_kelas'),
        ];
        // dd($data);
        $this->ModelMahasiswa->edit($data);
        session()->getFlashdata('warning', 'Data berhasil di update');
        return redirect()->to(base_url('Mahasiswa'));
    }

    // PROSES HAPUS DATA
    public function delete($id_mhs)
    {
        $data = [
            'id_mhs' => $id_mhs,
        ];
        $this->ModelMahasiswa->delete_data($data);
        session()->getFlashdata('danger', 'Data berhasil di delete');
        return redirect()->to(base_url('Mahasiswa'));
    }
}