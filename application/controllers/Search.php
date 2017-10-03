<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends Front_base {

	public function __construct(){
		parent::__construct();
		$this->load->model('location_model');
		$this->load->model('room');
	}
	public function index()
	{
		$data = [
			'title' => 'Results page - Glocal partner',
			'filter' => $this->load->view('front-end/filter', '', TRUE),
			'user' => $this->user_data,
			'locations' => $this->location_model->get_all_locations()
		];
		$data['get'] = self::search_room();
		if (empty($data['get'])) {
			$rooms = $this->room->get_all_rooms();
			$rooms_template = '';
			foreach ($rooms as $room) {
				$rooms_template .= $this->load->view('front-end/room-template/room-grid', ['room' => $room], TRUE);
			}
			$data['rooms'] = $rooms_template;
		}
		$this->load->view('front-end/header', $data, FALSE);
		$this->load->view('front-end/search');
		$this->load->view('front-end/footer');
	}

	private function search_room(){
		return $this->input->get();
	}

}

/* End of file Search.php */
/* Location: ./application/controllers/Search.php */