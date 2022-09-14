<?php

namespace App\Controllers;
use App\Models\ModelTa;
use App\Models\ModelProdi;
use App\Models\ModelJadwalKuliah;
use App\Models\ModelDosen;
use App\Models\ModelRuangan;


class JadwalKuliah extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->ModelTa = new ModelTa();
        $this->ModelProdi = new ModelProdi();
        $this->ModelJadwalKuliah = new ModelJadwalKuliah();
        $this->ModelDosen = new ModelDosen();
        $this->ModelRuangan = new ModelRuangan();
        
    }

    public function index()
    {

        $data = [
            'title' => 'Jadwal Kuliah',
            'ta_aktif'=> $this->ModelTa->ta_aktif(),
            'prodi'=> $this->ModelProdi->allData(),
            'isi' => 'admin/jadwalkuliah/v_jadwal'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function detailjadwal($id_prodi)
    {
        $data = [
            'title' => 'Jadwal Kuliah',
            'ta_aktif'=> $this->ModelTa->ta_aktif(),
            'prodi'=> $this->ModelProdi->detail_Data($id_prodi),
            'jadwal' => $this->ModelJadwalKuliah->allData($id_prodi),
            'matkul' => $this->ModelJadwalKuliah->matkul($id_prodi),
            'dosen' => $this->ModelDosen->allData(),
            'kelas' => $this->ModelJadwalKuliah->kelas($id_prodi),
            'ruangan' => $this->ModelRuangan->allData(),
            'isi' => 'admin/jadwalkuliah/v_jadwal_detail'
        ];
        // dd($data);
        return view('layout/v_wrapper', $data);
    }

    public function add($id_prodi)
    {
        $ta = $this->ModelTa->ta_aktif();
        $data = [
            'id_prodi' => $id_prodi,
            'id_ta' => $ta['id_ta'],
            'id_kelas' => $this->request->getPost('id_kelas'),
            'id_matkul' => $this->request->getPost('id_matkul'),
            'id_dosen' => $this->request->getPost('id_dosen'),
            'hari' => $this->request->getPost('hari'),
            'jam_awal' => $this->request->getPost('jam_awal'),
            'jam_akhir' => $this->request->getPost('jam_akhir'),
            'id_ruangan' => $this->request->getPost('id_ruangan'),
            'quota' => $this->request->getPost('quota'),
        ];
        // dd($data);
        $this->ModelJadwalKuliah->add($data);
        session()->getFlashdata('success', 'Data berhasil di tambahkan');
        return redirect()->to(base_url('Jadwalkuliah/Detail/' . $id_prodi));
    }

    public function delete($id_jadwal, $id_prodi)
    {
        $data = [
            'id_jadwal' => $id_jadwal,
        ];
        $this->ModelJadwalKuliah->delete_data($data);
        session()->getFlashdata('danger', 'Data berhasil di delete');
        return redirect()->to(base_url('Jadwalkuliah/Detail/' . $id_prodi));
    }



}
