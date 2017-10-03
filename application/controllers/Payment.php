<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends Front_base {

	public function __construct(){
		parent::__construct();
		$this->load->model('booking');

	}

	public function index($book_code)	{
		if (!count($this->user_data)) {
			// Cài đặt thông báo
            $this->session->set_flashdata('type', 'error');
            $this->session->set_flashdata('msg', 'You are trying to rich personal area. Please login to do so.');
            $this->session->set_flashdata('title', 'This is private place');
            redirect('login');
            die("<title>Error</title><h1>You are trying to rich personal area. Please login to do so.</h1>");
		}
		$post = $this->input->post();
		$room_id = $this->encrypt->decode($this->session->room_booking_data['room_code']);
		$booking_request = $this->booking->get_booking_request(['book_code' => $book_code ]);
		if ( isset($post['accessToken']) && $post['accessToken'] == $this->ci_nonce && count($booking_request) ) {
			$booking_request = $booking_request[0];
			$room = $this->booking->get_room(['room_id' => $booking_request['room_id'] ]);
			$room = $this->booking->get_cities($room[0]);
			$data = [
				'title' 		=> "Pay for room - ".$room['name'],
				'user' 			=> $this->user_data,
				'room'		 	=> $room,
				'accessToken' 	=> $this->ci_nonce,
				'booking_request' => $booking_request
			];
			$this->load->view('front-end/header', $data, FALSE);
			$this->load->view('front-end/booking/payment');
			$this->load->view('front-end/footer');
		}else{
			// Cài đặt thông báo
            $this->session->set_flashdata('type', 'error');
            $this->session->set_flashdata('msg', 'It seems like you have change the HTML code. Please DO NOT do it agian.');
            $this->session->set_flashdata('title', 'Submit contents are not match');
            redirect($room_id);
            die("<title>Error</title><h1>You are trying to change the HTML code. Please DO NOT do it agian.</h1>");
		}
	}
}

/* End of file Booking.php */
/* Location: ./application/controllers/Booking.php */