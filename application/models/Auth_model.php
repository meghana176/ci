<?php
class Auth_model extends CI_Model{
	//this function will save a user record in database
	public function create($formArray){
	  $qry = $this->db->insert('users',$formArray);
	  		   if($qry == TRUE) {
		    	return $alert = "User created successfully";

		   }
		   else{
		   	    return $alert = "failed to create user!";
           }

		//print_r($formArray);
	}

	public function users_info(){
		$query = $this->db->get('users');
	   return $query->result();
	}
}
?>