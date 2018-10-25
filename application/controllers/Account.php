<?php

class Account extends CI_Controller
{
	public function index()
	{
		if (!$this->session->userdata('user_id')){
			redirect ('Connexion');
		}
		else{
		$this->load->model('Accueil_model');
		$this->load->model('Fiche_op_model');
    	$data['op1']=$this->Accueil_model->getop(1);
    	$data['op2']=$this->Accueil_model->getop(2);
    	$data['op3']=$this->Accueil_model->getop(3);
    	$data['op4']=$this->Accueil_model->getop(4);
		$data['sum']=$this->Fiche_op_model->recupsum(1);
		$data['art1']=$this->Accueil_model->getart(1);
		$data['art2']=$this->Accueil_model->getart(2);
		$data['art3']=$this->Accueil_model->getart(3);
		$data['nbuser']=$this->Accueil_model->nbuser();







		$user_id=$_SESSION['user_id'];
		$data['don']=$this->Accueil_model->getdon($user_id);



		$this->load->view('Header_view');
		$this->load->view('Account_view', $data);
		$this->load->view('Footer_view');
		}
	}
}

?>