<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TrackingStudyModel;

class TrackingStudyController extends BaseController
{
	public function __construct()
	{
		helper(['form']);
		$this->tracking_study = new TrackingStudyModel();
	}

	public function index()
	{
		// proteksi halaman
		if (session()->get('username') == '') {
			session()->setFlashdata('haruslogin', 'Silahkan Login Terlebih Dahulu');
			return redirect()->to(base_url('login'));
		}
		// membuat halaman otomatis berubah ketika berpindah halaman 
		$currentPage = $this->request->getVar('page_tracking') ? $this->request->getVar('page_tracking') : 1;

		// paginate
		$paginate = 1000000;
		$data['tracking']   = $this->tracking_study->paginate($paginate, 'tracking');
		$data['pager']        = $this->tracking_study->pager;
		$data['currentPage']  = $currentPage;
		echo view('tracking/index', $data);
	}

	public function create()
	{
		// proteksi halaman
		if (session()->get('username') == '') {
			session()->setFlashdata('haruslogin', 'Silahkan Login Terlebih Dahulu');
			return redirect()->to(base_url('login'));
		}
		return view('tracking/create');
	}

	public function store()
	{
		// proteksi halaman
		if (session()->get('username') == '') {
			session()->setFlashdata('haruslogin', 'Silahkan Login Terlebih Dahulu');
			return redirect()->to(base_url('login'));
		}
		$validation =  \Config\Services::validation();
		$data = array(
			'nib'        				=> $this->request->getPost('nib'),
			'wave'         				=> $this->request->getPost('wave'),
			'nama_lengkap'         		=> $this->request->getPost('nama_lengkap'),
			'kelas'         			=> $this->request->getPost('kelas'),
			'graduate_on'         		=> $this->request->getPost('graduate_on'),
			'tanggal_lahir'         	=> $this->request->getPost('tanggal_lahir'),
			'asal_alamat'         		=> $this->request->getPost('asal_alamat'),
			'domisili_alamat'         	=> $this->request->getPost('domisili_alamat'),
			'model_kerja'         		=> $this->request->getPost('model_kerja'),
		);

		if ($validation->run($data, 'tracking') == FALSE) {
			session()->setFlashdata('inputs', $this->request->getPost());
			session()->setFlashdata('errors', $validation->getErrors());
			return redirect()->to(base_url('tracking/create'));
		} else {
			// insert
			$simpan = $this->tracking_study->insertData($data);
			if ($simpan) {
				session()->setFlashdata('success', 'Tambah Data Berhasil');
				return redirect()->to(base_url('tracking'));
			}
		}
	}


	public function edit($id)
	{
		// proteksi halaman
		if (session()->get('username') == '') {
			session()->setFlashdata('haruslogin', 'Silahkan Login Terlebih Dahulu');
			return redirect()->to(base_url('login'));
		}
		$data['tracking'] = $this->tracking_study->getData($id);
		echo view('tracking/edit', $data);
	}

	public function update()
	{
		// proteksi halaman
		if (session()->get('username') == '') {
			session()->setFlashdata('haruslogin', 'Silahkan Login Terlebih Dahulu');
			return redirect()->to(base_url('login'));
		}
		$id = $this->request->getPost('id');

		$validation =  \Config\Services::validation();

		$data = array(
			'nib'        				=> $this->request->getPost('nib'),
			'wave'         				=> $this->request->getPost('wave'),
			'nama_lengkap'         		=> $this->request->getPost('nama_lengkap'),
			'kelas'         			=> $this->request->getPost('kelas'),
			'graduate_on'         		=> $this->request->getPost('graduate_on'),
			'tanggal_lahir'         	=> $this->request->getPost('tanggal_lahir'),
			'asal_alamat'         		=> $this->request->getPost('asal_alamat'),
			'domisili_alamat'         	=> $this->request->getPost('domisili_alamat'),
			'model_kerja'         		=> $this->request->getPost('model_kerja'),

		);
		if ($validation->run($data, 'tracking') == FALSE) {
			session()->setFlashdata('inputs', $this->request->getPost());
			session()->setFlashdata('errors', $validation->getErrors());
			return redirect()->to(base_url('tracking/edit/' . $id));
		} else {
			$ubah = $this->tracking_study->updateData($data, $id);
			if ($ubah) {
				session()->setFlashdata('info', 'Update Data Berhasil');
				return redirect()->to(base_url('tracking'));
			}
		}
	}
	public function delete($id)
	{
		// proteksi halaman
		if (session()->get('username') == '') {
			session()->setFlashdata('haruslogin', 'Silahkan Login Terlebih Dahulu');
			return redirect()->to(base_url('login'));
		}
		$hapus = $this->tracking_study->deleteData($id);
		if ($hapus) {
			session()->setFlashdata('warning', 'Delete Data  Berhasil');
			return redirect()->to(base_url('tracking'));
		}
	}
}
