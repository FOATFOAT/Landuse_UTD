<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class receive extends CI_Controller {


    public function receive_case()
	{
		$this->load->view('header');
		// $this->load->view('my_css_inside');
		$this->load->view('my_css_case');
		// $this->load->view('navbar_view');
		$this->load->view('receive_case_view');
		// $this->load->view('navbar_inside_view');
		// $this->load->view('footer');
		$this->load->view('my_js_case');
		// $this->load->view('my_js_inside');
		
	}

    public function data_receive_case()
	{
		
		$firstname = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');
		$phone_user = $this->input->post('phone_user');
		$google_maps = $this->input->post('google_maps');
		$inputTextarea = $this->input->post('inputTextarea');
		$checkedValues = $this->input->post('checkedValues');

		$response = array(
			'firstname' => $firstname,
			'lastname' => $lastname,
			'phone_user' => $phone_user,
			'google_maps' => $google_maps,
			'inputTextarea' => $inputTextarea,
			'checkedValues' => $checkedValues
		);
		
		echo "<pre>";
		print_r($response);
		echo "</pre>";
		
	}


}
