<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends Front_base {

	public function __construct(){
		parent::__construct();
		$this->load->model('location_model');
		$this->load->model('room');
		$this->load->library('pagination');
	}
	public function index($location = null, $page = 1){
		if ($location == null) {
			$data = [
				'title' 		=> 'Locations - Glocal partner',
				'user' 			=> $this->user_data,
				'locations' 	=> $this->location_model->get_available_location(),
				'accessToken' 	=> $this->ci_nonce
			];
			$this->load->view('front-end/header', $data, FALSE);
			$this->load->view('front-end/location/all');
			$this->load->view('front-end/footer');
		}else{
			$location = str_replace('_', '-', $location);

			$location = $this->location_model->get_locations(['location_slug' => $location]);
			if (count($location)) {

				$this->load->library('pagination');

				$config['base_url'] = base_url('location/'.$location[0]['location_slug'].'/');
				$config['total_rows'] = count($this->room->get_room('location='.$location[0]['location_id'], 100));
				$config['per_page'] = PER_PAGE;
				$config['full_tag_open'] = '<ul class="pagination pagination-info">';
				$config['full_tag_close'] = '</ul>';
				$config['num_tag_open'] = '<li>';
				$config['num_tag_close'] = '</li>';
				$config['cur_tag_open'] = '<li class="active"><a href="javascript:void();">';
				$config['cur_tag_close'] = '</a></li>';
				$config['pre_tag_open'] = '<li>';
				$config['pre_tag_close'] = '</li>';
				$config['next_tag_open'] = '<li>';
				$config['next_tag_close'] = '</li>';
				$config['last_tag_open'] = '<li>';
				$config['last_tag_close'] = '</li>';
				$config['first_tag_open'] = '<li>';
				$config['first_tag_close'] = '</li>';
				$config['next_link'] = 'Next';
				$config['prev_link'] = 'Previous';
				$config['last_link'] = 'Last';
				$this->pagination->initialize($config);
				if ($page > ceil($config['total_rows']/PER_PAGE)) {
					$page = ceil($config['total_rows']/PER_PAGE);
				}
				if ($page < 1) {
					$page = 1;
				}

				$data = [
					'title' 		=> 'Locations - Glocal partner',
					'user' 			=> $this->user_data,
					'location' 		=> $location[0],
					'is_room_page' 	=> true,
					'rooms' 		=> $this->room->get_room('location='.$location[0]['location_id'], PER_PAGE, $page-1),
					'pagination' 	=> $this->pagination->create_links(),
					'accessToken' 	=> $this->ci_nonce
				];
				$this->load->view('front-end/header', $data, FALSE);
				$this->load->view('front-end/location/single-location');
				$this->load->view('front-end/footer');
			}else{
				// show_404();
			}
		}
	}

	function _remap($method){
	    $param_offset = 2;
	    // Default to index
	    if ( ! method_exists($this, $method))
	    {
	        // We need one more param
	        $param_offset = 1;
	        $method = 'index';
	    }
	    // Since all we get is $method, load up everything else in the URI
	    $params = array_slice($this->uri->rsegment_array(), $param_offset);
	    // Call the determined method with all params
	    call_user_func_array(array($this, $method), $params);
	} 

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
