<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends Front_base {

	public function __construct(){
		parent::__construct();
		$this->load->model('location_model');
		$this->load->model('room');
		$this->load->library('pagination');
	}


	public function index(){
		$data = [
			'title' 		=> 'Results page - Glocal partner',
			'filter' 		=> $this->load->view('front-end/filter', '', TRUE),
			'user' 			=> $this->user_data,
			'locations' 	=> $this->location_model->get_available_location(),
			'accessToken' 	=> $this->ci_nonce
		];

		// Remove all session tha contains the meta to search
		foreach (['minTax', 'maxTax', 'room_type', 'family', 'kitchen', 'entertainment', 'system', 'room-service', 'page'] as $key) {
			$this->session->set_userdata($key, NULL);
		}
		// Get the $_GET variable
		$get = $this->input->get();
		$this->session->set_userdata('get_url', json_encode($get));
		$query = "SELECT * FROM ".ROOM_TABLE;
		if (isset($get['location'])) {
			$query .= ' WHERE location='.$get['location'];
		}
		$rooms = self::render_search_results($query);
		if ($rooms['type'] == 'success') {
			$data['rooms_view_grid'] = $rooms['data']['rooms_view_grid'];
			$data['rooms_view_list'] = $rooms['data']['rooms_view_list'];
			$data['pagination'] 	 = $rooms['data']['pagination'];
		}
		$data['rooms'] = $rooms;
		// Render View
		$this->load->view('front-end/header', $data, FALSE);
		$this->load->view('front-end/search');
		$this->load->view('front-end/footer');
	}


	// Searching with filter on Search Page
	public function search_room_with_filter(){
		$post = $this->input->post(NULL, TRUE);
		if (!isset($post['accessToken'])) {
			echo json_encode(['type' => 'error', 'msg' => 'Missing access token']);
			die;
		}
		if ($post['accessToken'] != $this->ci_nonce) {
			echo json_encode(['type' => 'error', 'msg' => 'Access token does not match']);
			die;
		}

		$query = self::build_query($post);
		$data = self::render_search_results($query, $post);
		$data['data']['positions'] = self::get_room_position_with_filter($query);
		echo json_encode($data);
		die;
	}

	// Build query from post and session
	private function build_query( $post ){
		
		// Build query from here
		$query = "SELECT DISTINCT(".ROOM_TABLE.".id) as room_id, ".ROOM_TABLE.".*  FROM ".ROOM_TABLE;

		// Condition
		$where = "";
		$get = $this->session->userdata( 'get_url' );
		if ($get != '') {
			$get = json_decode($get);
			if (isset($get->location)) {
				$where .= ROOM_TABLE.".location=".$get->location;
			}

			// if (isset($get->check_in)) {
			// 	$query .= "INNER JOIN ".BOOK_TABLE." ON (".BOOK_TABLE.".room_no=".ROOM_TABLE.".room_no) ";
			// 	$where .= ($where !== '') ? " AND " : '';
			// 	$where .= 
			// }
		}

		
		// Checking minimum tax per month
		if (isset($post['minTax']) || !is_null($this->session->userdata('minTax'))) {
			$where .= ($where !== '') ? " AND " : '';
			if (isset($post['minTax'])) {
				$this->session->set_userdata('minTax', $post['minTax']);
				$where .= "(".ROOM_TABLE.".room_monthly_tax BETWEEN ".$post['minTax']." AND ".$post['maxTax'].")";
			}else{
				$where .= "(".ROOM_TABLE.".room_monthly_tax BETWEEN ".$this->session->userdata('minTax')." AND ".$this->session->userdata('maxTax').")";
			}
		}

		// Checking room type
		if (isset($post['room_type']) || !is_null($this->session->userdata('room_type'))) {
			$room_type = isset($post['room_type']) ? $post['room_type'] : $this->session->userdata('room_type');
			$this->session->set_userdata('room_type', $room_type);
			if ($room_type != '') {
				$where .= ($where !== '') ? " AND " : '';
				$where .= "(".ROOM_TABLE.".room_type IN (".$room_type."))" ;
			}
		}

		// Checking room meta
		$meta = ['family', 'kitchen', 'entertainment', 'system', 'room-service'];
		foreach ($meta as $key) {
			if (isset($post[$key]) || !is_null($this->session->userdata($key))) {
				$room_meta = isset($post[$key]) ? $post[$key] : $this->session->userdata($key);
				$this->session->set_userdata($key, $room_meta);
				if ($room_meta == '') {
					continue;
				}
				if (!strpos($query, ROOM_META_TABLE)) {
					$query .=  " INNER JOIN ".ROOM_META_TABLE." ON (".ROOM_TABLE.".id=".ROOM_META_TABLE.".room_id) ";
				}
				$room_meta = str_replace(',', "','", $room_meta);
				$where .= ($where !== '') ? " OR " : '';
				$where .= "(".ROOM_META_TABLE.".meta_key IN ('".$room_meta."'))" ;
			}
		}
		
		if ($where != '') {
			$query .= ' WHERE ' . $where;
		}
		return $query;
	}

	private function get_room_position_with_filter($query){
		$rooms = $this->room->run_query($query);
		$key = 'id';
		$room_ids = implode(',', array_map(function($item) use ($key) {
		    return $item[$key];
		}, $rooms));
		$rooms = $this->room->run_query('SELECT DISTINCT(meta.room_id) as id, meta.meta_value as address, room.room_no as name FROM '.ROOM_META_TABLE.' as meta INNER JOIN '.ROOM_TABLE.' as room ON (room.id=meta.room_id) WHERE meta.meta_key="address" AND room.id IN ('.$room_ids.');');
		$found_id = implode(',', array_map(function($item) use ($key) {
		    return $item[$key];
		}, $rooms));
		$room_ids = explode(',', $room_ids);
		$other_rooms_id = [];
		foreach ($room_ids as $key => $value) {
			if (!strpos($found_id, $value)) {
				$other_rooms_id[] = $value;
			}
		}
		$rooms_meta = $this->room->run_query('SELECT DISTINCT(location.location_address), location.location_name FROM '.ROOM_TABLE.' as room INNER JOIN '.LOCATION_TABLE.' as location ON (room.location=location.location_id) WHERE room.id IN ('.implode(',', $other_rooms_id).');');
		foreach ($rooms_meta as $room) {
			$rooms[] = [
				'id' => $room['location_name'],
				'address' => $room['location_address'],
				'name' => $room['location_name']
			];
		}
		return $rooms;

	}

	// Render results html from query
	private function render_search_results($query, $post = null){
		$locations = $this->location_model->get_available_location();
		$total_room = count($this->room->run_query($query));

		// Pagination
		$query .= " ORDER BY ".ROOM_TABLE.".id DESC LIMIT 6";
		$page = is_null($this->session->userdata('page')) ? 1 : $this->session->userdata('page');
		if (isset($post['page']) ) {
			$page = $post['page'];
			$this->session->set_userdata( 'page', $page );
		}
		$query .= " OFFSET ".($page-1)*6;
		$rooms = $this->room->run_query($query);
		if (count($rooms)) {
			$res = ['type' => 'success'];
			// Render content
			$template = '';
			foreach ($rooms as $room) {
			 	$template .= $this->load->view('front-end/room-template/room-grid', ['room' => $room, 'locations' => $locations], TRUE);
			}
			$res['data']['rooms_view_grid'] = $template;
			$template = '';
			foreach ($rooms as $room) {
			 	$template .= $this->load->view('front-end/room-template/room-list', ['room' => $room, 'locations' => $locations], TRUE);
			}
			$res['data']['rooms_view_list'] = $template;
			$total_page = ceil($total_room/6);
			$pagination = '';
			if ($total_page > 1) {

				$pagination = '<ul class="pagination pagination-info"><li>';
				if ($page > 1) {
					$pagination .= '<a href="javascript:void(0);" data-page="'.($page-1).'"> Prev</a></li>';
				}
				for ($i=1; $i <= $total_page; $i++) { 
					$pagination .= $page==$i ? '<li class="active">' : '<li>';
					$pagination .= '<a href="javascript:void(0);" data-page="'.$i.'">'.$i.'</a></li>';
				}
				if ($page < $total_page) {
					$pagination .= '<li><a href="javascript:void(0);" data-page="'.($page+1).'"> Next </a></li>';
				}
				$pagination .= '</ul>';
			}
			$res['data']['pagination'] = $pagination;
			return $res;
		}else{
			return [
				'type' 	=> 'failure',
				'msg' 	=> 'Nothing Found'
			];
		}
	}


	public function get_all_room_positions(){
		// Lấy room meta chứa địa chỉ của phòng
		$rooms = $this->room->run_query('SELECT DISTINCT(meta.room_id) as id, meta.meta_value as address, room.room_no as name FROM '.ROOM_META_TABLE.' as meta INNER JOIN '.ROOM_TABLE.' as room ON (room.id=meta.room_id) WHERE meta.meta_key="address";');

		// Trích xuất lấy id của phòng từ mảng trả về
		$key = 'id';
		$room_ids = implode(',', array_map(function($item) use ($key) {
		    return $item[$key];
		}, $rooms));

		$other_rooms = $this->room->run_query('SELECT DISTINCT(location.location_address), location.location_name FROM '.ROOM_TABLE.' as room INNER JOIN '.LOCATION_TABLE.' as location ON (room.location=location.location_id) WHERE room.id NOT IN ('.$room_ids.');');

		foreach ($other_rooms as $room) {
			$rooms[] = [
				'id' => $room['location_name'],
				'address' => $room['location_address'],
				'name' => $room['location_name']
			];
		}

		// Nếu có kết quả trả về
		if (count($rooms)) {
			echo json_encode(['type' => 'success', 'positions' => $rooms]);
		}
		// Nếu không
		else{
			echo json_encode(['type' => 'error', 'msg' => 'There is no room available']);
		}
	}

	public function get_room_info_window(){
		$post = $this->input->post(NULL, TRUE);
		if (!isset($post['accessToken'])) {
			echo json_encode(['type' => 'error', 'msg' => 'Missing access token']);
			die;
		}
		if ($post['accessToken'] != $this->ci_nonce) {
			echo json_encode(['type' => 'error', 'msg' => 'Access token does not match']);
			die;
		}
		$rooms = $this->room->get_room(['room_no' => urldecode(trim($post['room_no']))]);
		if (!count($rooms)) {
			$rooms = $this->room->run_query('SELECT room.* FROM '.ROOM_TABLE.' as room INNER JOIN '.LOCATION_TABLE.' as location ON (room.location=location.location_id) WHERE location_name="'.urldecode(trim($post['room_no'])).'";');
		}
		if (!count($rooms)) {
			echo json_encode(['type' => 'error', 'msg' => 'There is no room available']);
		}else{
			$template = '<div id="iw-container"><div class="iw-title">Room Infomations</div><div class="iw-content">';
			foreach ($rooms as $room) {
				$template .= $this->load->view('front-end/room-template/room-info-window', ['room' => $room, 'location' => $this->location_model->get_locations(['location_id' => $room['location']])], TRUE);
			}
			$template .= '</div></div>';
			echo json_encode(['type' => 'success', 'template' => $template]);
		}
	}

}

/* End of file Search.php */
/* Location: ./application/controllers/Search.php */