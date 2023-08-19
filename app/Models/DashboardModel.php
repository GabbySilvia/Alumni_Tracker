<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{
	protected $table = 'users';

	public function getCountUser()
	{
		return $this->db->table("users")->countAll();
	}

	public function getCountTrackingStudy()
	{
		return $this->db->table("tracker_study")->countAll();
	}

}
