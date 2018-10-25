<?php

class Admin extends CI_Controller
{
	function __construct(){
		parent::__construct();
	}

	public function index() {

		 if ($this->session->userdata('user_rank') !== 'Admin') {
      		redirect('Connexion');
    	}
    	$this->load->view('Header_view');
    	$this->load->view('Admin_view');
		$this->load->view('Footer_view');
	}
}