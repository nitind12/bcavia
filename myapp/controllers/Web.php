<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	function index(){
		$data['title'] = "My First Web App";
		$data['heading'] = "My heading";
		$this->load->view('home', $data);
	}

	function mainpage($msg = 'page'){
		$data['message'] = $msg;
		$this->load->view('show', $data);
	}

	function showdata(){
		$this->load->model('My_model', 'mm');
		$data['result']  =$this->mm->checkUser();

		$data['message'] = $data['result']['msg_'];
		
		if($data['result']['res_'] == false){
			redirect('web');
		} else {
			redirect('web/mainpage/'.$data['message']);
		}
	}

	function newuser($msg = ''){
		$data['msg_'] = $msg;
		$data['title'] = "My First Web App";
		$data['heading'] = "Create User";
		$this->load->view('create', $data);
	}
	
	function newEntry(){
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
		$data['heading'] = "Users we have";
		$this->load->model('My_model', 'mm');
		$data['users']  = $this->mm->getUsers();
		
		$this->load->view('showusers', $data);

	}

	function getusers(){
		$this->load->model('My_model', 'mm');
		$data['users']  = $this->mm->getUsers();
		echo json_encode($data);
	}

	function printusers(){
		$this->load->model('my_model', 'mm');
		$data['users'] = $this->mm->fetchUsers();
		$this->load->view('print', $data);
	}
	function updateuser(){
		$this->load->model('my_model', 'mm');
		$res_ = $this->mm->updateuser();
		echo $res_;
	}

	function logout(){
		redirect('web');
	}
}
