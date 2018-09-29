<?php
	class Posts extends CI_Controller{
		public function index(){

			$data['title'] = 'Most recent prisoner';

			$data['prisoner'] = $this->post_model->get_prisoner();


			$this->load->view('templates/header'); 
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer'); 
		}

		public function create(){
			$data['title'] = 'Add Prisoner';

			$data['duty'] =  $this->post_model->get_duties();

			$this->form_validation->set_rules('firstname', 'Firstname','required');
			$this->form_validation->set_rules('lastname', 'Lastname','required');
			$this->form_validation->set_rules('email', 'Email');
			$this->form_validation->set_rules('nationalid', 'NationalID','required');
			$this->form_validation->set_rules('charges', 'Charges','required');
			$this->form_validation->set_rules('number', 'Phone Number');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header'); 
			 	$this->load->view('posts/create', $data);
				$this->load->view('templates/footer');  	
			}
			else{
				//Upload image
				$config['upload_path'] = './assests/images/prisoner';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['max_width'] = '500';
				$config['max_height'] = '500';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
					$prisoner_image = 'noimage.jpg';
				}
				else{
					$data = array('upload_data' => $this->upload->data());
					$prisoner_image = $_FILES['userfile']['name']; 
				}

				$this->post_model->add_prisoner($prisoner_image); //create_post
				redirect('posts');
			}

		}

		public function view($slug = NULL){
			$data['prisoner'] = $this->post_model->get_prisoner($slug);

			if(empty($data['prisoner'])){
				show_404();
			}

			$data['firstname'] = $data['prisoner']['firstname'];

			$this->load->view('templates/header'); 
			$this->load->view('posts/view', $data);
			$this->load->view('templates/footer');  	
		}

		public function delete($id){
			$this->post_model->delete_post($id);
			redirect('posts');
		}

		public function edit($slug){
			$data['prisoner'] = $this->post_model->get_prisoner($slug);

			$data['duty'] =  $this->post_model->get_duties();

			if(empty($data['prisoner'])){
				show_404();
			}

			$data['title'] = 'Edit Prisoner Details';

			$this->load->view('templates/header'); 
			$this->load->view('posts/edit', $data);
			$this->load->view('templates/footer');  	
		}

		public function update(){
			$this->post_model->update_post();
			redirect('posts');
		}
	}