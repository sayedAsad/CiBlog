<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller 
{

	public function index()
	{
		$data['title'] = "Register";
		$this->load->view('templates/header');
		$this->load->view('pages/register', $data);
		$this->load->view('templates/footer');
	}

	public function register()
	{
		$this->load->model('Authentic_model');
		if($this->Authentic_model->register())
		{
			echo "success";
			redirect('/');
		}
		else
		{
			echo "faild";
		}
	}
}