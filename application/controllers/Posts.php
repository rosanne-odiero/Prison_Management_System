<?php
	class Posts extends CI_Controller{
		public function index(){

			$data['title'] = 'Most recent prisoner';

			$data['prisoner'] = $this->post_model->get_prisoner();

			$this->load->view('templates/header'); 
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer'); 
		}
	}