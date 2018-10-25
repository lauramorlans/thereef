<?php

class Manifestations extends CI_Controller {

	public function index()
	{
		$this->load->view('Header_view');
		$this->load->model('Manifestations_model');
		$recup=$this->Manifestations_model->touteslesmanifs();
		$data['tous']=$recup;
		$this->load->view('Manifestations_view',$data);
		$this->load->view('Footer_view');
	}

	public function parpage($page=0)
	{
		$this->load->view('Header_view');
		$this->load->model('Manifestations_model');
		$data['tous']=$this->Manifestations_model->get_manif_par_page($page);

		$this->load->library('pagination');

		$config['base_url'] =  base_url("Manifestations/parpage");
		$config['total_rows'] =$this->Manifestations_model->nbmanif();
		$config['per_page'] = 3;
		$config['num_links'] = 2;
		$config['last_link'] = FALSE;
		$config['first_link'] = FALSE;

		$this->pagination->initialize($config);

		$data ['pagination'] = $this->pagination->create_links();

		//ENCRYPTAGE
		$this->load->library('encryption');
		$message='This is a plain-text message!';
		$ciphertext = $this->encryption->encrypt($message);
		$data['cryptation'] = $ciphertext;
		$data['decryptation'] = $this->encryption->decrypt($ciphertext);
		//FIN ENCRYPTAGE

		$this->load->view('Manifestations_view',$data);
		$this->load->view('Footer_view');
	}

	public function pdf(){
		$this->load->model('Manifestations_model');
		$data['tous'] = $this->Manifestations_model->touteslesmanifs();
		$this->load->view("Manifpdf_view", $data);
	}

	public function DataGraph($manif=1){
		$this->load->model("Manifestations_model");
		$data["mesinfos"]=$this->Manifestations_model->infos($manif);
		$this->load->view("graph_view", $data);
	}

	public function legraph($manif=1){
		$data['manif']=$manif;
		$this->load->view("legraph_view", $data);
	}

	public function mail(){

		$this->load->library('email');
		$this->email->from('lauramb.morlans@gmail.com', 'Laura');
		$this->email->to('lauramb.morlans@gmail.com');
		$this->email->cc('xmaki@hotmail.fr');

		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');

		$data['sendmail']=$this->email->send();
		$this->load->view('Mail_view',$data);
	}


}
