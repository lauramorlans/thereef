<?php

class Fiche_op_model extends CI_Model{

	public function __construct() {

		parent::__construct();

	}

	public function form_insert($data){
		// Inserting in Table(students) of Database(college)
		$this->db->insert('don', $data);
	}

	public function recupop($op_id){
		$query=$this->db->get_where('opérations', array('op_id'=> $op_id));
		return $query->result();
	}
	

	public function recupsum($op_id){
		$this->db->select_sum('don_montant');
		$this->db->where('op_id_', $op_id);
		$query = $this->db->get('don');
		return $query->result();
	}
}

?>