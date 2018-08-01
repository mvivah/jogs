<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function register()
    {	$data['title'] = 'Register';
        $this->form_validation->set_rules('staffId','Staff ID','required');
        $this->form_validation->set_rules('firstname','Firstame','required');
        $this->form_validation->set_rules('lastname','Lastame','required');
        $this->form_validation->set_rules('username','Username','required|callback_check_username_exists');
        $this->form_validation->set_rules('email','Email','required|callback_check_email_exists');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('password2','Confirm Password','matches[password]');
        $this->form_validation->set_rules('level','Level','required');
        if($this->form_validation->run()===FALSE){
            $this->load->view('templates/header');
            $this->load->view('users/register', $data);
            $this->load->view('templates/footer');
        }else{
            //Encrypt Password
            $enc_password = md5($this->input->post('password'));
            $this->User_model->register($enc_password);
            //Set message
            $this->session->set_flashdata('user_registered', 'You can now login');
            redirect('users');

        }
    }

    //Check if username exists
    public function check_username_exists($username){
        $this->form_validation->set_message('check_username_exists','This username is already taken');
        if($this->User_model->check_username_exists($username)){
            return true;
        }else{
            return false;
        }
    }

    //Check if email exists
    public function check_email_exists($email){
        $this->form_validation->set_message('check_email_exists','This email is already taken');
        if($this->User_model->check_email_exists($email)){
            return true;
        }else{
            return false;
        }
    }

    //User Login
    public function login(){
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run()===FALSE){
            $this->load->view('login');
        }else{
            //Get username
            $username = $this->input->post('username');
            //Get and encrypt password
            $password = md5($this->input->post('password'));
            //Login User
            $user_id = $this->User_model->login($username,$password);
            
            if($user_id){
            //Create Session
            $user_data = array('user_id'=>$id,'username'=>$username,'level'=>$level,'logged_in'=>true);
            $this->session->set_userdata($user_data);
            //Set message
            $this->session->set_flashdata('login_success', 'You have logged in');
            redirect('home');
            }else{
            //

            //Set message
            $this->session->set_flashdata('login_failed', 'Your login failed');
            redirect('login');
            }

        }
    }
    //Logout Users
    public function logout(){
        //Unset userdata
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        //Set message
        $this->session->set_flashdata('user_logout', 'You have logged out');
        redirect('login');
    }
    
    //Show Users
    public function index(){
        $data['title'] = 'System Users';
		$data['users'] = $this->User_model->get_users();
        $this->load->view('templates/header');
        $this->load->view('users/index', $data);
        $this->load->view('templates/footer');
    }
}
