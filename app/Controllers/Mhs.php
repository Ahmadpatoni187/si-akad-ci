<?php

namespace App\Controllers;

use App\Models\ModelTa;
use App\Models\ModelKrs;

class Mhs extends BaseController
{
    public function __construct()
    {
        $this->ModelTa = new ModelTa();
        $this->ModelKrs = new ModelKrs();
    }

    public function index()
    {
        $data = [
            'title' => 'Profil Mahasiswa',
            'mhs' => $this->ModelKrs->DataMhs(),
            'isi' => 'mahasiswa/v_dashboard_mhs'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function absensi()
    {
        $mhs = $this->ModelKrs->DataMhs();
        $ta = $this->ModelTa->ta_aktif();
        $data = [
            'title'             => 'Absensi',
            'ta_aktif'          => $this->ModelTa->ta_aktif(),
            'mhs'               => $this->ModelKrs->DataMhs(),
            'data_matkul'       => $this->ModelKrs->DataKrs($mhs['id_mhs'], $ta['id_ta']),
            'isi'               => 'mahasiswa/v_absensi'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function updatePhoto()
    {
       
    }

}
