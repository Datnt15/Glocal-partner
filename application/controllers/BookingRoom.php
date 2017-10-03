<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookingRoom extends Front_base {

	public function __construct(){
		parent::__construct();
		$this->load->model('booking');

	}

	public function index()	{
		$post = $this->input->post();
		$room_id = $this->encrypt->decode($this->session->room_booking_data['room_code']);
		if (isset($post['accessToken']) && $post['accessToken'] == $this->ci_nonce) {
			$booking_data = $this->session->room_booking_data;

			if ( $booking_data['room_code'] != $post['room_code'] ||
				$booking_data['startDate'] != $post['check-in'] ||
				$booking_data['endDate'] != $post['check-out']
			) {
				// Cài đặt thông báo
                $this->session->set_flashdata('type', 'error');
                $this->session->set_flashdata('msg', 'It seems like you have change the HTML code. Please DO NOT do it agian.');
                $this->session->set_flashdata('title', 'Submit contents are not match');
                redirect('room/'.$room_id);
                die("<title>Error</title><h1>You are trying to change the HTML code. Please DO NOT do it agian.</h1>");
			}
			$creating_book_data = [
				'book_code' 	=> substr(md5(microtime()),0,5),
				'room_id' 		=> $room_id,
				'checkin' 		=> $booking_data['startDate'],
				'checkout' 		=> $booking_data['endDate'],
				'total_night' 	=> $booking_data['total_night'],
				'total_rent_rate' => $booking_data['total_rent_rate'],
				'guests' 		=> $post['number_of_guests']
			];
			$book_id = $this->booking->add_book($creating_book_data);
			if ($book_id) {
				redirect('booking/'.$creating_book_data['book_code']);
			}

		}else{
			// Cài đặt thông báo
            $this->session->set_flashdata('type', 'error');
            $this->session->set_flashdata('msg', 'It seems like you have change the HTML code. Please DO NOT do it agian.');
            $this->session->set_flashdata('title', 'Submit contents are not match');
            redirect('room/'.$room_id);
            die("<title>Error</title><h1>You are trying to change the HTML code. Please DO NOT do it agian.</h1>");
		}
	}

	public function fill_book($book_code){
		$booking_request = $this->booking->get_booking_request(['book_code' => $book_code ]);
		if (count($booking_request)) {
			$booking_request = $booking_request[0];
			$booking_status = intval($booking_request['state']);
			if ($booking_status != CREATED) {
				switch ( $booking_status ){
					case FILLED_INFO:
						redirect('payment/'.$book_code, 'refresh');
						break;
					case PAID:
						redirect('successfull/'.$book_code, 'refresh');
						break;	
					case WAITING:
						redirect('waiting/'.$book_code, 'refresh');
						break;	
					case DONE:
						redirect('successfull/'.$book_code, 'refresh');
						break;	
					case CANCEL:
						redirect('cancel_booking', 'refresh');
						break;				
					default:
						
						break;
				}
			}
			$room = $this->booking->get_room(['room_id' => $booking_request['room_id'] ]);
			$room = $this->booking->get_cities($room[0]);
			$countries_name = json_decode(file_get_contents("assets/glocal-admin/json-data/countries_name.json"));
			$countries = [];
			foreach ($countries_name as $key => $value) {
				$countries[] = $value;
			}
			sort($countries);
			$data = [
				'title' 		=> "Booking Room - ".$room['name'],
				'user' 			=> $this->user_data,
				'room'		 	=> $room,
				'accessToken' 	=> $this->ci_nonce,
				'countries' 	=> $countries,
				'booking_request' => $booking_request
			];
			$this->load->view('front-end/header', $data, FALSE);
			$this->load->view('front-end/booking/fill-booking-contents');
			$this->load->view('front-end/footer');
		}else{
				
			$this->load->view('errors/html/error_404', [
				'heading' => '404 Page Not Found', 
				'message' => 'The page you requested was not found.'
			]);
		}
	}

}

/* End of file Booking.php */
/* Location: ./application/controllers/Booking.php */