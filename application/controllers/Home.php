<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Graded Jobs';
		$data['jobs'] = $this->Jobs_model->get_jobs();
		
		$this ->load->view('templates/header');
		$this ->load->view('home/index',$data);
		$this ->load->view('templates/footer');
	}
	
}
