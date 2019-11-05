<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Abaut extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function Dashboard(){
		echo "ini dashboard";
	}
}
