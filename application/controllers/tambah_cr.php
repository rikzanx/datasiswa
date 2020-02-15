<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_cr extends CI_Controller {

	public function index()
	{
		$this->load->view('tambah_view');
	}

	public function aksitambah()
	{
		$data= array(
			'id_siswa' => $_POST['id_siswa'] ,
			'nama_siswa' => $_POST['nama_siswa'] , 
			'alamat' => $_POST['alamat'] ,
			'umur' => $_POST['umur']
		);
		$query= $this->model_siswa->insert('siswa',$data);
		header('location:'.base_url());
	}

}