<?php


/**
* 
*/
class Fiche_op extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('date');
		$this->load->model('Fiche_op_model');

	}

	function index(){
		redirect ('Fiche_op/fiche_op/'.$op_id);
	
}
 
public function fiche_op($op_id){

		$this->load->model('Operations_model');
		$recup = $this->Fiche_op_model->recupop($op_id);
    	$data['tous']=$recup;
    	$operation_id = $data['tous'][0]->op_id;



		$this->form_validation->set_rules('don', '"Don"', 'trim|required');

		if ($this->form_validation->run()==false) {
			$this->load->view('Header_view', $data);
			$this->load->view('Fiche_op_view', $data);
			$this->load->view('Footer_view', $data);
		}
		elseif (!$this->session->userdata('user_id')) {
			redirect ('Connexion');
		}
		else{
			$date = date(DATE_RFC822, time());
			$data = array(
				'don_montant' => $this->input->post('don'),
				'don_date' => $date,
				'user_id_' => $this->session->userdata('user_id'),
				'op_id_' => $operation_id

			);
			$this->Fiche_op_model->form_insert($data);

			$result['montant'] = $this->input->post('don');

			$this->load->view('Header_view');
			$this->load->view('Message_don_view', $result);
			$this->load->view('Footer_view');
		}
	}
}
?>