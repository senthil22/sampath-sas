<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Login controller
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function login_process()
	{
		$this->load->model('user_model');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$log=$this->user_model->validate_login($username,$password);
		
		if ($log->username){	
			$sessionData = array(
				   'username'  	=> $log->username,
				   'name'  		=> $log->name,
				   'role'	 	=> $log->role
				);
			$ret = array(
					'logged'	=> TRUE,
					'to'		=> '/program'
				);
			$this->session->set_userdata($sessionData);
			$this->output->set_header('location:../dashboard');	
		}else{			
			$ret['msg']=$log['msg'];
			$this->load->view('login', $ret);
		}
		//$this->output->set_content_type('application/json')->set_output(json_encode($ret));
	}

	public function logout()
	{		
		$this->session->sess_destroy();
		$this->output->set_header('location:../login');
	}
}
