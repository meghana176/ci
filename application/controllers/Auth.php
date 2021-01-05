<?php
class Auth extends CI_Controller{
	//this function will show register page
	public function register() {

		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name','First name','required');
		$this->form_validation->set_rules('last_name','Last name','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('phone','Phone','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('gender','gender','male|female');

		if($this->form_validation->run() ==false) {
			//here we will load our view
			$this->load->view('register');
        } else {
        	//here we will save our user record in db
        	$this->load->model('Auth_model');
        	$formArray = array(
				'name' => $this->input->post('first_name'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password')),
				'phone' => $this->input->post('phone'),
				'created_at' => date('Y-m-d H:i:s') ,
				'updated_at' => date('Y-m-d H:i:s') ,
				'location' =>  $this->input->post('location'),
				'gender' => $this->input->post('selection'),
				'conditions' =>$this->input->post('conditions')
			);

           $rigister = $this->Auth_model->create($formArray);

          //echo  $rigister;
         //   die();

		   if($rigister){
			   echo "<p>Registration Failed...</p>";
		   }else{
			echo "<p>Registration Success...</p>";
		   }

            //$this->session->set_flashdata("msg","Your has been created succesfully." );
            //redirect(url:base_url() . "index.php/Auth/register");





        }

	}

	public function list() {
		$this->load->model('Auth_model');
		$registers = $this->Auth_model->users_info();
	    $this->load->view('list');
	}
}