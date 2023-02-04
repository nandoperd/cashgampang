<?php

namespace App\Controllers;

use App\Models\ModelFots;
use App\Models\ModelPayroll;

class Fots extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelFots = new ModelFots();
        $this->ModelPayroll = new ModelPayroll();
    }

    public function index()
    {
        $data = [
            'title' => 'FOTS',
            'fots' => $this->ModelFots->allData(),
            'isi' => 'admin/fots/v_index'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Data Fots',
            'kelas' => $this->ModelFots->allData(),
            'isi' => 'admin/fots/v_add'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function insert()
    { {
            if ($this->validate([
                'nik' => [
                    'label' => 'NIK',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Wajib diisi!',
                    ]
                ],
                'id_kontrak' => [
                    'label' => 'ID Kontrak',
                    'rules' => 'required|is_unique[data-fots.id_kontrak]',
                    'errors' => [
                        'required' => '{field} Wajib diisi!',
                        'is_unique' => 'Nomor {field} sudah ada, Silahkan masukkan nomor lain!'
                    ]
                ],
                'nama' => [
                    'label' => 'Nama',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Wajib diisi!',
                    ]
                ],
                'divisi' => [
                    'label' => 'Divisi',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Wajib diisi!',
                    ]
                ],
                'gol' => [
                    'label' => 'gol',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Wajib diisi!',
                    ]
                ],
                'pinjaman' => [
                    'label' => 'pinjaman',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Wajib diisi!',
                    ]
                ],

            ])) {
                //jika valid
                // $foto = $this->request->getFile('foto_siswa');
                // $nama_file = $foto->getRandomName();
                
                $data = array(
                    'id_payroll' => $this->request->getPost('id_payroll'),
                    'id_kontrak' => $this->request->getPost('id_kontrak'),
                    'nik' => $this->request->getPost('nik'),
                    'nama' => $this->request->getPost('nama'),
                    'divisi' => $this->request->getPost('divisi'),
                    'gol' => $this->request->getPost('gol'),
                    'nomor_wa' => $this->request->getPost('nomor_wa'),
                    'tgl_pinjaman' => $this->request->getPost('tgl_pinjaman'),
                    'tgl_selesai' => $this->request->getPost('tgl_selesai'),
                    'pinjaman' => $this->request->getPost('pinjaman'),
                    'adm' => $this->request->getPost('adm'),
                    'tenor' => $this->request->getPost('tenor'),
                    'bunga' => $this->request->getPost('bunga'),
                    'cicilan' => $this->request->getPost('cicilan'),
                    'tenor_jalan' => $this->request->getPost('tenor_jalan'),
                    // 'foto_siswa' => $nama_file,
                );
                
                // $foto->move('foto_siswa', $nama_file);
                $this->ModelFots->add($data);
                session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
                return redirect()->to(base_url('fots'));
            } else {
                //jika tidak valid
                session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
                return redirect()->to(base_url('fots/add'));
            }
        }
    }

    public function edit($id_data)
    {
        $data = [
            'title' => 'Edit Data Fots',
            'payroll' => $this->ModelPayroll->allData(),
            'fots' => $this->ModelFots->detail_Data($id_data),
            'isi' => 'admin/fots/v_edit'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function update($id_data)
    {
    $data = array(
        'id_data' => $id_data,
        'id_payroll' => $this->request->getPost('id_payroll'),
        'id_kontrak' => $this->request->getPost('id_kontrak'),
        'nik' => $this->request->getPost('nik'),
        'nama' => $this->request->getPost('nama'),
        'divisi' => $this->request->getPost('divisi'),
        'gol' => $this->request->getPost('gol'),
        'nomor_wa' => $this->request->getPost('nomor_wa'),
        'tgl_pinjaman' => $this->request->getPost('tgl_pinjaman'),
        'tgl_selesai' => $this->request->getPost('tgl_selesai'),
        'pinjaman' => $this->request->getPost('pinjaman'),
        'adm' => $this->request->getPost('adm'),
        'tenor' => $this->request->getPost('tenor'),
        'bunga' => $this->request->getPost('bunga'),
        'cicilan' => $this->request->getPost('cicilan'),
        'tenor_jalan' => $this->request->getPost('tenor_jalan'), 
    );
    $this->ModelFots->edit($data);
    session()->setFlashdata('pesan', 'Data berhasil diupdate!');
    return redirect()->to(base_url('fots'));
    }


    public function delete($id_data)
    {
        $data = [
            'id_data' => $id_data,
        ];
        $this->ModelFots->delete_data($data);
        session()->setFlashdata('pesan', 'Data berhasil dihapus!');
        return redirect()->to(base_url('fots'));
    }

    public function import()
    {
        $data = [
            'title' => 'Import Data Fots',
            'kelas' => $this->ModelFots->allData(),
            'isi' => 'admin/fots/v_import'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function simpanExcel()
    {
        $file_excel = $this->request->getFile('fileexcel');
			$ext = $file_excel->getClientExtension();
			if($ext == 'xls') {
				$render = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
			} else {
				$render = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			}
			$spreadsheet = $render->load($file_excel);
	
			$data = $spreadsheet->getActiveSheet()->toArray();
			foreach($data as $x => $row) {
				if ($x == 0) {
					continue;
				}
				
				$nik = $row[0];
				$nama = $row[1];
				$divisi = $row[2];
	
				$db = \Config\Database::connect();

				$cekNik = $db->table('data-fots')->getWhere(['nik'=>$nik])->getResult();

				if(count($cekNik) > 0) {
					session()->setFlashdata('message','<b style="color:red">Data Gagal di Import NIK ada yang sama</b>');
				} else {
	
				$simpandata = [
					'nik' => $nik, 'nama' => $nama, 'divisi'=> $divisi
				];
	
				$db->table('data-fots')->insert($simpandata);
				session()->setFlashdata('message','Berhasil import excel'); 
			}
		}
			
			return redirect()->to('/fots');
		}
}