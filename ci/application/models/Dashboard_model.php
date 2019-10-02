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
	public function get_allbuyers()	{
		$result = $this->db->query("SELECT * FROM buyers")->result_array();;
		return $result;
	}
	public function get_product($id) {
		$result = $this->db->query("SELECT * FROM products where prod_id=$id")->row_array();
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
	public function get_buyer($id) {
		$result = $this->db->query("SELECT * FROM buyers where buy_id=$id")->row_array();
		return $result;
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
}