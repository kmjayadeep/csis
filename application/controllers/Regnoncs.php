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
		//$result = curl_exec($ch);


		//close connection
		//curl_close($ch);


		//$res = json_decode($result);

		$out = array();

		if(0){
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

		$r = $this->db->get_where('users',array('email'=>$data['email']));
 		if($r->num_rows()==1)
			$this->db->update('users',$data,array('email'=>$data['email']));
		else
			$this->db->insert('users',$data);
		if($this->db->affected_rows()==1){
			echo json_encode(array('status'=>true));
		}else
			echo json_encode(array('status'=>false));
	}

	public function p2(){
		$this->load->library('session');
		$data = array('alert'=>'');

		if($this->input->post('register')){
			$data = array(
				'food'=>$this->input->post('food'),
				'acco1'=>$this->input->post('day1'),
				'acco2'=>$this->input->post('day2'),
				'acco3'=>$this->input->post('day3'),
				'payment_status'=>0,
				'status'=>2
				);
			$email = $this->input->post('email');
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


			$r = $this->db->get_where('users',array('email'=>$email,'status>='=>'1'));
			if($r->num_rows()==1){
				$this->db->update('users',$data,array('email'=>$email));
				$this->session->set_userdata('email',$email);
				redirect('/regnoncs/payment');
			}else{
				$data['alert'] = 'Sorry, You aren\'t selected for phase 2 registration';
			}
		}
		$this->load->view('includes/header');
		$this->load->view('regp2',$data);
		$this->load->view('includes/footer');
	}

	public function payment(){
		$this->load->library('session');
		$email = $this->session->email;
		if(!$email)
			redirect('/regnoncs/p2');


		$data = $this->db->get_where('users',array('email'=>$email))->row_array();

		$acco = 0;

		if($data['acco1']=='1')
			$acco++;
		if($data['acco3']=='1')
			$acco++;

		$data['acco'] = $acco*100;

		$data['accotickets'] = $acco;

		if($data['mtype']==1){
			$data['ticket'] = 'IEEE Members';
			$mem = 900;
		}
		else{
			$data['ticket'] = 'Non IEEE Members';
			$mem = 1100;
		}

		$data['mem'] = $mem;

		$data['total'] = round(($data['acco']+$mem)*102.987/100,2);

		$this->load->view('includes/header');
		$this->load->view('paynoncs',$data);
		$this->load->view('includes/footer');


	}
}

