<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paysuccess extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('paysuccess');
		$this->load->view('includes/footer');
	}
}