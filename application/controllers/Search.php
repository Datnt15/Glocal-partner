<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index()
	{
		$data = [
			'title' => 'Results page - Glocal partner',
			'filter' => $this->load->view('front-end/filter', '', TRUE)
		];
		$this->load->view('front-end/header', $data, FALSE);
		$this->load->view('front-end/search');
		$this->load->view('front-end/footer');
	}

}

/* End of file Search.php */
/* Location: ./application/controllers/Search.php */