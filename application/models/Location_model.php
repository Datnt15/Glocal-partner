<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function get_all_locations(){
		return $this->db->get(LOCATION_TABLE)->result_array();
	}
}

/* End of file Location_Model.php */
/* Location: ./application/models/Location_Model.php */