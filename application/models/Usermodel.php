<?php
class Usermodel extends CI_model{



	public function  setuser($data) {

//		$user = array('uname' => $data['name'],
//			          'uemail' => $data['email'],
//			          'umobile' => $data['mobile'],
//			          'ulocation' => $data['location']);

		$qry  = $this->db->insert('users',$data);

		   if($qry == TRUE) {
		    	return  "User created successfully";

		   }
		   else{
		   	    return "failed to create user!";
           }


	}


	function listofusers() {

		$qry =$this->db->get('users');

        return $qry->result();
		
	}

	function updateuser($data){

		$ins = array(
		       'uname' =>$data['ename'],
		          'email' =>$data['email'],
		             'uphone' =>$data['emobile'],
		                 'ulocation' =>$data['elocation'],
		              );
		$this->db->where('uid',$data['uid']);
        $qry = $this->db->update('users',$ins);

        if($qry == TRUE) {
        	return $msg = "User updated successfully";
        }
        else{
        	return $msg ="failed tonupdate user";
        }

        }


        function delete_a_user($uid)
        {
        $this->db->where('uid',$uid);

        $qry = $this->db->delete('users');

        if($qry==TRUE) {
        	return $message="record deleted";
         
        }
        else{
        	return $message="record not deleted";
        }

    }

}
?>

