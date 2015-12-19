<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regnoncs extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('regnoncs');
		$this->load->view('includes/footer');
	}
	public function register(){
		// print_r($_REQUEST);
		$data = array(
				'name'=>$this->input->post('name'),
				'email'=>$this->input->post('email'),
				'phone'=>$this->input->post('phone'),
				'sex'=>$this->input->post('sex'),
				'mtype'=>$this->input->post('mtype'),
				'mid'=>$this->input->post('mid'),
				'section'=>$this->input->post('section'),
				'college'=>$this->input->post('college'),
				'exp'=>$this->input->post('exp'),
				'why'=>$this->input->post('why'),
				'expect'=>$this->input->post('expect'),
				'payment_status'=>0,
				'status'=>0
		);
		$this->db->insert('users',$data);
		if($this->db->affected_rows()==1){
			echo json_encode(array('status'=>true));
		}else
			echo json_encode(array('status'=>false));
	}
}
