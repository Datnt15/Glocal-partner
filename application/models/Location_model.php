<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function get_all_locations(){
		return $this->db->get(LOCATION_TABLE)->result_array();
	}

	public function get_available_location(){
		$locations = $this->db->where_in('location_id', self::get_distinct_location_id())->get(LOCATION_TABLE)->result_array();
		$result = array();
		foreach ($locations as &$local) {
			$result[$local['location_id']] = $local;
		}
		return $result;
	}

	public function get_distinct_location_id(){
		$ids = $this->db->distinct()->select('location')->get(ROOM_TABLE)->result_array();
		$results = array();
		foreach ($ids as $key => $value) {
			$results[] = $value['location'];
		}
		return $results;
	}

	public function add_location($data){
		return $this->db->insert(LOCATION_TABLE, $data) ? $this->db->insert_id() : 0;
	}


	public function get_locations($where, $columns = '*'){
		return $this->db->select($columns)->where($where)->get(LOCATION_TABLE)->result_array();
	}


	public function update_location_data($where, $data){
		return $this->db->where($where)->update(LOCATION_TABLE, $data);
	}
}

/* End of file Location_Model.php */
/* Location: ./application/models/Location_Model.php */