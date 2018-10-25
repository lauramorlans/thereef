<?php

class Accueil extends CI_Controller
{
	public function index()
	{
		$this->load->model('Accueil_model');
		$this->load->model('Fiche_op_model');
    	$data['op1']=$this->Accueil_model->getop(1);
    	$data['op2']=$this->Accueil_model->getop(2);
    	$data['op3']=$this->Accueil_model->getop(3);
    	$data['op4']=$this->Accueil_model->getop(4);
		$data['sum']=$this->Fiche_op_model->recupsum(1);
		$data['art']=$this->Accueil_model->getart(1);
		$data['nbuser']=$this->Accueil_model->nbuser();
		$this->load->view('Header_view');
		$this->load->view('Accueil_view', $data);
		$this->load->view('Footer_view');
	}


}