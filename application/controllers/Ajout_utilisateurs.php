<?php

class Ajout_utilisateurs extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Ajout_utilisateurs_model');
	}

	public function index() {

		 if ($this->session->userdata('user_rank') !== 'Admin') {
      		redirect('Connexion');
    	}


		$this->load->helper('security');
		//On vérifie que les champs sont remplis de la bonne manière
		$this->form_validation->set_rules('nom', '"Le Nom"', 'trim|required');
		$this->form_validation->set_rules('prenom', '"Le prénom"', 'trim|required');
		$this->form_validation->set_rules('mdp', '"Le mdp"', 'trim|required');
		$this->form_validation->set_rules('naissance', '"La Naissance"', 'trim|required');
		$this->form_validation->set_rules('nation', '"La Nation"', 'trim|required');
		$this->form_validation->set_rules('mail', '"Le mail"', 'trim|required|valid_email');
		$this->form_validation->set_rules('rang', '"Le rang"', 'trim|required');



		if ($this->form_validation->run()==false) {
			$this->load->view('Header_view');
			$this->load->view('Ajout_utilisateurs_view');
			$this->load->view('Footer_view');

			}

			//On place toutes les données dans un tableau associatif dans une variable
			else{
				$data = array(
					'user_nom' => $this->input->post('nom'),
					'user_prenom' => $this->input->post('prenom'),
					'user_mdp' => $this->input->post('mdp'),
					'user_naissance' => $this->input->post('naissance'),
					'user_nation' => $this->input->post('nation'),
					'user_mail' => $this->input->post('mail'),
					'user_rang' => $this->input->post('rang')
				);
				//On evnoie cette variable dans le model
				$this->Ajout_utilisateurs_model->form_insert($data);

				redirect('Utilisateurs');
			}
	}
}