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
		$this->load->model('dashboard_model');

		#check user logged in or not.
		if(!$this->session->userdata('username'))
		{
			redirect('../login');
		}
	}

	public function index()
	{
		$list['product'] = $this->dashboard_model->get_allproducts();
		$list['buyer'] = $this->dashboard_model->get_allbuyers();
		$this->load->view('dashboard', $list);
	}

	public function product() {
		$prod_id = $this->input->get('id');
		if(!empty($prod_id)) {
			$list['prod_det'] = $this->dashboard_model->get_product($prod_id);
		} else {
			$list['prod_det'] = '';
		}
		$this->load->view('prodForm', $list);
	}

	public function update_product() {
		$data = $this->input->post();
		$prod_id = !empty($data['prod_id'])?$data['prod_id']:'';
		unset($data['prod_id']);
		$this->dashboard_model->updateproduct($data, $prod_id);
		redirect('../dashboard');
	}

	public function buyer() {
		$prod_id = $this->input->get('id');
		if(!empty($prod_id)) {
			$list['buy_det'] = $this->dashboard_model->get_buyer($prod_id);
		} else {
			$list['buy_det'] = '';
		}
		$this->load->view('buyerForm', $list);
	}

	public function update_buyer() {
		$data = $this->input->post();
		$buy_id = !empty($data['buy_id'])?$data['buy_id']:'';
		unset($data['buy_id']);
		$this->dashboard_model->updatebuyer($data, $buy_id);
		redirect('../dashboard');
	}
}