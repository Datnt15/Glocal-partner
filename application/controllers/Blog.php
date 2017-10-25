<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends Front_base {
	
	public function __construct($value=''){
		parent::__construct();
	}

	public function index()
	{
		$data = [
			'title' => 'Blog page',
			'user' 	=> $this->user_data
		];
		$this->load->view('front-end/header', $data, FALSE);
		$this->load->view('front-end/blog-content');
		$this->load->view('front-end/footer');
	}
}

/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php */