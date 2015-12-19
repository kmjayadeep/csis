<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paymentcs extends CI_Controller {

	public function index()
	{
		$this->load->library('session');
		$email = $this->session->email;
		if(!$email)
			redirect('/regcs');

		$data = $this->db->get_where('users',array('email'=>$email))->row_array();

		$this->load->view('includes/header');
		$this->load->view('paycs',$data);
		$this->load->view('includes/footer');
	}
}
