<?php 
	class Post_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_prisoner($firstname = FALSE){
			if($firstname === FALSE){
				$this->db->order_by('prisoner.id','DESC');
				$this->db->join('duty','duty.id = prisoner.duty_id');
				$query = $this->db->get('prisoner');
				return $query->result_array();
			}


			$query = $this->db->get_where('prisoner', array('firstname'=>$firstname));
			return $query->row_array();
		}

		public function add_prisoner($prisoner_image){
			$slug =url_title($this->input->post('nationalid'));

			$data = array(
				'firstname'=> $this->input->post('firstname'),
				'lastname'=> $this->input->post('lastname'),
				'email'=> $this->input->post('email'),
				'nationalid'=> $this->input->post('nationalid'),
				'charges'=> $this->input->post('charges'),
				'duty_id' => $this->input->post('duty_id'),
				'number'=> $this->input->post('number'),
				'prisoner_image' => $prisoner_image
			);

				return $this->db->insert('prisoner', $data);
		}

		public function delete_post($id){
			$this->db->where('id',$id);
			$this->db->delete('prisoner');
			return true;
		}

		public function update_post(){
			$slug =url_title($this->input->post('nationalid'));

			$data = array(
				'firstname'=> $this->input->post('firstname'),
				'lastname'=> $this->input->post('lastname'),
				'email'=> $this->input->post('email'),
				'nationalid'=> $this->input->post('nationalid'),
				'charges'=> $this->input->post('charges'),
				'duty_id' => $this->input->post('duty_id'),
				'number'=> $this->input->post('number')
			);

			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('prisoner', $data);
		}

		public function get_duties(){
			$this->db->order_by('name');
			$query = $this->db->get('duty');
			return $query->result_array();
		}
	}
