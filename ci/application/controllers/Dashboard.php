<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Dashboard controller
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		#check user logged in or not.
		if(!$this->session->userdata('username'))
		{
			redirect('../login');
		}
	}

	public function index()
	{
		$this->load->model('dashboard_model');
		$list['product'] = $this->dashboard_model->get_product();
		$list['buyer'] = $this->dashboard_model->get_buyer();
		$this->load->view('dashboard', $list);
	}
}
