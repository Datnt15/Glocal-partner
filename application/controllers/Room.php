<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends Front_base {

	public function __construct(){
		parent::__construct();
		$this->load->model('booking');
		$this->load->model('location_model');
	}

	public function index($room_id){

		$room = $this->booking->get_room(['id' => $room_id ]);
		if (count($room)) {
			$room = $room[0];
			$data = [
				'title' 		=> $room['room_no'].' - Detail Informations',
				'user' 			=> $this->user_data,
				'room'		 	=> $room,
				'meta' 			=> $this->booking->get_room_meta(['room_id' => $room_id ]),
				'room_code' 	=> $this->encryption->encrypt($room_id),
				'accessToken' 	=> $this->ci_nonce,
				'location' 		=> $this->location_model->get_locations(['location_id' => $room['location']])[0],
				'relate_rooms' 	=> $this->booking->get_related_rooms($room),
				'invalidDates' 	=> $this->booking->get_booked_dates($room['room_no'], $room['location']),
				'is_room_page' 	=> true,
				'currency' 		=> 'USD'
			];

			$this->load->view('front-end/header', $data, FALSE);
			$this->load->view('front-end/single-room');
			$this->load->view('front-end/footer');
		}
		// Không tìm thấy kết quả
		else{
			// Nếu là số
			show_404();
		}
	}

	public function calc_fee(){
		$post = $this->input->post();
		if ($this->ci_nonce == $post['accessToken']) {
			$result['type'] = 'success';
			$room_id = $post['room_no'];
			$room = $this->booking->get_room(['id' => $room_id ]);
			if (count($room)) {
				$room = $room[0];
				
				$months_fee = $post['months']*$room['room_monthly_tax'];
				$weeks_fee = $post['weeks']*$room['room_weekly_tax'];
				$days_fee = $post['days']*$room['room_daily_tax'];
				$result['html'] = "<table class='table table-striped'><tr><td><span class='text-muted'>Monthly Tax</span></td><td></td></tr><tr><td>".number_format($room['room_monthly_tax'], 0, '.', ' ') ."<sup>USD</sup> x ".$post['months']." month</td><td>".$months_fee." <sup>USD</sup></td></tr><tr><td><span class='text-muted'>Weekly Tax</span></td><td></td></tr><tr><td>".number_format($room['room_weekly_tax'], 0, '.', ' ') ."<sup>USD</sup> x ".$post['weeks']." week</td><td>".$weeks_fee." <sup>USD</sup></td></tr><tr><td><span class='text-muted'>Daily Tax</span></td><td></td></tr><tr><td>".number_format($room['room_daily_tax'], 0, '.', ' ') ."<sup>USD</sup> x ".$post['days']." day</td><td>".$days_fee." <sup>USD</sup></td></tr><tr><td><b>Total Rent</b></td><td>".($days_fee + $weeks_fee + $months_fee)." <sup>USD</sup></td></tr></table>";
				// Đặt session data khi tạo yêu cầu thuê phòng
				$this->session->set_userdata('total_fee', $days_fee + $weeks_fee + $months_fee);
				$result['total_fee'] = $days_fee + $weeks_fee + $months_fee;
				echo json_encode($result);
			}else{
				echo json_encode([
					'type' => 'warning',
					'msg' => "It's seem like you has changed the html code. Please reload this page and try again!",
					'title' => 'Room code is invalid!'
				]);
			}
			
		}else{
			echo json_encode([
				'type' => 'warning',
				'msg' => "It's seem like you has changed the html code. Please reload this page and try again!",
				'title' => 'Access Token is invalid!'
			]);
		}
	}

}

/* End of file Room.php */
/* Location: ./application/controllers/Room.php */