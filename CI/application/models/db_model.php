<?php

class db_model extends CI_Model{

    function get_db($bktitle){
	
		$query = $this->db->query("SELECT title FROM book WHERE title = '$bktitle'");
		return $query->result();
	
	}
	
	function insert_new_user(){
	
		$data = array(
		
			'name' =>  $this->input->post('name'),
			'username' => $this->input->post('uname'),
			'password' => $this->input->post('pword'),
			'email' => $this->input->post('email') ,
			'mobile_no' =>$this->input->post('cnum') ,
			'college' => $this->input->post('college') ,
			'userid_no' => $this->input->post('usr_num'),
			'user_type' => 'User' ,
			
		);
	
		$this->db->insert('user', $data);
	
	}
	
	function login(){
	
		$uname = $this->input->post('uname');
		$pword = $this->input->post('pword');
	
		$found = $this->db->simple_query("SELECT username, password FROM user WHERE username = '$uname' AND password = '$pword' ");
	
		if($found){
		
			$userdata = array(
		
				'username' => $uname,
				'logged_in' => TRUE
			
			);
			
			$this->session->set_userdata($userdata);
			
			return TRUE;
			
		}else{
		
			return FALSE;
		
		}
	
	}
	
}

?>