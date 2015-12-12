<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->library('session');
		if($this->session->login){
			$this->load->view('admin/header');
			$this->load->view('admin/home');
			$this->load->view('admin/footer');
		}
		else
			redirect('/admin/login');
	}
}
