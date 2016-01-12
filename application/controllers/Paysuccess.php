<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paysuccess extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('paysuccess');
		$this->load->view('includes/footer');
	}

	public function api(){
		$d = $this->input->post('data');
		$data = json_decode($d);
		if(is_array($data))
			$data = $data[0];

		$email =  $data->userEmailId;

		$this->db->update('users',array(
				'payment_status'=>1
			),array(
				'email'=>$email
			));
		echo 'done';
	}
}