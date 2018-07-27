<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {
	public function index()
	{
		$data['title'] = 'Graded Jobs';
		$data['jobs'] = $this->Jobs_model->get_jobs();
		$this->load->view('jobs');
		$this ->load->view('header');
		$this ->load->view('jobs/index',$data);
		$this ->load->view('footer');
	}
	
	
}
