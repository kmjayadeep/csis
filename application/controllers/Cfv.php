<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cfv extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/footer');
		$this->load->view('cfv');
		
	}
	public function register(){
		$a=array();		
		$a['name']=$this->input->post('name');
		$a['mid']=$this->input->post('mid');
		$a['gen']=$this->input->post('gen');
		$a['phone']=$this->input->post('phone');
		$a['sec']=$this->input->post('sec');
		$a['mem']=$this->input->post('mem');
		$a['college']=$this->input->post('college');
		$a['whatsapp']=$this->input->post('whatsapp');
		$a['hrs']=$this->input->post('hrs');
		$a['exp']=$this->input->post('exp');
		if($this->input->post('des'))
			$a['des']='yes';
		else
			$a['des']='no';
		if($this->input->post('pub'))
			$a['pub']='yes';
		else
			$a['pub']='no';
		$a['email']=$this->input->post('email');
		if(!($a['name']&&$a['mid']&&$a['gen']&&$a['phone']&&$a['sec']&&$a['mem']&&$a['college']&&$a['whatsapp']&&$a['hrs']&&$a['exp']&&$a['email'])||($a['name']=='no'&&$a['name']=='no'))
			$x['error']=1;
		else
			$this->db->insert("volunteer",$a);
	}
}
