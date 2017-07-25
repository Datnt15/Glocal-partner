<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
	// function __construct
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	
	
	public function get_user($data){
		return $this->db->select()->from(USER_TABLE)->where($data)->get()->result_array();
	}

	public function get_all_user(){
		return $this->db->get(USER_TABLE)->result_array();
	}

}

/* End of file User.php */
/* Location: ./application/models/User.php */