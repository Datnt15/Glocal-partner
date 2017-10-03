<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Place extends Front_base {

	public function __construct(){
		parent::__construct();
		$this->load->model('room');
		$this->load->model('cities');
	}
	public function index($place)
	{
		$city = $this->cities->get_city_by_slug($place);
		if (count($city)) {
			$city = $city[0]['city_id'];
			$ville = $this->cities->get_villes_of_city($city);
			foreach ($ville as $vil) {
				$city .= ', ' . $vil['city_id'];
			}
			$data = [
				'title' => 'Home - Glocal partner',
				'user' => $this->user_data,
				'filter' => $this->load->view('front-end/filter', '', TRUE),
				'rooms' => $this->room->get_specifix_room('location IN(' . $city.')')
			];
			$this->load->view('front-end/header', $data, FALSE);
			$this->load->view('front-end/search');
			$this->load->view('front-end/footer');
		}else{
			$this->load->view('errors/html/error_404', [
				'heading' => '404 Page Not Found', 
				'message' => 'The page you requested was not found.'
			]);
		}
	}



}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
