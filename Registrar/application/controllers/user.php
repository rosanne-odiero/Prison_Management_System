<?php
	class user extends CI_Controller(){
		public function register(){
			$data['title'] = 'Sign Up';

			$this->form_validation->set_rules('firstname','Firstname','required');
			$this->form_validation->set_rules('lastname','Lastname','required');
			$this->form_validation->set_rules('email','Email','required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('user/register', $data);
				$this->load->view('templates/header');
			}
			else{
				die('continue');
			}
		}
	} 