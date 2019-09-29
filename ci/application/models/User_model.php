<?php /** Users Model */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * User Model.
 */
class User_model extends CI_Model {
	
	/**
	 * Log the User in
	 * 
	 * @param string $username The username of the user
	 * @param string $pass Users Password
	 * @return array $userData The information of the user on success, error string on failure
	 * @todo - Add in the users login
	 */
	public function __construct()
	{	
		parent::__construct();
		$this->load->database();
	}

	public function validate_login($username,$password)
	{
		$result = $this->db->select('username,name,role')
							->get_where('users',array('username'=>$username,'password'=>$password));

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
