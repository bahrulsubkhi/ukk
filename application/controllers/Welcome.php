<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index(){
		$data['user']=$this->db->query("SELECT*FROM user")->result();
		$data['title']='ini index';
		$this->load->view('welcome_message',$data);
	}
	public function savedata(){
		$data['id']='';
		$data['nama']=$this->input->post('nama');
		$data['tlp']=$this->input->post('tlp');
		$data['alamat']=$this->input->post('alamat');
		// echo json_encode($data);
		$this->db->insert('user',$data);
		echo "data sukses insert";
		// $this->db->query("INSERT INTO `user` (`id`, `nama`, `tlp`, `alamat`) VALUES (NULL,'aji','123','pare');");
	}
	
}
