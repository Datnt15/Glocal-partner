<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function run_query($query){
		return $this->db->query($query)->result_array();
	}

	public function add_message($data){
		return $this->db->insert(CHAT_TABLE, $data) ? $this->db->insert_id() : 0;
	}

	public function get_messages_to_IP($ip){
		return $this->db->where(['to_IP' => $ip])->get(CHAT_TABLE)->result_array();
	}

	public function get_messages($where){
		return array_reverse($this->db->where($where)->limit(6)->order_by('date_create DESC')->get(CHAT_TABLE)->result_array());
	}

	public function change_msg_to_read($where){
		return $this->db->where($where)->update(CHAT_TABLE, ['state' => READ]);
	}

}

/* End of file Room.php */
/* Location: ./application/models/Room.php */