<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_cr extends CI_Controller {

	public function index()
	{
		$where= array(
			'id_siswa' => $_GET['id_siswa']
		);
		$data['siswa']= $this->model_siswa->selectById('siswa',$where);
		$this->load->view('edit_view',$data);
	}

	public function aksiedit()
	{
		$data= array(
			'id_siswa' => $_POST['id_siswa'] ,
			'nama_siswa' => $_POST['nama_siswa'] , 
			'alamat' => $_POST['alamat'] ,
			'umur' => $_POST['umur']
		);
		$where= array(
			'id_siswa' => $_GET['id_siswa']
		);
		$query = $this->model_siswa->update('siswa',$data,$where);
		header('location:'.base_url());
	}

}