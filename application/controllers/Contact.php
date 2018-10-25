<?php

class Contact extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index() {
		$this->load->helper('security');


		$this->form_validation->set_rules('mail', '"Le mail"', 'trim|required|valid_email');
		$this->form_validation->set_rules('objet', '"La Naissance"', 'trim|required');
		$this->form_validation->set_rules('text', '"La Nation"', 'trim|required');

		if ($this->form_validation->run()==false) {
			$this->load->view('Header_view');
			$this->load->view('Contact_view');
			$this->load->view('Footer_view');
			}


		else{

			$mail = $this->input->post('mail');
			$objet = $this->input->post('objet');
			$text = $this->input->post('text');
			$data['tous']= array(
				'mail'=> $mail,
				'objet'=>$objet,
				'text'=> $text
			);
			$this->load->view('Header_view');
			$this->load->view('Message_view', $data);
			$this->load->view('Footer_view');
		}
	}
}


?>