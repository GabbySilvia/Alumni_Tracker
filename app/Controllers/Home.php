<?php

namespace App\Controllers;
use App\Models\DashboardModel;


class Home extends BaseController
{
	public function __construct()
	{
		$this->dashboard_model = new DashboardModel();
	}

	public function index()
	{
		// proteksi halaman
		if (session()->get('username') == '') {
			session()->setFlashdata('haruslogin', 'Silahkan Login Terlebih Dahulu');
			return redirect()->to(base_url('login'));
		}

		$data['data_tracking']       	= $this->dashboard_model->getCountTrackingStudy();
		return view('dashboard',  $data);
	}
}