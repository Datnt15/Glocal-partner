<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Glocal_admin extends MY_Controller {

	function __construct() {
        parent::__construct();

        if (intval( $this->user_data['type'] ) !== ADMIN_TYPE) {
        	redirect(base_url().'login','refresh');
        }
        $this->load->model('room');
        $this->load->model('location_model');
    }

	public function index()
	{
		self::load_header('Admin area');
		$this->load->view('back-end/footer');
	}

	private function load_header($title = 'Admin area', $page = 'page'){
		$data = array( 
			'title' => $title,
			'user' => $this->user_data,
			'accessToken' => $this->ci_nonce,
			'messages' => $this->messages,
			'page' => $page
		);
		$this->load->view('back-end/header', $data);
		$this->load->view('back-end/admin-sidebar');
	}

	public function locations(){
		$data = array( 
			'locations' => $this->location_model->get_all_locations()
		);
		self::load_header('Admin area');
		$this->load->view('back-end/location/all', $data);
		$this->load->view('back-end/footer');
	}

	protected function cleanString($text) {
        $text = str_replace('/', '-', $text);
        $text = str_replace('"', '', $text);
        $utf8 = array(
            '/[áàâãªäăạảắẳẵằặấầẩẫậ]/u'      =>   'a',
            '/[ÁÀÂÃÄĂẠẢẴẮẲẶẰẦẤẬẨ]/u'        =>   'a',
            '/[ÍÌÎÏỊĨỈ]/u'                  =>   'i',
            '/[íìîïịĩỉ]/u'                  =>   'i',
            '/[éèêëẹẽếềễệẻể]/u'             =>   'e',
            '/[ÉÈÊËẸẼẺẾỀỂỄỆ]/u'             =>   'e',
            '/[óòôõºöọỏơờởớợỡồổốộ]/u'       =>   'o',
            '/[ÓÒÔÕÖỎỌƠỞỢỚỜỠỒỔỐỖỘ]/u'       =>   'o',
            '/[úùûüũụủưứừửữự]/u'            =>   'u',
            '/[ÚÙÛÜŨỤỦƯỨỪỬỮỰ]/u'            =>   'u',
            '/[Đđ]/u'            			=>   'd',
            '/ç/'                           =>   'c',
            '/Ç/'                           =>   'c',
            '/ñ/'                           =>   'n',
            '/Ñ/'                           =>   'n',
            '/–/'                           =>   '-', // UTF-8 hyphen to "normal" hyphen
            '/[’‘‹›‚]/u'                    =>   '', // Literally a single quote
            '/[“”«»„]/u'                    =>   '', // Double quote
            '/ /'                           =>   '-', // nonbreaking space (equiv. to 0x160)
        );
        return preg_replace(array_keys($utf8), array_values($utf8), $text);
    }
    
    public function chat(){
    	self::load_header('User support','chat');

    	$data=[
    		'all_messages' => $this->chat_model->run_query("SELECT chat.IP, IFNULL(latest.new_msg, 0) as new_msg FROM ".CHAT_TABLE." as chat LEFT OUTER JOIN (SELECT IP, COUNT(*) as new_msg FROM ".CHAT_TABLE." WHERE state=0 AND to_IP='".$_SERVER['SERVER_ADDR']."' GROUP by IP) as latest ON (chat.IP=latest.IP) WHERE chat.IP<>'".$_SERVER['SERVER_ADDR']."' GROUP BY chat.IP;")
    	];
    	$this->load->view('back-end/chat/chat', $data);
    	$this->load->view('back-end/footer');
    }

	public function all_homestay(){
		$rooms =  $this->room->get_all_rooms(100);
		foreach ($rooms as &$room) {
			$room['meta'] = $this->room->get_room_meta(['room_id' => $room['id']]);
		}
		self::load_header("All Homestay",'all-homestay');
		$this->load->view('back-end/homestay/all', ['rooms' => $rooms]);
		$this->load->view('back-end/footer');
	}

	public function update_room_data(){
		$post = $this->input->post();
		if (!isset($post['field'])) die;
		if ($post['accessToken'] == $this->ci_nonce) {
			if (
				$post['field'] == 'delete_room' && 
				$this->room->delete_room(['room_id' => $post['id']])
			){
				echo json_encode([
					'type' => 'success',
					'msg' => 'Room data is deleted!!!',
					'title' => 'Whooo!'
				]);
			}
			elseif(
				$post['field'] != 'delete_room' && 
				$this->room->update_room_data(
					['id' => $post['id']], 
					[$post['field'] => $post['value']]
				)
			){

				echo json_encode([
					'type' => 'success',
					'msg' => 'Room data is saved!!!',
					'title' => 'Whooo!'
				]);
			}
			else{

				echo json_encode([
					'type' => 'warning',
					'msg' => 'Something is going wrong! May be your connection was broke! Check that out!',
					'title' => 'Oops!'
				]);
			}
		}else{
			echo json_encode([
				'type' => 'error',
				'msg' => 'It seem like you are trying to change the HTML data!!!',
				'title' => 'Oops!'
			]);
		}
	}
	
	public function delete_image(){
		$post = $this->input->post();
		if (!isset($post['room'])) die;
		if ($post['accessToken'] == $this->ci_nonce) {
			
			if(
				count($this->room->get_specifix_room(
					['room_id' => $post['room'], 
					'room_thumbnail' => $post['value']]
				))
			){

				echo json_encode([
					'type' => 'warning',
					'msg' => 'This image is room thumbnail! Please select other image to delete!',
					'title' => 'Oops!'
				]);
			}
			else{
				if ($this->room->delete_room_meta_data([
					'room_id' => $post['room'], 
					'meta_value' => $post['value'],
					'meta_id' => $post['id']
				])) {
					unlink($post['value']);
					echo json_encode([
						'type' => 'success',
						'msg' => 'This image has been remove!!!',
						'title' => 'Whooo!'
					]);
				}else{
					echo json_encode([
						'type' => 'warning',
						'msg' => 'Something is going wrong! May be your connection was broke! Check that out!',
						'title' => 'Oops!'
					]);
				}
			}
		}else{
			echo json_encode([
				'type' => 'error',
				'msg' => 'It seem like you are trying to change the HTML data!!!',
				'title' => 'Oops!'
			]);
		}
	}

	public function update_room_meta_data(){
		$post = $this->input->post();
		if (!isset($post['field'])) die;
		if ($post['accessToken'] == $this->ci_nonce) {
			if(
				$this->room->update_room_data(
					[
						'room_id' => $post['id'],
					], 
					[$post['field'] => $post['value']]
				)
			){
				echo json_encode([
					'type' => 'success',
					'msg' => 'Room data is saved!!!',
					'title' => 'Whooo!'
				]);
			}
			else{

				echo json_encode([
					'type' => 'warning',
					'msg' => 'Something is going wrong! May be your connection was broke! Check that out!',
					'title' => 'Oops!'
				]);
			}
		}else{
			echo json_encode([
				'type' => 'error',
				'msg' => 'It seem like you are trying to change the HTML data!!!',
				'title' => 'Oops!'
			]);
		}
	}
	
	public function add_new_home(){
		self::load_header('Adding new Homestay','add-new-home');
		$data = ['locations' => $this->location_model->get_all_parent_locations()];
		$this->load->view('back-end/homestay/add-new-home', $data);
		$this->check_room_adding_data();
		$this->load->view('back-end/footer');
	}

	public function edit_room($room_id){

		// Handles changes data
		$post = $this->input->post();
		if (isset($post['home'])) {
			$this->room->update_room_data(['id' => $room_id],$post['home']);
			$this->session->set_flashdata('type', 'success');
			$this->session->set_flashdata('title', 'Changes saved');
			$this->session->set_flashdata('msg', 'Your changes is saved! Check it out at view home button!');
			$this->room->delete_room_meta_data(array(
				'meta_key<>' => 'gallery',
				'room_id' => $room_id
			));
			foreach ($post['meta'] as $key => $value) {
				if (!empty($value)) {
					$this->room->add_room_meta_data(array(
						'meta_key' => $key,
						'meta_value' => $value,
						'room_id' => $room_id
					));
				}
			}
		}

		// Load and show data in view
		$data['room'] = $this->room->get_specifix_room(['id' => $room_id]);
		$data['meta'] = $this->room->get_room_meta(['room_id' => $room_id]);
		$data['locations'] = $this->location_model->get_all_parent_locations();
		$page = count($data['room']) ? 'add-new-home' : '404';
		$title = count($data['room']) ? "Editting " . $data['room'][0]['room_no'] : "404 - Nothing Found";

		self::load_header($title, $page);
		if (count($data['room'])) {
			$this->load->view('back-end/homestay/edit-home', $data);
		}else{
			$this->load->view('back-end/404');
		}
		$this->load->view('back-end/footer');
	}

	public function upload_room_image(){
		$post = $this->input->post();
		if (isset($post['action']) && $post['action'] == 'upload_image') {
			if ($post['accessToken'] != $this->ci_nonce) {
				echo json_encode([
					'type' => 'error',
					'msg' => 'It seem like you are trying to change the HTML data!!!',
					'title' => 'Oops!',
					'html' => ''
				]);
				die();
			}
			$room_id = $post['room'];
			$images = self::reArrayFiles( $_FILES['images'] );
			$target_dir = "uploads/";
			// Config to resize image
			$config['image_library'] = 'gd2';
			$config['create_thumb'] = false;
			$config['maintain_ratio'] = TRUE;
			$config['width']         = 1024;
			$msg = 'Your Images are added!';
			$html = '';
			
			foreach ($images as $image) {
				$target_file = $target_dir . $this->cleanString($image['name']);
				$uploadOk = 1;
				$imageFileType = pathinfo($image['name'],PATHINFO_EXTENSION);

				// Check if image file is a actual image or fake image
			    $check = @getimagesize($image["tmp_name"]);
			    if($check !== false) {
			        $uploadOk = 1;
			    } else {
			    	
			    	$msg .= "The file ". basename( $image["name"]). " is not an image.<br/>";
			        $uploadOk = 0;
			    }
				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
				    $msg .= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br/>";
				    $uploadOk = 0;
				}
				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
				    $msg .= "Sorry, the file ". basename( $image["name"]). " was not uploaded.<br/>";
	                
				// if everything is ok, try to upload file
				} else {

					// Upload image
				    if (move_uploaded_file($image["tmp_name"], $target_file)) {
				    	list($width_origin, $height_origin) = getimagesize(HOST . $target_file);
				    	if ($width_origin > $config['width']) {
					    	$config['source_image'] = $target_file;
					    	$this->load->library('image_lib');
							$this->image_lib->initialize($config);
							$this->image_lib->resize();
							$this->image_lib->clear(); 
				    	}
						list($width, $height) = getimagesize(HOST . $target_file);
					
				    	$meta_id = $this->room->add_room_meta_data([
							'meta_key' 	=> 'room-photos',
							'meta_value'=> $target_file,
							'room_id' 	=> $room_id
						]);
						$html .= '<div class="mt-element-overlay">
                            <div class="mt-overlay-3 mt-overlay-3-icons" style="width: auto; height: 200px; margin: 5px">
                                <img src="'. $target_file .'" style="width: auto; height: 200px">
                                <div class="mt-overlay no-background">
                                    <ul class="mt-info">
                                        <li>
                                            <a href="javascript:;" data-id="'.$meta_id.'" data-room="'.$room_id.'" data-value="'.$target_file.'" class="btn default btn-outline tooltips set_thumbnail" data-original-title="Set as thumbnail">
                                                <i class="fa fa-image"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-id="'.$meta_id.'" data-room="'.$room_id.'" data-value="'.$target_file.'" class="btn default btn-outline tooltips delete_image" data-original-title="Remove this Image">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>';
				    }
				}

			}
			echo json_encode([
				'type' => 'success',
				'msg' => $msg,
				'title' => 'Files Uploaded!',
				'html' => $html
			]);
		}
	}

	protected function check_room_adding_data(){
		$post = $this->input->post();
		if (isset($post['home'])) {
			$this->session->set_flashdata('type', 'info');
			$post['home']['uid'] = $this->session->uid;
			$room_id = $this->room->add_room($post['home']);
			foreach ($post['meta'] as $key => $value) {
				if (!empty($value)) {
					$this->room->add_room_meta_data(array(
						'meta_key' => $key,
						'meta_value' => $value,
						'room_id' => $room_id
					));
				}
			}
			
			$images = self::reArrayFiles( $_FILES['files'] );
			$target_dir = "uploads/";
			// Config to resize image
			$config['image_library'] = 'gd2';
			$config['create_thumb'] = false;
			$config['maintain_ratio'] = TRUE;
			$config['width']         = 1024;
			$msg = 'Room Created!!! <br/>';
			
			foreach ($images as $image) {
				$target_file = $target_dir . $this->cleanString($image['name']);
				$uploadOk = 1;
				$imageFileType = pathinfo($image['name'],PATHINFO_EXTENSION);

				// Check if image file is a actual image or fake image
			    $check = @getimagesize($image["tmp_name"]);
			    if($check !== false) {
			        $uploadOk = 1;
			    } else {
			    	
			    	$msg .= "The file ". basename( $image["name"]). " is not an image.<br/>";
			        $uploadOk = 0;
			    }
				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
				    $msg .= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br/>";
				    $uploadOk = 0;
				}
				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
				    $msg .= "Sorry, the file ". basename( $image["name"]). " was not uploaded.<br/>";
	                
				// if everything is ok, try to upload file
				} else {

					// Upload image
				    if (move_uploaded_file($image["tmp_name"], $target_file)) {
				    	list($width_origin, $height_origin) = getimagesize(base_url(). $target_file);
				    	if ($width_origin > $config['width']) {
					    	$config['source_image'] = $target_file;
					    	$this->load->library('image_lib');
							$this->image_lib->initialize($config);
							$this->image_lib->resize();
							$this->image_lib->clear(); 
				    	}
						list($width, $height) = getimagesize(base_url(). $target_file);
						if ( ($height > $width * 0.54) && ($width > $height)) {
							$this->room->update_room_data(['id' => $room_id],['room_thumbnail' => $target_file]);
						}
				    	$this->room->add_room_meta_data([
							'meta_key' 	=> 'gallery',
							'meta_value'=> $target_file,
							'room_id' 	=> $room_id
						]);
		                $this->session->set_flashdata('msg', $msg);
				    }
				}
				$this->session->set_flashdata('msg', $msg);
			}
			
		}
	}

	private function reArrayFiles(&$file_post) {
	    $file_ary = array();
	    $file_count = count($file_post['name']);
	    $file_keys = array_keys($file_post);
	    for ($i=0; $i<$file_count; $i++) {
	        foreach ($file_keys as $key) {
	            $file_ary[$i][$key] = $file_post[$key][$i];
	        }
	    }
	    return $file_ary;
	}

}

/* End of file Glocal_admin.php */
/* Location: ./application/controllers/Glocal_admin.php */