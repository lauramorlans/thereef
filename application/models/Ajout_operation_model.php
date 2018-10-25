<?php
	class Ajout_operation_model extends CI_Model{

		public function __construct() {

			parent::__construct();

		}

		public function form_insert($data){
			$this->db->insert('opérations', $data);
		}

		
}

?>