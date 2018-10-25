<?php

class Fiche_art_model extends CI_Model{

	public function __construct() {

		parent::__construct();

	}

	public function recupart($art_id){
		$query=$this->db->get_where('articles', array('art_id'=> $art_id));
		return $query->result();
	}
	
}

?>