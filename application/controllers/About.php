<?php defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller 
{
	public function index()
	{
		$this->load->model('about_model');
		$data['about'] = $this->about_model->get_about();

		$this->load->view('templates/header');
		$this->load->view('pages/about', $data);
		$this->load->view('templates/footer');
	}

}

