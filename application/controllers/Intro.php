<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Intro extends  Front_base {

	public function __construct(){
		parent::__construct();
		$this->load->model('location_model');
		$this->load->model('room');
		$this->load->library('pagination');
	}

	public function index(){

		$data = [
			'title' 		=> 'Glocal Partner',
			'user' 			=> $this->user_data,
			'accessToken' 	=> $this->ci_nonce,
			'auCo' 			=> $this->location_model->get_locations(['location_slug' => '124-au-co'])[0],
			'to_ngoc_van' 	=> $this->room->get_room_with_meta(['location' => 1423], 6, 0)
		];
		$data['auco_rooms'] = $this->room->get_room_with_meta(['location' => $data['auCo']['location_id']], 2, 0);
		$rooms = self::render_search_results();
		if ($rooms['type'] == 'success') {
			$data['rooms_view_grid'] = $rooms['data']['rooms_view_grid'];
			$data['rooms_view_list'] = $rooms['data']['rooms_view_list'];
			$data['pagination'] 	 = $rooms['data']['pagination'];
		}
		$this->load->view('front-end/intro', $data);
	}

	// Render results html from query
	private function render_search_results($post = null){
		$locations = $this->location_model->get_available_location();
		$query = "SELECT * FROM ".ROOM_TABLE." ORDER BY id DESC";
		$total_room = count($this->room->run_query($query));

		// Pagination
		$query .= " LIMIT 6";
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

}
