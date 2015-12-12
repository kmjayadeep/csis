<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Volunteers extends CI_Controller {

	public function index()
	{
		$data = array();
		$this->load->library('session');
		if($this->session->login){
			$data['vol'] = $this->db->get_where('volunteer','status=1')->result_array();
			$this->load->view('admin/header');
			$this->load->view('admin/vol',$data);
			$this->load->view('admin/footer');
		}
		else
			redirect('/admin/login');
	}
}
