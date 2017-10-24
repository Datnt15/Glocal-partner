<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Model {

	function __construct(){
		parent::__construct();
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

	public function get_related_rooms($room){
		$relateds = $this->get_room('room_monthly_tax>' . (intval($room['room_monthly_tax']) - 20) . ' AND room_monthly_tax<' . (intval($room['room_monthly_tax']) + 20) . ' AND id<>' .$room['id']. ' OR location=' . $room['location'] . " AND id<>" .$room['id'], 4);
		return count($relateds) ? $relateds : $this->get_room('id<>' .$room['id'], 4) ;
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

	
	public function add_room_meta_data($data){
		return $this->db->insert(ROOM_META_TABLE, $data) ? $this->db->insert_id() : 0;
	}


	public function add_book($data){
		return $this->db->insert(BOOKING_TABLE, $data) ? $this->db->insert_id() : 0;
	}


	public function update_room_data($where, $data){
		return $this->db->where($where)->update(BOOKING_TABLE, $data);
	}


	public function get_booking_request($where, $limit = 1){
		return $this->db->where($where)->limit($limit)->get(BOOKING_TABLE)->result_array();
	}

}

/* End of file Booking.php */
/* Location: ./application/models/Booking.php */