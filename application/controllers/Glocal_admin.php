<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Glocal_admin extends CI_Controller {

	public function index()
	{
		$data = array( 'title' => 'Admin area' );
		$this->load->view('back-end/header');
		$this->load->view('back-end/sidebar');
		$this->load->view('back-end/footer');
	}

	public function all_homestay()
	{
		$data = array( 
			'title' => 'All Homestay ',
			'page' => 'all-homestay'
		);
		$this->load->view('back-end/header', $data);
		$this->load->view('back-end/sidebar');
		$this->load->view('back-end/homestay/all');
		$this->load->view('back-end/footer');
	}
	
	public function add_new_home()
	{
		$data = array( 
			'title' => 'Adding new Homestay ',
			'page' => 'add-new-home'
		);
		$this->load->view('back-end/header', $data);
		$this->load->view('back-end/sidebar');
		$this->load->view('back-end/homestay/add-new-home');
		$this->load->view('back-end/footer');
	}

	public function categories()
	{
		$data = array( 
			'title' => 'All Homestay ',
			'page' => 'categories'
		);
		$this->load->view('back-end/header', $data);
		$this->load->view('back-end/sidebar');
		$this->load->view('back-end/homestay/categories');
		$this->load->view('back-end/footer');
	}

}

/* End of file Glocal_admin.php */
/* Location: ./application/controllers/Glocal_admin.php */