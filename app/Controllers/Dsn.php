<?php

namespace App\Controllers;
use App\Models\ModelDsn;


class Dsn extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelDsn = new ModelDsn();
    }

    
    public function index()
    {
        $data = [
            'title' => 'Profil Dosen',
            'dosen' => $this->ModelDsn->DataDsn(),
            'isi' => 'dosen/v_dashboard_dsn'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function jadwal()
    {
        // $dosen = $this->ModelDsn->DataDosen();
        $data = [
            'title' => 'Jadwal Mengajar',
            'jadwal' => $this->ModelDsn->JadwalDosen(),
            'isi' => 'dosen/v_jadwal'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function AbsenKelas()
    {
        // $dosen = $this->ModelDsn->DataDosen();
        $data = [
            'title' => 'Absensi',
            'absen' => $this->ModelDsn->JadwalDosen(),
            'isi' => 'dosen/absenkelas/v_absen'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function absensi($id_jadwal)
    {
        $data = [
            'title' => 'Absen Kelas',
            'jadwal' => $this->ModelDsn->DetailJadwal($id_jadwal),
            'mhs' => $this->ModelDsn->mhs($id_jadwal),
            'isi' => 'dosen/absenkelas/v_absenkelas'
        ];
        // dd($data);
        return view('layout/v_wrapper', $data);
    }

    public function SimpanAbsen($id_jadwal)
    {
        $mhs = $this->ModelDsn->mhs($id_jadwal);
        foreach ($mhs as $key => $value) {
            $data = [
                'id_krs' => $this->request->getPost($value['id_krs'] . 'id_krs'),
                'p1' => $this->request->getPost($value['id_krs'] . 'p1'),
                'p2' => $this->request->getPost($value['id_krs'] . 'p2'),
                'p3' => $this->request->getPost($value['id_krs'] . 'p3'),
                'p4' => $this->request->getPost($value['id_krs'] . 'p4'),
                'p5' => $this->request->getPost($value['id_krs'] . 'p5'),
                'p6' => $this->request->getPost($value['id_krs'] . 'p6'),
                'p7' => $this->request->getPost($value['id_krs'] . 'p7'),
                'p8' => $this->request->getPost($value['id_krs'] . 'p8'),
                'p9' => $this->request->getPost($value['id_krs'] . 'p9'),
                'p10' => $this->request->getPost($value['id_krs'] . 'p10'),
                'p11' => $this->request->getPost($value['id_krs'] . 'p11'),
                'p12' => $this->request->getPost($value['id_krs'] . 'p12'),
                'p13' => $this->request->getPost($value['id_krs'] . 'p13'),
                'p14' => $this->request->getPost($value['id_krs'] . 'p14'),
                'p15' => $this->request->getPost($value['id_krs'] . 'p15'),
                'p16' => $this->request->getPost($value['id_krs'] . 'p16'),
                'p17' => $this->request->getPost($value['id_krs'] . 'p17'),
                'p18' => $this->request->getPost($value['id_krs'] . 'p18'),
            ];
            $this->ModelDsn->SimpanAbsen($data);
        }
        // dd($data);
        session()->setFlashdata('pesan', 'Absen Berhasil disimpan');
        return redirect()->to(base_url('Dsn/AbsenKelas/' . $id_jadwal));
    }
}