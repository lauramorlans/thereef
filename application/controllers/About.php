<?php

class About extends CI_Controller
{
	public function index()
	{
		$this->load->view('Header_view');
		$this->load->view('About_view');
		$this->load->view('Footer_view');
	}
}