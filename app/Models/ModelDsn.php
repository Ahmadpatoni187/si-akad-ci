<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDsn extends Model
{
    public function DataDsn()
    {
        return $this->db->table('tbl_dosen')
            // ->join('tbl_prodi','tbl_prodi.id_prodi = tbl_mhs.id_prodi', 'left')
            // ->join('tbl_fakultas','tbl_fakultas.id_fakultas = tbl_prodi.id_fakultas', 'left')
            // ->join('tbl_kelas','tbl_kelas.id_kelas = tbl_mhs.id_kelas', 'left')
            // ->join('tbl_dosen','tbl_dosen.id_dosen = tbl_kelas.id_dosen', 'left')
            ->where('nidn', session()->get('username'))
            ->get()->getRowArray();
    }

    public function JadwalDosen()
    {
        return $this->db->table('tbl_jadwal')
            ->join('tbl_matkul', 'tbl_matkul.id_matkul = tbl_jadwal.id_matkul', 'left')
            ->join('tbl_prodi', 'tbl_prodi.id_prodi = tbl_jadwal.id_prodi', 'left')
            ->join('tbl_dosen', 'tbl_dosen.id_dosen = tbl_jadwal.id_dosen', 'left')
            ->join('tbl_ruangan', 'tbl_ruangan.id_ruangan = tbl_jadwal.id_ruangan', 'left')
            ->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_jadwal.id_kelas', 'left')
            ->where('tbl_dosen.nidn', session()->get('username'))
            ->get()->getResultArray();
    }

    public function DetailJadwal($id_jadwal)
    {
        return $this->db->table('tbl_jadwal')
            ->join('tbl_prodi', 'tbl_prodi.id_prodi = tbl_jadwal.id_prodi', 'left')
            ->join('tbl_fakultas', 'tbl_fakultas.id_fakultas = tbl_prodi.id_fakultas', 'left')
            ->join('tbl_matkul', 'tbl_matkul.id_matkul = tbl_jadwal.id_matkul', 'left')
            ->join('tbl_dosen', 'tbl_dosen.id_dosen = tbl_jadwal.id_dosen', 'left')
            ->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_jadwal.id_kelas', 'left')
            ->where('tbl_jadwal.id_jadwal', $id_jadwal)
            ->get()->getRowArray();
    }

    public function mhs($id_jadwal)
    {
        return $this->db->table('tbl_krs')
            ->join('tbl_mhs', 'tbl_mhs.id_mhs = tbl_krs.id_mhs', 'left')
            ->where('id_jadwal', $id_jadwal)
            ->get()->getResultArray();
    }

    public function SimpanAbsen($data)
    {
        $this->db->table('tbl_krs')
                ->where('id_krs', $data['id_krs'])
                ->update($data);
    }
}