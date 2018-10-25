<?php

	class Inscription_model extends CI_Model{

		public function __construct() {

			parent::__construct();

		}

		public function form_insert($data){
		// Inserting in Table(students) of Database(college)
		$this->db->insert('utilisateurs', $data);
		}
}

?>