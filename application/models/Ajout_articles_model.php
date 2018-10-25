<?php
	class Ajout_articles_model extends CI_Model{

		public function __construct() {

			parent::__construct();

		}

		public function form_insert($data){
		// Inserting in Table(students) of Database(college)
		$this->db->insert('articles', $data);
		}

		
}

?>