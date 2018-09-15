<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class HomeController extends CI_Controller {

	public function __contruct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function registration_form_action()
	{
		$this->form_validation->set_rules('name', 'Name', 'required',array('required'=>'required'));
		$this->form_validation->set_rules('email', 'Email address', 'required|valid_email',array('required'=>'required'));
		$this->form_validation->set_rules('password', 'password', 'required',array('required'=>'required'));
		$this->form_validation->set_rules('gender', 'Gender', 'required',array('required'=>'required'));
		$this->form_validation->set_rules('date_of_birth', 'birth date', 'required',array('required'=>'required'));

		if($this->form_validation->run() == FALSE) {
			$this->load->view('home');
		} else {

			if($_FILES['avatar']['name']) {
				$fileName = time().'_'.str_replace(str_split(' ()\\/,:*?"<>|'),'', $_FILES['avatar']['name']);

				$img = array(
					'upload_path'   => FCPATH.'uploads/img/',
					'file_name'     => $fileName,
					'allowed_types' => 'gif|jpg|png|JPEG',
					'max_size'      => '1000',
					'max_width'     => '1920',
					'max_height'    => '1080'
				);

			 	$this->load->library('upload', $img);

			 	if ( !$this->upload->do_upload('avatar')) {
		            $error = array('error' => $this->upload->display_errors());
	    			$this->load->view('home', $error);
		        } else {
	                $finalImage = array('upload_data' => $this->upload->data());
	                $dir        = 'uploads/img/';
	           	 	$fullImage  = $dir.$fileName;
		        }
	    	} else {

    			$fullImage = "";
    		}

	        $post_data = array(
				'name'  => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'password' => password_hash($this->input->post('password'),PASSWORD_BCRYPT),
				'avatar' => $fullImage,
				'gender'=> $this->input->post('gender'),
				'date_of_birth'=> $this->input->post('date_of_birth'),
				'latitude'=> $this->input->post('latitude'),
				'longitude'=> $this->input->post('longitude'),
			);
			// print_r($post_data);
			$this->homeModel->insert_data($post_data);
				$this->session->set_flashdata('success','Registration completed successfully');
				redirect('homeController/index','location');
			
		}


	}

}
?>