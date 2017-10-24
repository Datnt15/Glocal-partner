<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	protected $ci_nonce;
	protected $user_data;
    protected $messages;
	public function __construct(){
		parent::__construct();
		// Nếu chưa khởi tạo access token\
        if (is_null( $this->session->ci_nonce) ) {
            $this->session->set_userdata("ci_nonce", substr(md5(microtime()),0,15));
        }
        $this->ci_nonce = $this->session->ci_nonce;
        $this->load->model('user');
        $is_remember = $this->input->cookie('remember_me');
        $uid_cookie = $this->encrypt->decode($this->input->cookie('uid'));
        $user_type_cookie = $this->encrypt->decode($this->input->cookie('password'));
        $is_logged_in = $this->session->userdata("is_logged_in");
        $uid_session = $this->session->uid;
        $user_type_session = $this->session->user_type;
        
        // Tồn tại cả cookie và session
        if(!is_null($is_remember) && !is_null($is_logged_in) ){
            if ($uid_cookie == $uid_session && $user_type_cookie == $user_type_session) {
                $this->user_data = $this->user->get_user(['uid' => $uid_session, 'type' => $user_type_session])[0];
            }else{
                // Cài đặt thông báo
                $this->session->set_flashdata('type', 'warning');
                $this->session->set_flashdata('msg', 'It seems like you had change your cookie data. Please login again and do not change theme.');
                $this->session->set_flashdata('title', 'Something goes wrong!');
                redirect('logout');
            }
        }

        // Chỉ tồn tại session mà không có cookie
        elseif(is_null($is_remember) && !is_null($is_logged_in) ){
            $this->user_data = $this->user->get_user(['uid' => $uid_session, 'type' => $user_type_session])[0];
        }

        // Chỉ tồn tại cookie mà không có session
        elseif(!is_null($is_remember) && is_null($is_logged_in) ){
            $this->user_data = $this->user->get_user(['uid' => $uid_cookie, 'type' => $user_type_cookie])[0];
        }

        // Không tồn tại cả cookie và session
        elseif(is_null($is_remember) && is_null($is_logged_in) ){
            // Cài đặt thông báo
            $this->session->set_flashdata('type', 'warning');
            $this->session->set_flashdata('msg', 'You forgot to login. PLease fill these fields and let us know who you are.');
            $this->session->set_flashdata('title', 'Oops!');
            redirect(base_url().'login');
        }
        $this->load->model('chat_model');
        $this->messages = $this->chat_model->get_messages("state=0 AND to_IP='".$_SERVER['SERVER_ADDR']."'");
    }

    protected function get_messages(){
        $client_id = self::get_client_ip();
        return $this->chat_model->get_messages("IP='".$client_id."' OR to_IP='".$client_id."'");
    }

    // protected function cleanString($text, $remove_space = true, $word = '') {
    //     $text = str_replace('/', '-', $text);
    //     $text = str_replace('"', '', $text);
    //     $utf8 = array(
    //         '/[áàâãªäăạảắẳẵằặấầẩẫậ]/u' => 'a',
    //         '/[ÁÀÂÃÄĂẠẢẴẮẲẶẰẦẤẬẨ]/u'   => 'a',
    //         '/[ÍÌÎÏỊĨỈ]/u'             => 'i',
    //         '/[íìîïịĩỉ]/u'             => 'i',
    //         '/[éèêëẹẽếềễệẻể]/u'        => 'e',
    //         '/[ÉÈÊËẸẼẺẾỀỂỄỆ]/u'        => 'e',
    //         '/[óòôõºöọỏơờởớợỡồổốộ]/u'  => 'o',
    //         '/[ÓÒÔÕÖỎỌƠỞỢỚỜỠỒỔỐỖỘ]/u'  => 'o',
    //         '/[úùûüũụủưứừửữự]/u'       => 'u',
    //         '/[ÚÙÛÜŨỤỦƯỨỪỬỮỰ]/u'       => 'u',
    //         '/[Đđ]/u'                  => 'd',
    //         '/ç/'                      => 'c',
    //         '/Ç/'                      => 'c',
    //         '/ñ/'                      => 'n',
    //         '/Ñ/'                      => 'n',
    //         '/–/'                      => '-', // UTF-8 hyphen to "normal" hyphen
    //         '/[’‘‹›‚]/u'               => '', // Literally a single quote
    //         '/[“”«»„]/u'               => '' // Double quote
            
    //     );
    //     if ($remove_space) {
    //         $utf8['/ /'] = '-';
    //     }
    //     if ($word != '') {
    //         $utf8[$word] = '';
    //     }

    //     return preg_replace(array_keys($utf8), array_values($utf8), $text);
    // }
    // 
    protected function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

}

