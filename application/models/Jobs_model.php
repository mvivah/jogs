<?php
class Jobs_model extends CI_Model
{
    public function __construct(){
        $this->load->database();
    }
    public function save(){
        //Create user data array
        $data = array(
            'staffId' => $this->input->post('staffId'),
            'firstname' => $this->input->post('firstname'), 
            'lastname' => $this->input->post('lastname'), 
            'email' => $this->input->post('email'), 
            'phone' => $this->input->post('phone'), 
            'level' => $this->input->post('level'), 
            'username' => $this->input->post('username'), 
        );
        //Insert the data
        return $this->db->insert('jobs', $data);
    }
    public function get_jobs(){

        $query = $this->db->get('jobs');
        return $query->result_array();

    }
}