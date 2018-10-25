<?php 

class Salles_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function touteslessalles() {
		$query=$this->db->get('salles');
		return $query->result();
	}
}

?>