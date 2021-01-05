<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Blog extends CI_Controller{

	public function index()
	{
		$this->load->model('Usermodel');
		$data['users']=$this->Usermodel->getusers();
		//$this->load->view('filename',$data,true/false);
		$this->load->view('home',$data);
	}
}