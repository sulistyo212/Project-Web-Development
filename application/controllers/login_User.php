<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_user extends CI_Controller 

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
		$this->load->view ('loginuser');

		} else {

			$this->_login();
		}
	
	}


	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$userlogin = $this->db->get_where('userlogin',['email' => $email])->row_array();

		// jikauserada
		if($userlogin){

		// jikauseraktif
			if($userlogin['is_active'] == 1){

				if(password_verify($password,$userlogin['password'])){
					$data = [
							'email' => $userlogin['email'],
							'role_id'=> $userlogin['role_id']
					];				$this->session->set_userdata($data);
					if ($userlogin ['role_id'] == 1){
						redirect('isiuser');
					}
						else{
							$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email Tidak Tersedia</div>');
							redirect('login_User');
					}
				} 
				else {
								$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Wrong Password</div>');
						redirect('login_User');
				}
			} else {

						$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">This email has not been Activated </div>');
						redirect('login_User');

				} }
	else {

				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email is not Registered </div>');
						redirect('login_User');
		}
			
	}
	// function registrasi
	
	public function registration()
	{
		$this->form_validation->set_rules('inisial_instansi','Nama Instansi','required|trim|max_length[6]');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[userlogin.email]',['is_unique' => 'This Email Has Been Registered!']);
		$this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]');
		$this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');
		if ( $this->form_validation->run() == false) {
		$this->load->view ('registrationUser');
	
	} else {
		
		$data = [
					'inisial_instansi' => htmlspecialchars($this->input->post('inisial_instansi',true)),
					'email' => htmlspecialchars($this->input->post('email',true)),
					'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT), 
							'role_id' => 1, 
							'is_active'=> 1, 
							'date_created'=>time()
						];
						$this->db->insert('userlogin',$data);
						$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Congraturlation! your account has been Created. Please Login</div>');
						redirect('login_User');

		}

	}


	



	public function logout()
{
$this->session->unset_userdata('email');

$this->session->unset_userdata('role_id');

$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Log Out Successful</div>');
redirect ('login_User');

}
		}
		


