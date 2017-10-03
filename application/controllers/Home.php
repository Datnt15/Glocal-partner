<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Front_base {

	public function __construct(){
		parent::__construct();
		$this->load->model('room');
	}
	public function index()
	{

		$data = [
			'title' => 'Home - Glocal partner',
			'user' => $this->user_data
		];
		$this->load->view('front-end/header', $data, FALSE);
		$this->load->view('front-end/home');
		$this->load->view('front-end/footer');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
