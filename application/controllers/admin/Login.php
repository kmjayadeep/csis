<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->library('session');

		if($this->session->login){
			redirect('/admin');
		}
		$data = array();
		if($this->input->post('user')){

			$user = $this->input->post('user');
			$pass = $this->input->post('pass');

			$user = $this->db->escape($user);
			if(!$user||!$pass)
				$data['error'] = 'Fields missing';

			else{
				$pass = $this->db->escape(md5($pass));
				$res = $this->db->query("select * from admin where username=".$user." and password=".$pass);

				if($res->num_rows()==0){
					$data['error'] = 'Incorrect email or password';
				}else{
					$this->session->set_userdata('login',1);
					redirect('/admin');
				}
			}
		}
		$this->load->view('admin/login',$data);
	}
}
