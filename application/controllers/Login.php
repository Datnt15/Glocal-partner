<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	private $ci_nonce;
	function __construct() {
        parent::__construct();
        // Nếu chưa khởi tạo access token\
        if (is_null($this->session->ci_nonce)) {
            $this->session->set_userdata("ci_nonce", substr(md5(microtime()),0,15));
        }
        $this->ci_nonce = $this->session->ci_nonce;
        $this->load->model('user');

        if(!is_null($this->input->cookie('remember_me')) ){
            $uid = $this->encrypt->decode($this->input->cookie('uid'));
            $user_type = $this->encrypt->decode($this->input->cookie('password'));
            $user = $this->user->get_user(['uid' => $uid, 'type' => $user_type]);
            if ( count($user) ) {
                self::redirect_page($user_type);
            }
        }

        if ($this->session->is_logged_in) {
            self::redirect_page($this->session->user_type);
        }
        
        // Load libraries
        $this->load->library('form_validation');
        
    }

	public function index()
	{	
		// Đặt các luật kiểm tra các trường của form
        $this->form_validation->set_rules('username', 'Tên đăng nhập', 'required|trim|regex_match[/^[A-Za-z0-9_-]{4,15}$/i]');
        $this->form_validation->set_rules("password', 'Mật khẩu', 'required|trim|regex_match[/^[A-Za-z_0-9-]{4,15}$/i]");
        $this->form_validation->set_rules( 'access_token', 'Access Token', 'required|trim|callback_is_match_access_token');
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
                'title'     => "Đăng nhập",
                'ci_nonce'  => $this->ci_nonce
            ];
            $this->load->view('login', $data);
        }
        $this->check_login();
	}

	public function check_login(){
		$post = $this->input->post();
		if (isset($post['username'])) {
            $user = $this->user->get_user(['username' => $post['username']]);
            if(count($user) && password_verify($post['password'], $user[0]['password'])){
                // Cài đặt thông báo
                $this->session->set_flashdata('type', 'success');
                $this->session->set_flashdata('msg', 'Wellcome back ' . $user[0]['username'] . '! Check out the last news.');
                $this->session->set_flashdata('title', 'Login Successfully');
                $this->session->set_userdata('is_logged_in', true);
                $this->session->set_userdata('uid', $user[0]['uid']);
                $this->session->set_userdata('user_type', intval($user[0]['type']));
                if (isset($post['remember'])) {
                    $this->input->set_cookie(array(
                        'name'   => 'remember_me',
                        'value'  => true,                            
                        'expire' => 2592000,
                        'secure' => TRUE
                    ));
                    $this->input->set_cookie(array(
                        'name'   => 'uid',
                        'value'  => $this->encrypt->encode(intval($user[0]['uid'])),                            
                        'expire' => 2592000,
                        'secure' => TRUE
                    ));
                    $this->input->set_cookie(array(
                        'name'   => 'password',
                        'value'  => $this->encrypt->encode(intval($user[0]['type'])),                            
                        'expire' => 2592000,
                        'secure' => TRUE
                    ));
                }
                self::redirect_page($user[0]['type']);
                
            }else{
                // Cài đặt thông báo
                $this->session->set_flashdata('type', 'danger');
                $this->session->set_flashdata('msg', 'Tên đăng nhập hoặc mật khẩu không đúng');
                redirect('/login');
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

    public function login_with_social(){
    	$post = $this->input->post();
        if (isset($post['avatar'])) {
            $email = $post['email'];
            $user = $this->user->get_user(['email' => $email]);
            if (count($user)) {
                // Cài đặt thông báo
                $this->session->set_flashdata('type', 'success');
                $this->session->set_flashdata('msg', 'Đăng nhập thành công');
                $this->session->set_userdata('is_logged_in', true);
                $this->session->set_userdata('uid', $user[0]['uid']);
                $this->session->set_userdata('user_type', $user[0]['type']);
            }else{
                
                // Đăng ký user mới
                $new_uid = $this->user->add_user([
                    'username'  => $post['username'],
                    'password'  => $post['password'],
                    'email'     => $post['email'],
                    'avatar'    => $post['avatar'],
                    'type' => 1
                ]);
                $this->session->set_flashdata('type', 'success');
                $this->session->set_flashdata('msg', 'Đăng nhập thành công');
                $this->session->set_userdata('is_logged_in', true);
                $this->session->set_userdata('uid', $new_uid);
                $this->session->set_userdata('user_type', 1);
            }
            echo json_encode(['type' => 'login_success']);
        }
    }

    private function redirect_page($role){
        switch (intval($role)) {
            case USER_TYPE:
                redirect('profile');
                break;
            case ADMIN_TYPE:
                redirect('glocal_admin');
                break;
            
            default:
                redirect('profile');
                break;
        }
    }

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */