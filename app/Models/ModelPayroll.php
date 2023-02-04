<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPayroll extends Model
{
    public function allData()
    {
        return $this->db->table('tbl-payroll')
        ->join('data-fots', 'data-fots.id_payroll = tbl-payroll.id_payroll', 'left')
        ->orderBy('tbl-payroll.nama_payroll', 'ASC')
        ->get()->getResultArray();
    }

    public function jml_payroll()
    {
        return $this->db->table('data-fots')
            ->countAll();
    }
}