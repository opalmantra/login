<?php
class LoginController extends CI_Controller{
	public function index(){
		$this->load->view('login');
	}	
	public function checkLogin(){
		$this->form_validation->set_rules('username', 'Username', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|callback_verifyUser');
		if ($this->form_validation->run() == false){
				$this->load->view('login');
		}else{
			redirect('HomeController/index');
		}
	}		
	public function verifyUser(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');	
		$this->load->model('LoginModel');		
		if($this->LoginModel->login($username, $password)){
			return true;
		}else{
			$this->form_validation->set_message('verifyUser', 'Incorrect username or password');
			return false;
		}
	}	
}
?>