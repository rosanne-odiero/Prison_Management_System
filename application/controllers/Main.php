<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('Loginmsg');
	}
	public function signup()
	{
		$this->load->view('signup');
	}
	public function registrar()
	{
		if($this->session->userdata('is_logged_in')){
          $this->load->view('registrar');
		}else {
			redirect('index.php/Main/restricted');
		}
		
	}
	public function restricted()
	{
		$this->load->view('restricted');
	}
	
	public function login_validation()
	{
	$this->load->library('form_validation');
	$this->form_validation->set_rules('email', 'Email', 'required|trim|callback_Validate_credentials');
	$this->form_validation->set_rules('password', 'Password', 'required|md5');

	if($this-> form_validation->run()){
		
		$data=array('email'=>$this->input->post('email'), 'is_logged_in'=>1);
		$this->session->set_userdata($data);
		redirect('index.php/Main/registrar');
	}else{
	$this->load->view('Loginmsg');


}
 
 }
	
	

public function signup_validation()
{
	$this->load->library('form_validation');
	$this->form_validation->set_rules('email','Email', 'required|trim|valid_email|is_unique[register.email]');
	$this->form_validation->set_message('is_unique', "That email already exists");
	$this->form_validation->set_rules('fullname','Full Name', 'required|trim');
	$this->form_validation->set_rules('occupation','Occupation', 'required|trim');
	$this->form_validation->set_rules('gender','Gender', 'required|trim');
	$this->form_validation->set_rules('password','Password', 'required|trim');
	$this->form_validation->set_rules('cpassword','Confirm Password', 'required|trim|matches[password]');
 if($this->form_validation->run())
 {
	 $enkey=md5(uniqid());
	 $this->load->model('model_users');
	 if($this->model_users->add_register($enkey))
	 {
		echo "Records addded successfully";
		$this->load->view('loginmsg');

	 }else {
		 echo "Problem adding to database.";
		 $this->load->view('signup');
	 }
	 }
 }

 public function enregistrar($enkey)
 {
	 $this->load->model('model_users');
	 if($this->model_users->is_key_valid($enkey)){
		echo "Valid Key";
	 }else {
		 echo "invalid key";
	 }
 
}
public function is_key_valid($enkey)
{
	$this->db->where('enkey', $enkey);
	$query=$this->db->get('register');
	if($query->numrows()==1)
	{
		return true;

	}else {
		return false;
	}
}
	public function validate_credentials()
	{
		$this->load->model('model_users');
		if($this->model_users->can_log_in())
		{

			return true;
		}else{
			$this->form_validation->set_message('Validate_credentials', 'Incorrect username/password');
			return false;
		}
		}
		public function logout()
		{
			$this->session->sess_destroy();
			redirect("index.php/Main/index");
		}
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
		}

	}
	
	
	

