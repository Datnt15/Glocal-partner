<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$data = [
			'title' => 'Blog page'
		];
		$this->load->view('front-end/header', $data, FALSE);
		$this->load->view('front-end/blog-content');
		$this->load->view('front-end/footer');
	}

}

/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php */