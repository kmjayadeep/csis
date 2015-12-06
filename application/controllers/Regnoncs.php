<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regnoncs extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('regcs');
		$this->load->view('includes/footer');
	}
}
