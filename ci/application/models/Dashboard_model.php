<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Dashboard model
 */
class Dashboard_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	public function get_allproducts() {
		$result = $this->db->query("SELECT * FROM products")->result_array();;
		return $result;
	}
	public function get_allpurchase() {
		$result = $this->db->query("SELECT purchase.*, products.prod_name FROM purchase JOIN products on products.prod_id = purchase.prod_id")->result_array();;
		return $result;
	}
	public function get_purchasetotal() {
		$result = $this->db->query("SELECT sum(purchase.price) as pur_tot FROM purchase")->row_array();;
		return $result;
	}
	public function get_allsales() {
		$result = $this->db->query("SELECT sales.*, products.prod_name FROM sales JOIN products on products.prod_id = sales.prod_id")->result_array();;
		return $result;
	}
	public function get_salestotal() {
		$result = $this->db->query("SELECT sum(sales.price) as sales_tot FROM sales")->row_array();;
		return $result;
	}
	public function get_allbuyers()	{
		$result = $this->db->query("SELECT * FROM buyers")->result_array();;
		return $result;
	}
	public function get_alldealers()	{
		$result = $this->db->query("SELECT * FROM dealers")->result_array();;
		return $result;
	}
	public function get_product($id) {
		$result = $this->db->query("SELECT * FROM products where prod_id=$id")->row_array();
		return $result;
	}
	public function get_purchase($id) {
		$result = $this->db->query("SELECT * FROM purchase where pur_id=$id")->row_array();
		return $result;
	}
	public function get_buyer($id) {
		$result = $this->db->query("SELECT * FROM buyers where buy_id=$id")->row_array();
		return $result;
	}
	public function get_sales($id) {
		$result = $this->db->query("SELECT * FROM sales where sale_id=$id")->row_array();
		return $result;
	}
	public function get_dealers($id) {
		$result = $this->db->query("SELECT * FROM dealers where deal_id=$id")->row_array();
		return $result;
	}
	public function updateproduct($update, $pid) {
		if(empty($pid)) {
			$this->db->insert('products', $update);
		} else {
			$this->db->where('prod_id', $pid);
			$this->db->update('products', $update);
		}
		return true;
	}
	public function updatepurchase($update, $pid) {
		if(empty($pid)) {
			$this->db->insert('purchase', $update);
		} else {
			$this->db->where('pur_id', $pid);
			$this->db->update('purchase', $update);
		}
		return true;
	}
	public function updatebuyer($update, $pid) {
		if(empty($pid)) {
			$this->db->insert('buyers', $update);
		} else {
			$this->db->where('buy_id', $pid);
			$this->db->update('buyers', $update);
		}
		return true;
	}
	public function updatesales($update, $pid) {
		if(empty($pid)) {
			$this->db->insert('sales', $update);
		} else {
			$this->db->where('sale_id', $pid);
			$this->db->update('sales', $update);
		}
		return true;
	}
	public function updatedealers($update, $pid) {
		if(empty($pid)) {
			$this->db->insert('dealers', $update);
		} else {
			$this->db->where('deal_id', $pid);
			$this->db->update('dealers', $update);
		}
		return true;
	}
	public function deleteproduct($pid) {
		if(!empty($pid)) {
			$this->db->query("DELETE FROM products WHERE prod_id=$pid");
		}
		return true;
	}
	public function deletepurchase($id) {
		if(!empty($id)) {
			$this->db->query("DELETE FROM purchase WHERE pur_id=$id");
		}
		return true;
	}
	public function deletebuyer($id) {
		if(!empty($id)) {
			$this->db->query("DELETE FROM buyers WHERE buy_id=$id");
		}
		return true;
	}
	public function deletesales($id) {
		if(!empty($id)) {
			$this->db->query("DELETE FROM sales WHERE sale_id=$id");
		}
		return true;
	}
	public function deletedealers($id) {
		if(!empty($id)) {
			$this->db->query("DELETE FROM dealers WHERE deal_id=$id");
		}
		return true;
	}	
	public function stockdetails() {
		$result = $this->db->query("SELECT *, def_stock - stock as required FROM products")->result_array();
		return $result;
	}
}
