<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDeposito extends Model
{
    public function allData()
    {
        return $this->db->table('tbl-deposito')
            ->orderBy('no_urut', 'ASC')
            ->get()->getResultArray();
    }

    public function detail_Data($id_deposit)
    {
        return $this->db->table('tbl-deposito')
            ->where('id_deposit', $id_deposit)
            ->get()->getRowArray();
    }

    public function add($data)
    {
        $this->db->table('tbl-deposito')->insert($data);
    }

    public function edit($data)
    {
        $this->db->table('tbl-deposito')
            ->where('id_deposit', $data['id_deposit'])->update($data);
    }

    public function delete_data($data)
    {
        $this->db->table('tbl-deposito')
            ->where('id_deposit', $data['id_deposit'])->delete($data);
    }
}
