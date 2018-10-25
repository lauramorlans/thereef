<?php

class Supp_op extends CI_Controller
{
	function __construct(){
		parent::__construct();
	}

	public function supp_operations($op_id=1) {
		$data['op_id']=$op_id;
		$this->db->delete('opérations', array('op_id'=>$op_id));
		redirect ('Operations');
		 
	}
}