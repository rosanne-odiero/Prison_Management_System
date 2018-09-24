<?php
 class Model_users extends CI_Model
 {
     public function can_log_in()
     {
         $this->db->where('email', $this->input->post('email'));
        $this->db->where('password', md5($this->input->post('password')));
        $query=$this->db->get('register');
        if($query->num_rows()==1)
        {
         return true;   
        }else {
            return false;
        }
     }
     public function add_register($enkey)
     {
        $data=array(
            'email'=>$this->input->post('email'),
            'password'=>md5($this->input->post('password')),
            'fullname'=>$this->input->post('fullname'),
            'occupation'=>$this->input->post('occupation'),
            'phonenumber'=>$this->input->post('phonenumber'),
            'gender'=>$this->input->post('gender'),
            'enkey'=>$enkey
        ); 
        $query=$this->db->insert('register',$data);
if($query){
    return true;
}else {
    return false;
}
     }
 }