<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regcs extends CI_Controller {

	public function index()
	{
		$this->load->library('session');
		if($this->input->post('register')){

			$data = array(
				'name'=>$this->input->post('name'),
				'email'=>$this->input->post('email'),
				'phone'=>$this->input->post('phone'),
				'sex'=>$this->input->post('sex'),
				'mtype'=>2,
				'mid'=>$this->input->post('mid'),
				'section'=>$this->input->post('section'),
				'college'=>$this->input->post('college'),
				'food'=>$this->input->post('food'),
				'acco1'=>$this->input->post('day1'),
				'acco2'=>$this->input->post('day2'),
				'acco3'=>$this->input->post('day3'),
				'payment_status'=>0,
				'status'=>1
				);
			if($data['acco1']=='on')
				$data['acco1'] = 1;
			else
				$data['acco1'] = 0;
			if($data['acco2']=='on')
				$data['acco2'] = 1;
			else
				$data['acco2'] = 0;
			if($data['acco3']=='on')
				$data['acco3'] = 1;
			else
				$data['acco3'] = 0;
 			$this->db->insert('users',$data);
			if($this->db->affected_rows()==1){
				$this->session->set_userdata('email',$data['email']);
				redirect('/paymentcs');
			}
		}
		$this->load->view('includes/header');
		$this->load->view('regcs');
		$this->load->view('includes/footer');
	}
}
