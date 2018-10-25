<?php

class Ajout_articles extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Ajout_articles_model');
	}

	public function index() {

		 if ($this->session->userdata('user_rank') !== 'Admin') {
      		redirect('Connexion');
    	}


		$this->load->helper('security');
		//On vérifie que les champs sont remplis de la bonne manière
		$this->form_validation->set_rules('nom', '"Le Nom"', 'trim|required');
		$this->form_validation->set_rules('desc', '"La description"', 'trim|required');
		$this->form_validation->set_rules('img', '"Limage"', 'trim|required');



		if ($this->form_validation->run()==false) {
			$this->load->view('Header_view');
			$this->load->view('Ajout_articles_view');
			$this->load->view('Footer_view');

			}

			//On place toutes les données dans un tableau associatif dans une variable
			else{
				$date = date(DATE_RFC822, time());
				$data = array(
					'art_auteur' =>$_SESSION['user_firstname'],
					'art_nom' => $this->input->post('nom'),
					'art_desc' => $this->input->post('desc'),
					'art_text' => $this->input->post('text'),
					'art_img' => $this->input->post('img'),
					'art_date' => $date,
					'user_id_' => $_SESSION['user_id']
					
				);
				//On evnoie cette variable dans le model
				$this->Ajout_articles_model->form_insert($data);

				redirect('Articles/articlespage');
			}
	}
}