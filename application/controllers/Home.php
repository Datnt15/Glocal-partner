<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = [
			'title' => 'Home - Glocal partner'
		];
		$this->load->view('front-end/header', $data, FALSE);
		$this->load->view('front-end/home');
		$this->load->view('front-end/footer');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
