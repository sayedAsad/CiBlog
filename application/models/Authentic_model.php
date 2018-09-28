<?php

class Authentic_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function register()
	{
		$data = array(
						'name' => $this->input->post('name'),
						'fullname' => $this->input->post('fname'),
						'address' => $this->input->post('add')
					);
				     	
				    return $this->db->insert('test', $data);
	} 

}