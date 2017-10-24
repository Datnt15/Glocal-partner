<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function get_all_rooms(){
		return $this->db->limit(6)->get(ROOM_TABLE)->result_array();
	}

	public function get_room($where, $limit = 1){
		return $this->db->where($where)->limit($limit)->get(ROOM_TABLE)->result_array();
	}


	public function get_room_gallery($room_id){
		$metas = $this->db->where(['meta_key' => 'gallery', 'room_id' => $room_id])->get(ROOM_META_TABLE)->result_array();
		$result = [];
		if (count($metas)) {
			foreach ($metas as $item) {
				$result[] = $item['meta_value'];
			}
		}
		return $result;
	}
	
	public function get_room_meta($where){
		$result = $this->db->where($where)->get(ROOM_META_TABLE)->result_array();
		$metas = [];
		foreach ($result as $meta) {
			if ($meta['meta_key'] == 'gallery') {
				$metas['gallery'][] = $meta;
			}else{
				$metas[$meta['meta_key']] = $meta['meta_value'];
			}
		}
		return $metas;
	}

	public function run_query($query){
		return $this->db->query($query)->result_array();
	}

	public function count_all_results_of_query($query){
		return $this->db->query($query)->count_all_results();
	}

	
	public function get_room_meta_gallery($room_id){
		return $this->db->where(['meta_key' => 'gallery', 'room_id' => $room_id])->get(ROOM_META_TABLE)->result_array();
	}

	public function add_room($data){
		return $this->db->insert(ROOM_TABLE, $data) ? $this->db->insert_id() : 0;
	}

	public function add_room_meta_data($data){
		return $this->db->insert(ROOM_META_TABLE, $data) ? $this->db->insert_id() : 0;
	}

	public function update_room_data($where, $data){
		return $this->db->where($where)->update(ROOM_TABLE, $data);
	}

	public function delete_room_meta_data($where){
		return $this->db->where($where)->delete(ROOM_META_TABLE);
	}

	public function delete_room($where){
		return $this->db->where($where)->delete(ROOM_TABLE);
	}

}

/* End of file Room.php */
/* Location: ./application/models/Room.php */