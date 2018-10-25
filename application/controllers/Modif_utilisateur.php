<?php

class Modif_utilisateur extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Modif_utilisateur_model');
	}

	public function index(){
		 if ($this->session->userdata('user_rank') !== 'Admin') {
      		redirect('Connexion');

		}
		
	}
	public function modif_user($user_id=1) {
		$data['user_id']=$user_id;
		$data['tous']=$this->Modif_utilisateur_model->getuser($user_id);
		$this->load->view('Header_view');
		$this->load->view('Modif_utilisateur_view', $data);
		$this->load->view('Footer_view');
		
	}

	public function modifier(){

		$data = array(
			'user_nom' => $this->input->post('nom'),
			'user_prenom' => $this->input->post('desc'),
			'user_mdp' => $this->input->post('mdp'),
			'user_naissance' =>$this->input->post('naissance'),
			'user_nation' =>$this->input->post('nation'),
			'user_mail'=>$this->input->post('mail'),
			'user_rang'=>$this->input->post('rang')
		);

		$id = $this->input->post('id');

		$this->Modif_utilisateur_model->modifier($data, $id);

		

	}
}

?>