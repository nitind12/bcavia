<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_model extends CI_Model{
	function checkUser(){
		$usr = $this->input->post('txtuser');
		$pwd = $this->input->post('txtPwd');

		$this->db->select('USERNAME_');
		$this->db->where('USERNAME_', $usr);
		$this->db->where('PASSWORD_', $pwd);
		$query = $this->db->get('login');

		if($query->num_rows() != 0){
			$bool_ = array('res_'=>true, 'msg_'=>'Success');
		} else {
			$bool_ = array('res_'=>false, 'msg_'=>'Failure');
		}
		return $bool_;
	}

	function createUser(){
		// Fetch the data from client-form
		$usr = $this->input->post('txtuser');
		$pwd = $this->input->post('txtPwd');

		// Check whether user exists or not
		$this->db->select('USERNAME_');
		$this->db->where('USERNAME_', $usr);
		$query = $this->db->get('login');

		if($query->num_rows() != 0){
			$query = false;
		} else {
			// if not exists create new user
			$data = array(
				'USERNAME_' => $usr,
				'PASSWORD_' => $pwd
			);		
			$query = $this->db->insert('login', $data);
		}

		return $query;
	}

	function getUsers(){
		$this->db->select('USERNAME_');
		$query = $this->db->get('login');
		return $query->result();
	}

	function fetchUsers(){
		$this->db->select('USERNAME_');
		$query = $this->db->get('login');
		return $query->result();
	}

	function updateuser(){
		$usr = $this->input->post('user_');

		$this->db->where('USERNAME_', $usr);
		$data = array(
			'USERNAME_' => $usr.'_changed'
		);
		$query = $this->db->update('login', $data);

		return true;
	}
}