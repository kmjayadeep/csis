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

        // $.post("https://www.google.com/recaptcha/api/siteverify",test,function(response){
        //     console.log(response)
        // })

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
		$a['des']=$this->input->post('des');
		$a['pub']=$this->input->post('pub');
		$a['email']=$this->input->post('email');
		$this->db->insert("volunteer",$a);
		if($this->db->affected_rows()==1)
			$out['status'] = true;
		else
			$out['status'] = false;
		echo json_encode($out);
	}
}
