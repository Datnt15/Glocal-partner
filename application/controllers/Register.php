<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('user');
    }
    
	public function index()
	{
		$this->load->view('register');
	}

}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */