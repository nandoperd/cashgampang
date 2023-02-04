<?php

namespace App\Controllers;

use App\Models\ModelDeposito;

class Deposito extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelDeposito = new ModelDeposito();
    }

    public function index()
    {
        $data = [
            'title' => 'Deposito',
            'deposito' => $this->ModelDeposito->allData(),
            'isi' => 'admin/deposito/v_index'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Data Deposito',
            'isi' => 'admin/deposito/v_add'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function insert()
    {   {
            if ($this->validate([
                'no_urut' => [
                    'label' => 'Nomor Urut',
                    'rules' => 'required|is_unique[tbl-deposito.no_urut]',
                    'errors' => [
                        'required' =>  '{field} Wajib diisi!',
                        'is_unique' => '{field} sudah ada, Silahkan masukkan nomor lain!'
                    ]
                    ],
                    'nik_deposit' => [
                        'label' => 'NIK',
                        'rules' => 'required|is_unique[tbl-deposito.nik_deposit]',
                        'errors' => [
                            'required' =>  '{field} Wajib diisi!',
                            'is_unique' => '{field} sudah ada, Silahkan masukkan nomor lain!'
                        ]
                        ],
            ])) {
                //jika valid
                $data = array(
                    'no_urut' => $this->request->getPost('no_urut'), 
                    'no_surat' => $this->request->getPost('no_surat'), 
                    'nama_deposit' => $this->request->getPost('nama_deposit'), 
                    'nik_deposit' => $this->request->getPost('nik_deposit'), 
                    'alamat_deposit' => $this->request->getPost('alamat_deposit'), 
                    'jumlah' => $this->request->getPost('jumlah'), 
                    'jumlah_t' => $this->request->getPost('jumlah_t'), 
                    'tenor' => $this->request->getPost('tenor'), 
                    'tenor_t' => $this->request->getPost('tenor_t'), 
                    'sukubunga' => $this->request->getPost('sukubunga'), 
                    'sukubunga_t' => $this->request->getPost('sukubunga_t'), 
                    'bunga' => $this->request->getPost('bunga'), 
                    'bayar_awal' => $this->request->getPost('bayar_awal'), 
                    'bayar_ambil' => $this->request->getPost('bayar_ambil'), 
                );
                $this->ModelDeposito->add($data);
                session()->setFlashdata('pesan', 'Data berhasil ditambahkan!');
                return redirect()->to(base_url('deposito'));
                } else{
                    //jika tidak valid
                    session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
                    return redirect()->to(base_url('deposito/add'));
                }
    }
}

    public function edit($id_deposit)
    {
        $data = [
            'title' => 'Edit Data Deposito',
            'deposito' => $this->ModelDeposito->detail_Data($id_deposit),
            'isi' => 'admin/deposito/v_edit'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function update($id_deposit)
    {
        $data = array(
            'id_deposit' => $id_deposit,
            'no_urut' => $this->request->getPost('no_urut'), 
            'no_surat' => $this->request->getPost('no_surat'), 
            'nama_deposit' => $this->request->getPost('nama_deposit'),
            'nik_deposit' => $this->request->getPost('nik_deposit'),  
            'alamat_deposit' => $this->request->getPost('alamat_deposit'), 
            'jumlah' => $this->request->getPost('jumlah'), 
            'jumlah_t' => $this->request->getPost('jumlah_t'), 
            'tenor' => $this->request->getPost('tenor'), 
            'tenor_t' => $this->request->getPost('tenor_t'), 
            'sukubunga' => $this->request->getPost('sukubunga'), 
            'sukubunga_t' => $this->request->getPost('sukubunga_t'), 
            'bunga' => $this->request->getPost('bunga'), 
            'bayar_awal' => $this->request->getPost('bayar_awal'), 
            'bayar_ambil' => $this->request->getPost('bayar_ambil'), 
        );
        $this->ModelDeposito->edit($data);
        session()->setFlashdata('pesan', 'Data berhasil diupdate!');
        return redirect()->to(base_url('deposito'));
    }

    public function delete($id_deposit)
    {
        $data = [
            'id_deposit' => $id_deposit,
        ];
        $this->ModelDeposito->delete_data($data);
        session()->setFlashdata('pesan', 'Data berhasil dihapus!');
        return redirect()->to(base_url('deposito'));
    }

    public function print($id_deposit)
    {
        $data = [
            'title' => 'Print Data Deposito',
            'deposito' => $this->ModelDeposito->detail_Data($id_deposit),
            'isi' => 'admin/deposito/v_print_deposito'
        ];
        return view('admin/deposito/v_print_deposito', $data);
    }

    public function qrcode($id_deposit)
    {
        $data = [
            'deposito' => $this->ModelDeposito->allData(),
            'deposito' => $this->ModelDeposito->detail_Data($id_deposit),
        ];
    }

}