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
		$list['name'] = $this->session->userdata('name');
		$list['product'] = $this->dashboard_model->get_allproducts();
		$list['buyer'] = $this->dashboard_model->get_allbuyers();
		$list['stock'] = $this->dashboard_model->stockdetails();
		$this->load->view('dashboard', $list);
	}

	public function product() {
		$prod_id = $this->input->get('id');
		$list['name'] = $this->session->userdata('name');
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

	public function delete_product() {
		$prod_id = $this->input->get('id');
		if(!empty($prod_id)) {
			$list['prod_det'] = $this->dashboard_model->deleteproduct($prod_id);
		}
		redirect('../dashboard');
	}

	public function buyer() {
		$buy_id = $this->input->get('id');
		$list['name'] = $this->session->userdata('name');
		if(!empty($prod_id)) {
			$list['buy_det'] = $this->dashboard_model->get_buyer($buy_id);
		} else {
			$list['buy_det'] = '';
		}
		$this->load->view('buyerForm', $list);
	}

	public function delete_buyer() {
		$buy_id = $this->input->get('id');
		if(!empty($buy_id)) {
			$list['buy_det'] = $this->dashboard_model->deletebuyer($buy_id);
		}
		redirect('../dashboard');
	}

	public function update_buyer() {
		$data = $this->input->post();
		$buy_id = !empty($data['buy_id'])?$data['buy_id']:'';
		unset($data['buy_id']);
		$this->dashboard_model->updatebuyer($data, $buy_id);
		redirect('../dashboard');
	}
}
