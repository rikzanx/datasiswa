<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_cr extends CI_Controller {

	public function index()
	{
		$data['siswa']=$this->model_siswa->selectAll('siswa');
		$this->load->view('siswa_view',$data);
	}
	public function aksihapus()
	{
		$where = array(
			'id_siswa' => $_GET['id_siswa']
		);
		$query=$this->model_siswa->delete('siswa',$where);
		header('location:'.base_url());
	}

}