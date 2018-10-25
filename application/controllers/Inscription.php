<?php

class Inscription extends CI_Controller
{


		function __construct() {

			parent::__construct();
			$this->load->model('Inscription_model');

		}

	public function index()
	{
		$this->load->helper('security');
		//On vérifie que les champs sont remplis de la bonne manière
		$this->form_validation->set_rules('nom', '"Le Nom"', 'trim|required');
		$this->form_validation->set_rules('prenom', '"Le prénom"', 'trim|required');
		$this->form_validation->set_rules('mdp', '"Le mdp"', 'trim|required');
		$this->form_validation->set_rules('naissance', '"La Naissance"', 'trim|required');
		$this->form_validation->set_rules('nation', '"La Nation"', 'trim|required');
		$this->form_validation->set_rules('mail', '"Le mail"', 'trim|required|valid_email');



		if ($this->form_validation->run()==false) {
			$this->load->view('Header_view');
			$this->load->view('Inscription_view');
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
					'user_rang' => 'Donateur'
				);
				//On evnoie cette variable dans le model
				$this->Inscription_model->form_insert($data);

				$nom = $this->input->post('nom');
				$prenom = $this->input->post('prenom');

				$result['nom'] = $nom;
				$result['prenom'] = $prenom;
				
				$this->load->view('Header_view');
				$this->load->view('Message_inscription_view', $result);
				$this->load->view('Footer_view', $result);


				
			}
	}

}