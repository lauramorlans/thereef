<?php

class Articles extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Tri_model');
	}

	public function index() {

    	$this->load->model('Articles_model');
    	$recup = $this->Articles_model->recuparticles();
    	$data['tous']=$recup;
    	$this->load->view('Header_view');
		$this->load->view('Articles_view', $data);
		$this->load->view('Footer_view');
	}

	public function articlespage($page=0)
	{
		$this->load->model('Articles_model');

		$data['tous'] = $this->Articles_model->get_articles_par_page($page);

		$this->load->library('pagination');
		$config['base_url'] = 'http://localhost/thereef/Articles/articlespage';
		$config['total_rows'] = $this->Articles_model->nbarticle();
		$config['per_page'] = 4;
		$config['num_links'] = 2;
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();


		$this->load->view('Header_view');
		$this->load->view('Articles_view', $data);
		$this->load->view('Footer_view');

	}

	public function search($page=0)
    {

    $this->load->model('Articles_model');

		$data['tous'] = $this->Articles_model->get_articles_par_page($page);

		$this->load->library('pagination');
		$config['base_url'] = 'http://195.83.128.55/~mmi171db10/thereef/Articles/articlespage';
		$config['total_rows'] = $this->Articles_model->nbarticle();
		$config['per_page'] = 4;
		$config['num_links'] = 2;
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();

        $keyword    =   $this->input->post('keyword');
        $data['tous']    =   $this->Tri_model->search_art($keyword);
        $this->load->view('Header_view');
        $this->load->view('Articles_view',$data);
        $this->load->view('Footer_view');
    }
}