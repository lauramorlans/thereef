<?php
	class Utilisateurs_model extends CI_Model{

		public function __construct() {

			parent::__construct();

		}

		public function recupuser(){
			$query = $this->db->get('utilisateurs');
			return $query->result();
		}

	}
	?>