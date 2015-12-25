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

		$acco = 0;

		if($data['acco1']=='1')
			$acco++;
		if($data['acco3']=='1')
			$acco++;

		$data['acco'] = $acco*100;

		$data['accotickets'] = $acco;

		$data['total'] = round(($data['acco']+550)*102.987/100,2);

		$this->load->view('includes/header');
		$this->load->view('paycs',$data);
		$this->load->view('includes/footer');
	}
}
