<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		if(!$this->session->userdata('level')=='Admin')
		{
				redirect('login');
		}
		$data['title'] = 'Graded Jobs';
		$data['jobs'] = $this->Jobs_model->get_jobs();

		$this ->load->view('templates/header');
		$this ->load->view('home/index',$data);
		$this ->load->view('templates/footer');
	}
	public function store()
	{
		$this->load->database();
		$insert = $this->input->post();
		$this->db->insert('jobs', $insert);

		//Set message
		  $this->session->set_flashdata('job_added', 'New job saved');
		  redirect('home');
	 }

}
