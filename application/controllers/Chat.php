<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends Front_base {
	private $client_ip;
	public function __construct(){
		parent::__construct();
		$this->load->model('chat_model');
		$this->client_ip = $this->get_client_ip();
	}

	public function index(){
		$post = $this->input->post(NULL, TRUE);
		$chat = array(
			'IP' => $this->client_ip,
			'to_IP' => $_SERVER['SERVER_ADDR'],
			'content' => $post['content'],
			'state' => SENT
		);
		echo $this->chat_model->add_message($chat);
	}

	public function anwser(){
		$post = $this->input->post(NULL, TRUE);
		$chat = array(
			'IP' => $_SERVER['SERVER_ADDR'],
			'to_IP' => $post['IP'],
			'content' => $post['content'],
			'state' => SENT
		);
		echo $this->chat_model->add_message($chat);
	}

	public function get_new_messages(){
		echo json_encode($this->chat_model->get_messages("state=0 AND (IP='".$this->client_ip."' OR to_IP='".$this->client_ip."')"));
	}

	public function get_new_messages_to_server_from_IP(){
		echo json_encode($this->chat_model->get_messages("state=0 AND to_IP='".$_SERVER['SERVER_ADDR']."'"));
	}

	public function get_all_messages(){
		echo json_encode($this->get_messages());
	}

	public function get_all_messages_of_client($_client_ip){
		echo json_encode($this->chat_model->get_messages("IP='".$_client_ip."' OR to_IP='".$_client_ip."'"));
	}

	public function get_ip(){
		echo $this->client_ip;
	}

	public function update_msg(){
		$post = $this->input->post(NULL, TRUE);
		if (isset($post['flag'])) {
			$this->chat_model->change_msg_to_read(['to_IP' => $this->client_ip, 'IP' => $_SERVER['SERVER_ADDR']]);
		}else
			$this->chat_model->change_msg_to_read(['to_IP' => $to_IP]);
	}


	public function update_msg_of_client(){
		$post = $this->input->post(NULL, TRUE);
		$this->chat_model->change_msg_to_read(['IP'=>$post['ip']]);
	}

}

/* End of file Chat.php */
/* Location: ./application/controllers/Chat.php */