<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends Front_base {

	public function __construct(){
		parent::__construct();
		$this->load->model('booking');
	}

	public function index($room_id){

		$room = $this->booking->get_room(['id' => $room_id ]);
		if (count($room)) {
			$room = $room[0];
			$room['meta'] = $this->booking->get_room_meta(['id' => $room_id ]);
			$data = [
				'title' 		=> $room['room_no'].' - Detail Informations',
				'user' 			=> $this->user_data,
				'room'		 	=> $room,
				'room_code' 	=> $this->encrypt->encode($room_id),
				'accessToken' 	=> $this->ci_nonce,
				'relate_rooms' 	=> $this->booking->get_related_rooms($room)
			];
			$this->load->view('front-end/header', $data, FALSE);
			$this->load->view('front-end/single-room');
			$this->load->view('front-end/footer');
		}else{
			if (gettype($room_id) == "interger") {
				
				$this->load->view('errors/html/error_404', [
					'heading' => '404 Page Not Found', 
					'message' => 'The page you requested was not found.'
				]);
			}else{
				$this->{$room_id}();
			}
		}
	}

	public function calc_fee(){
		$post = $this->input->post();
		if ($this->ci_nonce == $post['accessToken']) {
			$result['type'] = 'success';
			$room_id = $this->encrypt->decode($post['room_code']);
			$room = $this->booking->get_room(['room_id' => $room_id ]);
			if (count($room)) {
				$room = $room[0];
				$post['weekendDays'] = intval($post['weekendDays']);
				$post['normalDays'] = intval($post['normalDays']);
				$check_out_day = intval( date("w", strtotime( $post['endDate'] ) ) );
				
				if ($check_out_day == 0 || $check_out_day == 6) {
					$post['weekendDays']--;
				}else{
					$post['normalDays']--;
				}

				$result['total_night'] = $post['weekendDays'] + $post['normalDays'];
				$result['total_rent_rate'] = (intval( $room['weekly_rate'] ) * $post['normalDays']) + (intval( $room['weekend_rate'] ) * $post['weekendDays']);
				
				// Store booking info
				$post['total_night'] = $result['total_night'];
				$post['total_rent_rate'] = $result['total_rent_rate'];
				$this->session->set_userdata('room_booking_data', $post);
				
				// return html to alert customer
				$result['html'] = "<table class='table table-striped'>
							<tr>
								<td><span class='text-muted'>Monday-Thursday</span></td>
								<td></td>
							</tr>
							<tr>
								<td>".$room['weekly_rate']." x ".$post['normalDays']." night</td>
								<td>$ ".intval($room['weekly_rate'])*$post['normalDays']."</td>
							</tr>
							<tr>
								<td><span class='text-muted'>Saturday-Sunday</span></td>
								<td></td>
							</tr>
							<tr>
								<td>".$room['weekend_rate']." x ".$post['weekendDays']." night</td>
								<td>$ ".intval($room['weekend_rate'])*$post['weekendDays']."</td>
							</tr>
							<tr>
								<td><b>Total price base</b></td>
								<td>$ ".$result['total_rent_rate']."</td>
							</tr>
						</table>";
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

	function _remap($param){
		$this->index($param);
	}

}

/* End of file Room.php */
/* Location: ./application/controllers/Room.php */