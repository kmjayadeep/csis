<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('registration');
		$this->load->view('includes/footer');
	}
}
