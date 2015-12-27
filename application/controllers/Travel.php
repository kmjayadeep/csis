<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Travel extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('travel');
		$this->load->view('includes/footer');
	}
}