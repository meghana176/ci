<?php
class User extends CI_controller{

	function __const() {
		parent::__const();

       $this->load->model("Auth_model");
      


     }
		
		public function index() {

//echo "testing";
//die();
			$this->load->view('user/createuser');

		}


		function createuser() {

			if($this->input->post('submit') == TRUE) {

				//echo $this->input->post('name');

               // $userdata['uname'] = $this->input->post('name');
		        //$userdata['uemail'] = $this->input->post('email');
		      //  $userdata['umobile'] = $this->input->post('mobile');
		      //  $userdata['ulocation'] = $this->input->post('location');

		        $userdata =  array(
		        	'uname' => $this->input->post('name'),
		        	'uemail' => $this->input->post('email'),
		           'umobile' => $this->input->post('mobile'),
                   'ulocation' => $this->input->post('location'),

		         );

		        //print_r($userdata);
		       // die();

		        $this->load->model("Auth_model");

		        $data['alert'] = $this->Auth_model->create($userdata );

		           $this->load->view('user/user_success',$data);

		
	}


}


    function delete_a_user($uid)
    {
    	$data['msg'] = $this->usermodel->delete_a_user($uid);
    $this->load->view('user/deleteuser',$data);
    }

    function viewuser() {
    	 $this->load->model("Usermodel");


    	$users['info'] = $this->Usermodel->listofusers();
  

    	$this->load->view('user/viewusers',$users);
    }

    function edituser() {
    $userdata['uid'] = $this->uri->segment(3);

        $this->load->view('user/edituser',$userdata);

    }


    function updateuser() {

			if($this->input->post('esubmit') == TRUE) {

                $userdata['uid'] = $this->input->post('uid');
                $userdata['ename'] = $this->input->post('ename');
		        $userdata['eemail'] = $this->input->post('eemail');
		        $userdata['emobile'] = $this->input->post('emobile');
		        $userdata['elocation'] = $this->input->post('elocation');

		        $this->load->model("Usermodel");


		        $data['alert'] = $this->Usermodel->updateuser($userdata);

		            $this->load->view('user/updatesuccess',$data);

	    }
    }

}

?>

