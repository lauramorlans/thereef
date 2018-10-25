<?php
class Operations_model extends CI_Model{

	public function __construct() {

		parent::__construct();

	}

	public function recupop(){
		$query = $this->db->get('opérations');
		return $query->result();
	}

	public function get_operations_par_page($page)
	{
		$query = $this->db->get('opérations', 4, $page);
		return $query->result();
	}

	public function nboperation()
	{
		return $this->db->count_all("opérations");
	}

	public function get_op_actif_par_page($page){
		$query = $this->db->get_where('opérations', array('op_etat' => 'In progress'));
		return $query->result();
	}

	public function get_op_fin_par_page($page){
		$query = $this->db->get_where('opérations', array('op_etat' => 'Finished'));
		return $query->result();
	}


}
	?>