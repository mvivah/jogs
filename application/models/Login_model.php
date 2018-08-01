<?php
class Login_model extends CI_Model
{
    public function __construct(){
        $this->load->database();
    }
    public function getUsers(){

        $query = $this->db->get('jobs');
        return $query->result_array();

    }
}