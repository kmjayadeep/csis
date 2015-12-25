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
		$captcha = array(
        		'response'=>$this->input->post('response'),
        		'secret'=> "6Lel2BITAAAAALgQHxnGgq52pMuDETpFy6aXiFIX"
        	);

        $url = "https://www.google.com/recaptcha/api/siteverify";

		$fields_string = "";

        foreach($captcha as $key=>$value) {
	         $fields_string .= $key.'='.$value.'&'; 
	    }

		$fields_string = rtrim($fields_string,'&');


        $ch = curl_init();
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_POST,count($captcha));
		curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);
 		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		//execute post
		$result = curl_exec($ch);


		//close connection
		curl_close($ch);


		$res = json_decode($result);

		$out = array();

		if(!$res->success){
			$out['status'] = false;
			die(json_encode($out));
		}
		$data = array(
				'name'=>$this->input->post('name'),
				'email'=>$this->input->post('email'),
				'phone'=>$this->input->post('phone'),
				'sex'=>$this->input->post('sex'),
				'mtype'=>$this->input->post('mtype'),
				'mid'=>$this->input->post('mid'),
				'section'=>$this->input->post('section'),
				'college'=>$this->input->post('college'),
				'why'=>$this->input->post('why'),
				'what'=>$this->input->post('what'),
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
