<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_Admin extends CI_Controller 

{

	public function __construct()
	{

		parent::__construct();

	
		$this->load->library ('form_validation');
	}
	

		public function index()
	{
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');

		$this->form_validation->set_rules('password','Password','trim|required');

		if($this->form_validation->run() == false){
		$this->load->view ('loginAdmin');

		} else {

			$this->_login();
		}
	
	}


	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$adminlogin = $this->db->get_where('adminlogin',['email' => $email])->row_array();

		// jikauserada
		if($adminlogin){

		// jikauseraktif
			if($adminlogin['is_active'] == 1){

				if(password_verify($password,$adminlogin['password'])){
					$data = [
							'email' => $adminlogin['email'],
							'role_id'=> $adminlogin['role_id']
					];				$this->session->set_userdata($data);
					if ($adminlogin ['role_id'] == 2){
						redirect('admin');
					}
						else{
							$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email Tidak Tersedia</div>');
							redirect('login_Admin');
					}
				} 
				else {
								$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Wrong Password</div>');
						redirect('login_Admin');
				}
			} else {

						$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">This email has not been Activated </div>');
						redirect('login_Admin');

				} }
	else {

				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email is not Registered </div>');
						redirect('login_Admin');
		}
			
	}
	// function registrasi
	
	public function registration()
	{
		$this->form_validation->set_rules('name','Name','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[adminlogin.email]',['is_unique' => 'This Email Has Been Registered!']);
		$this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]');
		$this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');
		if ( $this->form_validation->run() == false) {
		$this->load->view ('registrationAdmin');
	
	} else {
		
		$data = [
					'name' => htmlspecialchars($this->input->post('name',true)),
					'email' => htmlspecialchars($this->input->post('email',true)),
					'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT), 
							'role_id' => 2, 
							'is_active'=> 1, 
							'date_created'=>time()
						];
						$this->db->insert('adminlogin',$data);
						$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Congraturlation! your account has been Created. Please Login</div>');
						redirect('login_Admin');

		}

	}

	



	public function logout()
{
$this->session->unset_userdata('email');

$this->session->unset_userdata('role_id');

$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Log Out Successful</div>');
redirect ('login_Admin');

}
		}
		


