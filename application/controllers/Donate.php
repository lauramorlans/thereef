<?php

class Donate extends CI_Controller
{
	function __construct(){
		parent::__construct();
	}

	public function index() {

		if (!$this->session->userdata('user_id')) {
			redirect ('Connexion');
		}

		$this->load->model('Fiche_op_model');

		$this->load->model('Operations_model');
		$recup = $this->Operations_model->recupop();
		$data['tous']=$recup;


		$this->load->helper('security');
		$this->form_validation->set_rules('don', '"Don"', 'trim|required');


		if($this->form_validation->run()==false) {
			$this->load->view('Header_view');
			$this->load->view('Donate_view', $data);
			$this->load->view('Footer_view');
		}

		else{
			$date = date(DATE_RFC822, time());
			$data = array(
				'don_montant' => $this->input->post('don'),
				'don_date' => $date,
				'user_id_' => $this->session->userdata('user_id'),
				'op_id_' => $this->input->post('op')

			);
			$this->Fiche_op_model->form_insert($data);

			$result['montant']= $this->input->post('don');

			$this->load->view('Header_view', $result);
			$this->load->view('Message_don_view', $result);
			$this->load->view('Footer_view', $result);
			
		}



	}
}