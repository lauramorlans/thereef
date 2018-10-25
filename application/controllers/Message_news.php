<?php

/**
* 
*/
class Message_news extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index(){

		$this->load->view('Header_view');
		$this->load->view('Message_news_view');
		$this->load->view('Footer_view');
	}
}
?>