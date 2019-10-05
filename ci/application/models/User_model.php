<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Model
 */
class User_model extends CI_Model {

	public function __construct()
	{	
		parent::__construct();
		$this->load->database();
	}

	public function validate_login($username,$password)
	{
		$result = $this->db->query("SELECT * FROM users WHERE username='$username' and password = '$password'");

		if ($result->num_rows()>0){
			$userData = $result->row();
		} else {
			$usr=$this->db->select('username,name,role')
					 ->get_where('users',array('username'=>$username));
			
			if ($usr->num_rows()>0){
				$userData['msg'] = 'Username or password is mismatching,Try again.';
			} else {
				$userData['msg'] = 'User not registered.';
			}
		}
		
		return $userData;
	}	
}
