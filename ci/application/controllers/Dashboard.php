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
		$list['tapList'] = array('product', 'buyer', 'report', 'aboutus');
		$list['name'] = $this->session->userdata('name');
		$list['product'] = $this->dashboard_model->get_allproducts();
		$list['purchase'] = $this->dashboard_model->get_allpurchase();
		$list['purchaseTotal'] = $this->dashboard_model->get_purchasetotal();
		$list['sales'] = $this->dashboard_model->get_allsales();
		$list['salesTotal'] = $this->dashboard_model->get_salestotal();
		$list['buyers'] = $this->dashboard_model->get_allbuyers();
		$list['dealers'] = $this->dashboard_model->get_alldealers();
		$list['stock'] = $this->dashboard_model->stockdetails();
		
		if(!empty($_GET['sdate']) || !empty($_GET['edate'])) {
			$sd = $_GET['sdate']; $ed = $_GET['edate'];
			$list['sdate'] = $sd;
			$list['edate'] = $ed;

			$list['pur_report'] = $this->dashboard_model->reportsbydate('purchase',$sd, $ed);
			$list['pur_rep_total'] = $this->dashboard_model->reportstotal('purchase',$sd, $ed);

			$list['sales_report'] = $this->dashboard_model->reportsbydate('sales',$sd, $ed);
			$list['sales_rep_total'] = $this->dashboard_model->reportstotal('sales',$sd, $ed);

			$list['dealers_report'] = $this->dashboard_model->reportsbydate('dealers',$sd, $ed);

			$list['buyers_report'] = $this->dashboard_model->reportsbydate('buyers',$sd, $ed);
			$list['buyers_rep_totals'] = $this->dashboard_model->buyerstotal('buyers',$sd, $ed);
		}
		$this->load->view('dashboard', $list);
	}
	/** Product get, update, delete */
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
		redirect('../dashboard?t=product');
	}

	public function delete_product() {
		$prod_id = $this->input->get('id');
		if(!empty($prod_id)) {
			$list['prod_det'] = $this->dashboard_model->deleteproduct($prod_id);
		}
		redirect('../dashboard?t=product');
	}
	/** purchase get, update, delete */
	public function purchase() {
		$pur_id = $this->input->get('id');
		$list['name'] = $this->session->userdata('name');
		$list['prod_list'] = $this->dashboard_model->get_allproducts();
		if(!empty($pur_id)) {
			$list['pur_det'] = $this->dashboard_model->get_purchase($pur_id);
		} else {
			$list['pur_det'] = '';
		}
		$this->load->view('purchaseForm', $list);
	}

	public function update_purchase() {
		$data = $this->input->post();
		$pur_id = !empty($data['pur_id'])?$data['pur_id']:'';
		unset($data['pur_id']);
		$this->dashboard_model->updatepurchase($data, $pur_id);
		redirect('../dashboard?t=product');
	}

	public function delete_purchase() {
		$pur_id = $this->input->get('id');
		if(!empty($pur_id)) {
			$list['pur_det'] = $this->dashboard_model->deletepurchase($pur_id);
		}
		redirect('../dashboard?t=product');
	}
	/** Buyer get, update, delete */
	public function buyer() {
		$buy_id = $this->input->get('id');
		$list['name'] = $this->session->userdata('name');
		if(!empty($buy_id)) {
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
		redirect('../dashboard?t=buyer');
	}

	public function update_buyer() {
		$data = $this->input->post();
		$buy_id = !empty($data['buy_id'])?$data['buy_id']:'';
		unset($data['buy_id']);
		$this->dashboard_model->updatebuyer($data, $buy_id);
		redirect('../dashboard?t=buyer');
	}
	/** sales get, update, delete */
	public function sales() {
		$sale_id = $this->input->get('id');
		$list['name'] = $this->session->userdata('name');
		$list['prod_list'] = $this->dashboard_model->get_allproducts();
		if(!empty($sale_id)) {
			$list['sale_det'] = $this->dashboard_model->get_sales($sale_id);
		} else {
			$list['sale_det'] = '';
		}
		$this->load->view('salesForm', $list);
	}

	public function update_sales() {
		$data = $this->input->post();
		$sale_id = !empty($data['sale_id'])?$data['sale_id']:'';
		unset($data['sale_id']);
		$this->dashboard_model->updatesales($data, $sale_id);
		redirect('../dashboard?t=product');
	}

	public function delete_sales() {
		$sale_id = $this->input->get('id');
		if(!empty($sale_id)) {
			$list['sales_det'] = $this->dashboard_model->deletesales($sale_id);
		}
		redirect('../dashboard?t=product');
	}
	/** dealers get, update, delete */
	public function dealers() {
		$deal_id = $this->input->get('id');
		$list['name'] = $this->session->userdata('name');
		if(!empty($deal_id)) {
			$list['deal_det'] = $this->dashboard_model->get_dealers($deal_id);
		} else {
			$list['deal_det'] = '';
		}
		$this->load->view('dealersForm', $list);
	}

	public function update_dealers() {
		$data = $this->input->post();
		$deal_id = !empty($data['deal_id'])?$data['deal_id']:'';
		unset($data['deal_id']);
		$this->dashboard_model->updatedealers($data, $deal_id);
		redirect('../dashboard?t=buyer');
	}

	public function delete_dealers() {
		$deal_id = $this->input->get('id');
		if(!empty($deal_id)) {
			$list['deal_det'] = $this->dashboard_model->deletedealers($deal_id);
		}
		redirect('../dashboard?t=buyer');
	}
}