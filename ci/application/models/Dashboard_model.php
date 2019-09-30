<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Dashboard model
 */
class Dashboard_model extends CI_Model {

	public function __construct()
	{	
		parent::__construct();
		$this->load->database();
	}

	public function get_product()
	{
		$result = $this->db->query("SELECT * FROM products")->result_array();;
		return $result;
	}
	public function get_buyer()
	{
		$result = $this->db->query("SELECT * FROM buyers")->result_array();;
		return $result;
	}
}