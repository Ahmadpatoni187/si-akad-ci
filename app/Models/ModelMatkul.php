<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMatkul extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_matkul')
            ->join('tbl_prodi', 'tbl_prodi.id_prodi = tbl_matkul.id_prodi', 'left')
            ->orderBy('tbl_matkul.id_matkul', 'ASC')
            ->get()->getResultArray();
    }

    public function allDataMatkul($id_prodi)
    {
        return $this->db->table('tbl_matkul')
            ->where('id_prodi', $id_prodi)
            ->orderBy('smt', 'ASC')
            ->get()->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('tbl_matkul')->insert($data);
    }

    public function edit($data)
    {
        $this->db->table('tbl_matkul')
                ->where('id_matkul', $data['id_matkul'])
                ->update($data);
    }           
    
    public function delete_data($data)
    {
        $this->db->table('tbl_matkul')
                ->where('id_matkul', $data['id_matkul'])
                ->delete($data);
    }
}