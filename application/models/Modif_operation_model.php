<?php

class Modif_operation_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();	
	}

	public function getop($op_id){
		return $this->db->get_where('opérations', array('op_id' => $op_id))
						->result();
	}

	public function modifier($data, $id){
		$this->db->where('op_id', $id);
		$this->db->update('opérations', $data);
		redirect ('Accueil');


	}
}

?>