<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    private $ci_nonce;
	function __construct() {
        parent::__construct();
        // Nếu chưa khởi tạo access token\
        if (is_null($this->session->ci_nonce)) {
            $this->session->set_userdata("ci_nonce", substr(md5(microtime()),0,15));
        }
        $this->load->model('user');

        $this->ci_nonce = $this->session->ci_nonce;
        if(!is_null($this->input->cookie('remember_me')) ){
            $uid = $this->encrypt->decode($this->input->cookie('uid'));
            $user_type = $this->encrypt->decode($this->input->cookie('password'));
            $user = $this->user->get_user(['uid' => $uid, 'type' => $user_type]);
            if ( count($user) ) {
                self::redirect_page($user_type);
            }
        }

        if ($this->session->is_logged_in) {
            redirect(base_url('profile'),'refresh');
        }
        // Load libraries
        $this->load->library('form_validation');
    }
    
	public function index()
	{
		// Đặt các luật kiểm tra các trường của form
        $this->form_validation->set_rules('username', 'Tên đăng nhập', 'required|trim|is_unique[_ci_94_user.username]|regex_match[/^[A-Za-z0-9\s-]{4,}$/i]');
        $this->form_validation->set_rules("password', 'Mật khẩu', 'required|regex_match[/^[A-Za-z_0-9-]{4,15}[^'\x22\s@!]+$/]");
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[_ci_94_user.email]');
        $this->form_validation->set_rules( 'access_token', 'Access Token', 'required|callback_is_match_access_token');

        // Đặt thông báo khi các trường không thỏa mãn điều kiện đầu vào
        $this->form_validation->set_message('is_match_access_token', '%s không khớp!');
        $this->form_validation->set_message('required', 'Vui lòng không bỏ trống trường %s!');
        $this->form_validation->set_message('min_length', '%s phải dài hơn %d ký tự!');
        $this->form_validation->set_message('max_length', '%s phải ngắn hơn %d ký tự!');
        $this->form_validation->set_message('valid_email', 'Địa chỉ email không hợp lệ!');
        $this->form_validation->set_message('is_unique', '%s đã được sử dụng!');
        $this->form_validation->set_message('regex_match', '%s không hợp lệ!');
        if (!$this->form_validation->run()){
             
            $data = [
                'ci_nonce'  => $this->ci_nonce
            ];
            $this->load->view('register', $data);
        }else{ 
        	$post = $this->input->post();
            $user_content = [
                'username'  => $post['username'],
                'password'  => password_hash($post['password'], PASSWORD_BCRYPT, array('cost' => 12)),
                'email'     => $post['email'],
                'type' 		=> 1
            ];
            $uid = $this->user->add_user($user_content);
            if ($uid) {
                // Cài đặt thông báo
                $this->session->set_flashdata('type', 'success');
                $this->session->set_flashdata('msg', 'Đăng ký thành công, vui lòng đăng nhập');
                redirect(HOST.'login');
                
            }

        }
	}

	// Kiểm tra tính hợp lệ của access token
    public function is_match_access_token($str) {
        $flag = true;
        if ($this->ci_nonce != $str) {
            $flag = false;
        }
        $this->session->set_userdata("ci_nonce", substr(md5(microtime()),0,15));
        return $flag;
    }

}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */