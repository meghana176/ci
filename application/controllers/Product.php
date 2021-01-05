<?php
class Product extends CI_Controller
{
	public function index()
	{
		$this->load->model('User');
		$s=$this->User->firstname();
		print_r($s);
	}
	
}