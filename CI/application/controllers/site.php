<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index(){
	
		if($this->session->userdata('logged_in')){
		
			redirect('/site/home','refresh');
			
		}	
		else{
		
			$this->load->view('user_login');
			
		}	
		
	}
	
	public function home(){
	
		$this->load->view('home');
	
	}
	
	public function signup_init(){
	
		$this->load->view('signup');
	
	}
	
	function signup_insert(){
	
		$this->load->model('db_model');
		
		$this->db_model->insert_new_user();
		
		$this->index();
	
	}
	
	function login_confirm(){
	
		$this->load->model('db_model');
		$res = $this->db_model->login();
		
		if($res){
		
			$this->index();
		
		}else{
		
			$data['error'] = TRUE;
			$this->load->view('user_login', $data);
		
		}
	
	}
	
	function logout(){
	
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('username');
	
		redirect('/site/','refresh');
	
	}

}

?>