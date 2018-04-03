<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->session->unset_userdata('user_');
		$data['title'] = "My First Web App";
		$data['heading'] = "My heading";

		$this->load->view('templates/header');
		$this->load->view('home', $data);
		$this->load->view('templates/footer');
	}

	function mainpage($msg = 'page'){
		$this->check_session();
		$data['message'] = $msg;
		$this->load->view('templates/header');
		$this->load->view('show', $data);
		$this->load->view('templates/footer');
		
	}

	function showdata(){
		$this->load->model('My_model', 'mm');
		$data['result']  =$this->mm->checkUser();

		$data['message'] = $data['result']['msg_'];
		
		if($data['result']['res_'] == false){
			redirect('web');
		} else {
			$this->session->set_userdata('user_', $this->input->post('txtuser'));
			redirect('web/mainpage/'.$data['message']);
		}
	}

	function newuser($msg = ''){
		$this->check_session();
		if($this->session->userdata('user_')){
		$data['msg_'] = $msg;
		$data['title'] = "My First Web App";
		$data['heading'] = "Create User";
		$this->load->view('create', $data);
		} else {
			redirect('web');
		}
	}
	
	function newEntry(){
		$this->check_session();
		$this->load->model('My_model', 'mm');
		$result  =$this->mm->createUser();
		if($result == true){
			$msg = 'succussfully created';
		} else {
			$msg = 'Already exists';
		}
		redirect('web/newuser/'.$msg);
	}

	function showusers(){
		$this->check_session();
		$data['heading'] = "Users we have";
		$this->load->model('My_model', 'mm');
		$data['users']  = $this->mm->getUsers();
		
		$this->load->view('showusers', $data);

	}

	function getusers(){
		$this->check_session();
		$this->load->model('My_model', 'mm');
		$data['users']  = $this->mm->getUsers();
		echo json_encode($data);
	}

	function printusers(){
		$this->check_session();
		$this->load->model('my_model', 'mm');
		$data['users'] = $this->mm->fetchUsers();
		$this->load->view('print', $data);
	}
	function updateuser(){
		$this->check_session();
		$this->load->model('my_model', 'mm');
		$res_ = $this->mm->updateuser();
		echo $res_;
	}

	function logout(){
		$this->session->unset_userdata('user_');
		redirect('web');
	}
	function check_session(){
		if(!$this->session->userdata('user_')){
			redirect('web');
		}
	}

	function email(){
		$config['protocol'] = "smtp";
		$config['smtp_host'] = "ssl://smtp.gmail.com";
		$config['smtp_port'] = "465";
		$config['smtp_user'] = "nitin.d12@gmail.com";
		$config['smtp_pass'] = "nitin101929$#";
		$config['charset'] = "utf-8";
		$config['mailtype'] = "html";
		$config['newline'] = "\r\n"; 

		$this->email->set_mailtype("html");

        $msg = "Hello How are you???";
        $to_ = 'nitin.d12@amrapali.ac.in';
        $from_ = 'nitin.d12@gmail.com';
        $name_ = 'Enquiry...';

        $this->email->from($from_, $name_);
        $this->email->to($to_);

        $this->email->subject('Testing');
        $this->email->message($msg);

        echo $this->email->send();
		
	}
}