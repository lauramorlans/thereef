<?php

class Modif_operation extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Modif_operation_model');
	}

	public function index(){
		 if ($this->session->userdata('user_rank') !== 'Admin') {
      		redirect('Connexion');

		}
		
	}
	public function modif_operation($op_id=1) {
		$data['op_id']=$op_id;
		$data['tous']=$this->Modif_operation_model->getop($op_id);
		$this->load->view('Header_view');
		$this->load->view('Modif_operation_view', $data);
		$this->load->view('Footer_view');
		
	}

	public function modifier(){

		$data = array(
			'op_nom' => $this->input->post('nom'),
			'op_desc' => $this->input->post('desc'),
			'op_obj' => $this->input->post('obj'),
		);

		$id = $this->input->post('id');

		$this->Modif_operation_model->modifier($data, $id);

		

	}
}

?>