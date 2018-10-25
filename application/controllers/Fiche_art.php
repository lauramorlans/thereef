<?php


/**
* 
*/
class Fiche_art extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('date');
		$this->load->model('Fiche_art_model');
	}

	function index(){
		redirect ('Fiche_art/fiche_art/' . $art_id);
	}

	public function fiche_art($art_id){

		$this->load->model('Articles_model');
		$recup = $this->Fiche_art_model->recupart($art_id);
    	$data['tous']=$recup;
    	$article_id = $data['tous'][0]->art_id;
    	$this->load->view('Header_view', $data);
    	$this->load->view('Fiche_art_view', $data);
    	$this->load->view('Footer_view', $data);

	}
}
?>