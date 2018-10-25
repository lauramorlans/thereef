<?php

class Modif_articles extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Modif_articles_model');
	}

	public function index(){
		 if ($this->session->userdata('user_rank') !== 'Admin') {
      		redirect('Connexion');

		}
		
	}
	public function modif_articles($art_id=1) {
		$data['art_id']=$art_id;
		$data['tous']=$this->Modif_articles_model->getart($art_id);
		$this->load->view('Header_view');
		$this->load->view('Modif_articles_view', $data);
		$this->load->view('Footer_view');
		
	}

	public function modifier(){

		$data = array(
			'art_nom' => $this->input->post('nom'),
			'art_auteur' => $this->input->post('auteur'),
			'art_desc' => $this->input->post('desc'),
			'art_text' => $this->input->post('text'),
		);

		$id = $this->input->post('id');

		$this->Modif_articles_model->modifier($data, $id);

		

	}
}

