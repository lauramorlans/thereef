<?php

class Operations extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Tri_model');
	}

	public function index() {

    	redirect('Operations/operationspage');
		
	}

	public function operationspage($page=0)
	{
		$this->load->model('Operations_model');

		$data['tous'] = $this->Operations_model->get_operations_par_page($page);

		$this->load->library('pagination');
		$config['base_url'] = 'http://195.83.128.55/~mmi171db10/thereef/Operations/operationspage';
		$config['total_rows'] = $this->Operations_model->nboperation();
		$config['per_page'] = 4;
		$config['num_links'] = 2;
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();


		$this->load->view('Header_view', $data);
		$this->load->view('Operations_view', $data);
		$this->load->view('Footer_view', $data);

	}

	public function search($page=0)
    {

    $this->load->model('Operations_model');

		$data['tous'] = $this->Operations_model->get_operations_par_page($page);

		$this->load->library('pagination');
		$config['base_url'] = 'http://localhost/thereef/Operations/operationspage';
		$config['total_rows'] = $this->Operations_model->nboperation();
		$config['per_page'] = 4;
		$config['num_links'] = 2;
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();

        $keyword    =   $this->input->post('keyword');
        $data['tous']    =   $this->Tri_model->search_op($keyword);
        $this->load->view('Header_view');
        $this->load->view('Operations_view',$data);
        $this->load->view('Footer_view');
    }

    public function tri_actif($page=0)
    {
    	 $this->load->model('Operations_model');
    	 $this->load->library('pagination');
		$config['base_url'] = 'http://localhost/thereef/Operations/operationspage';
		$config['total_rows'] = $this->Operations_model->nboperation();
		$config['per_page'] = 4;
		$config['num_links'] = 2;
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();


		$data['tous'] = $this->Operations_model->get_op_actif_par_page($page);
		$this->load->view('Header_view');
        $this->load->view('Operations_view',$data);
         $this->load->view('Footer_view');
    }

    public function tri_fin($page=0)
    {
    	$this->load->model('Operations_model');

		$data['tous'] = $this->Operations_model->get_op_fin_par_page($page);

		$this->load->library('pagination');
		$config['base_url'] = 'http://localhost/thereef/Operations/operationspage';
		$config['total_rows'] = $this->Operations_model->nboperation();
		$config['per_page'] = 4;
		$config['num_links'] = 2;
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();

		$data['tous'] = $this->Operations_model->get_op_fin_par_page($page);
		$this->load->view('Header_view');
        $this->load->view('Operations_view',$data);
        $this->load->view('Footer_view');
    }
}