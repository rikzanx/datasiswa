<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_siswa extends CI_Model {

	public function selectAll($table)
	{
		$query = $this->db->get($table);
		return $query->result();
	}

	public function selectById($table,$where)
    {
        $query = $this->db->get_where($table,$where);
        return $query->row();
    }

    public function insert($table,$data)
    {
    	$query = $this->db->insert($table, $data);
    	return $query;
    }

    public function update($table,$data,$where)
    {
    	$query = $this->db->update($table,$data,$where);
    	return $query;
    }

    public function delete($table,$where)
    {
    	$query = $this->db->delete($table, $where);
    	return $query;
    }


}