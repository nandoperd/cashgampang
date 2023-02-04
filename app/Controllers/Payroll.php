<?php

namespace App\Controllers;

use App\Models\ModelPayroll;
use App\Models\ModelFots;

class Payroll extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelPayroll = new ModelPayroll();
        $this->ModelFots = new ModelFots();
    }

    public function index()
    {
        $data = [
            'title' => 'Payroll',
            'payroll' => $this->ModelPayroll->allData(),
            'fots' => $this->ModelFots->allData(),
            'jml_payroll' => $this->ModelPayroll->jml_payroll(),
            'isi' => 'admin/payroll/v_index'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function add()
    {
        if ($this->validate([
            'nama_payroll' => [
                'label' => 'payroll',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib diisi!',
                ]
            ],
            'id_data' => [
                'label' => 'data',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib diisi!',
                ]
            ],
        ])) {
        $data = [
            'nama_payroll' => $this->request->getPost('nama_payroll'),
            'id_data' => $this->request->getPost('id_data'),
        ];
        $this->ModelPayroll->add($data);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('payroll'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('payroll'));
        }
    }

}