<?php 
	class Post_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_prisoner($lastname = FALSE){
			if($lastname === FALSE){
				$query = $this->db->get('prisoner');
				return $query->result_array();
			}

			$query = $this->db->get_where('prisoner', array('lastname'=>$lastname));
			return $query->row_array();
		}

	}
