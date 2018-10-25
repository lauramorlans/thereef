<?php

class Utilisateurs extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Tri_model');
	}

	public function index() {

		 if ($this->session->userdata('user_rank') !== 'Admin') {
      		redirect('Connexion');
    	}
    	$this->load->model('Utilisateurs_model');
    	$recup = $this->Utilisateurs_model->recupuser();
    	$data['tous']=$recup;
		$this->load->view('Header_view');
		$this->load->view('Utilisateurs_view', $data);
		$this->load->view('Footer_view', $data);
	}

	public function search($page=0)
    {

    $this->load->model('Utilisateurs_model');

        $keyword    =   $this->input->post('keyword');
        $data['tous']    =   $this->Tri_model->search_user($keyword);
        $this->load->view('Header_view');
        $this->load->view('Utilisateurs_view', $data);
        $this->load->view('Footer_view');
    }
}