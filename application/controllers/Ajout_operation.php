<?php

class Ajout_operation extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Ajout_operation_model');
	}

	public function index() {

		 if ($this->session->userdata('user_rank') !== 'Admin') {
      		redirect('Connexion');
    	}


		$this->load->helper('security');
		//On vérifie que les champs sont remplis de la bonne manière
		$this->form_validation->set_rules('nom', '"Le Nom"', 'trim|required');
		$this->form_validation->set_rules('desc', '"La description"', 'trim|required');
		$this->form_validation->set_rules('obj', '"L\'objectif"', 'trim|required|numeric');
		$this->form_validation->set_rules('img', '"L\'image"', 'trim|required');
		$this->form_validation->set_rules('datefin', '"La date de fin"', 'trim|required');



		if ($this->form_validation->run()==false) {
			$this->load->view('Header_view');
			$this->load->view('Ajout_operation_view');
			$this->load->view('Footer_view');

			}

			//On place toutes les données dans un tableau associatif dans une variable
			else{
				$data = array(
					'op_nom' => $this->input->post('nom'),
					'op_desc' => $this->input->post('desc'),
					'op_obj' => $this->input->post('obj'),
					'op_img' => $this->input->post('img'),
					'op_datefin' => $this->input->post('datefin'),
					'op_etat' => $this->input->post('op_etat')
					
				);
				//On evnoie cette variable dans le model
				$this->Ajout_operation_model->form_insert($data);

				redirect('Operations');
			}
	}
}