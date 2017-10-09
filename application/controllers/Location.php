<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends Front_base {

	public function __construct(){
		parent::__construct();
		$this->load->model('location_model');
		$this->load->model('room');
		$this->load->library('pagination');
	}
	public function index($location = null)
	{
		if ($location == null) {
			$data = [
				'title' 		=> 'Locations - Glocal partner',
				'user' 			=> $this->user_data,
				'locations' 	=> $this->location_model->get_available_location(),
				'accessToken' 	=> $this->ci_nonce
			];
			$this->load->view('front-end/header', $data, FALSE);
			$this->load->view('front-end/location/all');
			$this->load->view('front-end/footer');
		}else{

		}
	}



}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
