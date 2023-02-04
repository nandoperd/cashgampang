<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelFots extends Model
{

    // import excel
    protected $table = 'data-fots';
	protected $primaryKey = 'nik';
	protected $allowedFields =['nama','divisi'];

    public function allData()
    {
        return $this->db->table('data-fots')
            ->orderBy('nama', 'ASC')
            ->get()->getResultArray();
    }

    public function detail_Data($id_data)
    {
        return $this->db->table('data-fots')
            ->join('tbl-payroll', 'tbl-payroll.id_payroll = tbl-payroll.id_payroll', 'left')
            ->where('id_data', $id_data)
            ->get()->getRowArray();
        }

    public function add($data)
    {
        $this->db->table('data-fots')->insert($data);
    }

    public function edit($data)
    {
        $this->db->table('data-fots')
            ->where('id_data', $data['id_data'])->update($data);
    }

    public function delete_data($data)
    {
        $this->db->table('data-fots')
            ->where('id_data', $data['id_data'])->delete($data);
    }
}