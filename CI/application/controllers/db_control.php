<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Db_control extends CI_Controller{
	
	public function signup_insert(){
	
		$this->load->model('db_model');
		
		$this->db_model->insert_new_user($data);
		
		$this->load->view('user_login');
		
	}
	
	public function login(){
	
		
	
	
	
	}
	

}

?>