class Front_base extends CI_Controller {

    protected $ci_nonce;
    protected $user_data;
    public function __construct(){
        parent::__construct();
        // Nếu chưa khởi tạo access token\
        if (is_null( $this->session->ci_nonce) ) {
            $this->session->set_userdata("ci_nonce", substr(md5(microtime()),0,15));
        }
        $this->ci_nonce = $this->session->ci_nonce;
        $this->load->model('user');
        $this->user_data = [];
        if(!is_null($this->input->cookie('remember_me')) ){
            $uid = $this->encrypt->decode($this->input->cookie('uid'));
            $user_type = $this->encrypt->decode($this->input->cookie('password'));
            $user = $this->user->get_user(['uid' => $uid, 'type' => $user_type]);
            if ( count($user) ) {
                $this->user_data = $user[0];
            }
        }
        if ($this->session->userdata("is_logged_in")) {
            $this->user_data = $this->user->get_user(['uid' => $this->session->uid, 'type' => $this->session->user_type])[0];
        }
        $this->load->model('chat_model');
    }

    protected function get_messages(){
        $client_id = self::get_client_ip();
        return $this->chat_model->get_messages("IP='".$client_id."' OR to_IP='".$client_id."'");
    }

    protected function cleanString($text, $remove_space = true, $word = '') {
        $text = str_replace('/', '-', $text);
        $text = str_replace('"', '', $text);
        $utf8 = array(
            '/[áàâãªäăạảắẳẵằặấầẩẫậ]/u' => 'a',
            '/[ÁÀÂÃÄĂẠẢẴẮẲẶẰẦẤẬẨ]/u'   => 'a',
            '/[ÍÌÎÏỊĨỈ]/u'             => 'i',
            '/[íìîïịĩỉ]/u'             => 'i',
            '/[éèêëẹẽếềễệẻể]/u'        => 'e',
            '/[ÉÈÊËẸẼẺẾỀỂỄỆ]/u'        => 'e',
            '/[óòôõºöọỏơờởớợỡồổốộ]/u'  => 'o',
            '/[ÓÒÔÕÖỎỌƠỞỢỚỜỠỒỔỐỖỘ]/u'  => 'o',
            '/[úùûüũụủưứừửữự]/u'       => 'u',
            '/[ÚÙÛÜŨỤỦƯỨỪỬỮỰ]/u'       => 'u',
            '/[Đđ]/u'                  => 'd',
            '/ç/'                      => 'c',
            '/Ç/'                      => 'c',
            '/ñ/'                      => 'n',
            '/Ñ/'                      => 'n',
            '/–/'                      => '-', // UTF-8 hyphen to "normal" hyphen
            '/[’‘‹›‚]/u'               => '', // Literally a single quote
            '/[“”«»„]/u'               => '' // Double quote
            
        );
        if ($remove_space) {
            $utf8['/ /'] = '-';
        }
        if ($word != '') {
            $utf8['/'.$word.'/'] = '';
        }

        return preg_replace(array_keys($utf8), array_values($utf8), $text);
    }

    protected function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

}