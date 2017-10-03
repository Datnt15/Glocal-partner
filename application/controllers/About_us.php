<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends Front_base {

	public function index()
	{
		$data = [
			'title' => 'About us'
		];
		$this->load->view('front-end/header', $data, FALSE);
		$this->load->view('front-end/about-us');
		$this->load->view('front-end/footer');
	}

}

/* End of file About_us.php */
/* Location: ./application/controllers/About_us.php */