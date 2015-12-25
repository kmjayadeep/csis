<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Volunteers extends CI_Controller {

	public function index()
	{
		$data = array();
		$this->load->library('session');
		if($this->session->login){
			$data['vol'] = $this->db->get_where('users',array('status'=>0,'mtype!='=>2))->result_array();
			$data['app'] = $this->db->get_where('users',array('status'=>1,'mtype!='=>2,'payment_status'=>0))->result_array();
			$data['fin'] = $this->db->get_where('users',array('status>='=>1,'payment_status'=>1))->result_array();
			$data['email'] = $this->db->get_where('users',array('status'=>1,'payment_status'=>1))->result_array();
			$this->load->view('admin/header');
			$this->load->view('admin/vol',$data);
			$this->load->view('admin/footer');

		}
		else
			redirect('/admin/login');
	}
	public function delete($id=0)
	{
		$data=array();
		$data['status']=-1;
		$this->db->where('id',$id);
		$this->db->update("users",$data);
		redirect('/admin/volunteers');
	}
	public function approve($id=0)
	{
		$data=array();
		$data['status']=1;
		$this->db->where('id',$id);
		$this->db->update("users",$data);
		redirect('/admin/volunteers');
	}
	public function mail($id=0)
	{
		$data=array();
		$data['status']=2;
		$this->db->where('id',$id);
		$this->db->update("users",$data);
		redirect('/admin/volunteers');
	}
}
