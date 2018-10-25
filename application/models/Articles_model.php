<?php
	class Articles_model extends CI_Model{

		public function __construct() {

			parent::__construct();

		}

		public function recuparticles(){
			$query = $this->db->get('articles');
			return $query->result();
		}

		public function get_articles_par_page($page)
	{
		$query = $this->db->get('articles', 4, $page);
		return $query->result();
	}

	public function nbarticle()
	{
		return $this->db->count_all("articles");
	}

	}
	?>