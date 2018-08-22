<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class User_model extends CI_Model {
    public function register($enc_password){
        //User data array
        $data = array(
            'staffId' => $this->input->post('staffId'),
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'level' => $this->input->post('level'),
            'username' => $this->input->post('username'),
            'password' => $enc_password,
        );
        //Insert the data
        return $this->db->insert('users', $data);
    }
    public function check_username_exists($username){
        $query = $this->db->get_where('users', array('username'=>$username));
        if(empty($query->row_array())){
            return true;
        }else
        {
            return false;
        }
    }
    public function check_email_exists($email){
        $query = $this->db->get_where('users', array('email'=>$email));
        if(empty($query->row_array())){
            return true;
        }else
        {
            return false;
        }
    }
    public function login($username,$password){
        //Validate
        $this->db->where('username',$username);
        $this->db->where('password',$password);

        $result = $this->db->get('users');
        if($result->num_rows() == 1){
            //return $result->row(0)->id;
            $user = $result->row();
            return $user;
            //return $result->result_array();
        }else{
            return false;
        }
    }
    public function get_users(){

        $query = $this->db->get('users');
        return $query->result_array();

    }
    public function fetch_user($id){
        $this->load->database();
        $q = $this->db->get_where('users', array('id' => $id));
        echo json_encode($q->row());

    }
    
 }
