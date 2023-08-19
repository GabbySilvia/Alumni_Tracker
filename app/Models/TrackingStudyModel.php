<?php

namespace App\Models;

use CodeIgniter\Model;

class TrackingStudyModel extends Model
{
    protected $table = 'tracker_study';

	public function getData($id = false)
	{
		if ($id === false) {
			return $this->table('tracker_study')
				->get()
				->getResultArray();
		} else {
			return $this->table('tracker_study')
				->where('tracker_study.id', $id)
				->get()
				->getRowArray();
		}
	}
	public function insertData($data)
	{
		return $this->db->table($this->table)->insert($data);
	}

	public function updateData($data, $id)
	{
		return $this->db->table($this->table)->update($data, ['id' => $id]);
	}
	public function deleteData($id)
	{
		return $this->db->table($this->table)->delete(['id' => $id]);
	}
}
