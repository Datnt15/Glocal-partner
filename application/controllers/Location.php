<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends Front_base {

	public function __construct(){
		parent::__construct();
		$this->load->model('location_model');
	}
	public function index()
	{
		$data = [
			'title' 	=> 'Home - Glocal Partner',
			'user' 		=> $this->user_data,
			'locations' => $this->location_model->get_all_locations()
		];
		$this->load->view('front-end/header', $data, FALSE);
		$this->load->view('front-end/search');
		$this->load->view('front-end/footer');
		
	}



}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
