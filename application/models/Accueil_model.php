<?php

class Accueil_model extends CI_Model
{
	public function __construct() {

			parent::__construct();

		}

	public function recupsumtot(){
			$this->db->select_sum('don_montant');
			$query = $this->db->get('don');
			return $query->result();
		
	}

	public function getop($op_id){

		$this->db->where('op_id' ,$op_id);
		$query = $this->db->get('opérations');
		return $query->result();
	}

	public function getart($art_id){
		$this->db->where('art_id', $art_id);
		$query = $this->db->get('articles');
		return $query->result();
	}

	public function nbuser(){
		return $this->db->count_all('utilisateurs');
	}

	public function getdon($user_id){
		$this->db->where('user_id_' ,$user_id);
		$this->db->join('opérations', 'op_id = op_id_');
		$query=$this->db->get('don', 'opérations');
		return $query->result();
	}


	}
	?>


