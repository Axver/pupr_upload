<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_perencanaan_user extends CI_Controller {

	public function index($id)
	{
		$sel_paket=$this->db->get("paket")->result();
		$query=$this->db->get("jenis_pekerjaan")->result();
		$query1=$this->db->get("jenis_bahan_alat")->result();
		$data['pekerjaan']=$query;
		$data['alat']=$query1;
		$data['paket']=$sel_paket;
		$data['id']=$id;
		$this->load->view("user/edit_perencanaan_user",$data);

	}

	public function data($id)
	{
		$sel_paket=$this->db->get("paket")->result();
		$query=$this->db->get("jenis_pekerjaan")->result();
		$query1=$this->db->get("jenis_bahan_alat")->result();
		$data['pekerjaan']=$query;
		$data['alat']=$query1;
		$data['paket']=$sel_paket;
		$data['id']=$id;
		$this->load->view("user/edit_perencanaan_user",$data);
	}


}
