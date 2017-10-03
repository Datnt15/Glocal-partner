<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auto extends Front_base {

	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('front-end/auto-like');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
