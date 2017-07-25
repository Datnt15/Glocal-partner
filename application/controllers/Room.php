<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends CI_Controller {

	public function index()
	{
		$data = [
			'title' => 'Room detail'
		];
		$this->load->view('front-end/header', $data, FALSE);
		$this->load->view('front-end/single-room');
		$this->load->view('front-end/footer');
	}

}

/* End of file Room.php */
/* Location: ./application/controllers/Room.php */