<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('user');
    }

	public function index()
	{
		$this->check_login();
		$this->load->view('login');
	}

	public function check_login(){
		$post = $this->input->post();
		if (isset($post['username'])) {
			$data = array('username' => $post['username'], 'password' => password_hash($post['password'], PASSWORD_BCRYPT, array('cost' => 12)) );
			if (count($this->user->get_user($data))) {
				echo "Logged in";
			}else{
				echo "Wrong account";
			}
		}
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */