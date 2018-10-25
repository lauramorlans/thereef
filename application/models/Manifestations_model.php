<?php 

class Manifestations_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function touteslesmanifs() {
		$this->db->select('*', 'salle_nom')->from('manifestation')->join('salles','_salle_code = salle_code');
		$query= $this->db->get();
		return $query->result();
	}

	public function get_manif_par_page($page){
		$this->db->select('*', 'salle_nom')->from('manifestation')->join('salles','_salle_code = salle_code')->limit(3,$page);
		$query= $this->db->get();
		return $query->result();
	}

	public function nbmanif(){
		return $this->db->count_all("manifestation");
	}

	public function infos($manif){
		$qq=$this->db->query(" SELECT abo_ville, SUM( abo_qte_place_reserv ) AS totalresaabo , manif_intitule FROM manifestation INNER JOIN reservations ON manifestation.manif_id= reservations._manif_id INNER JOIN abonnes ON abonnes.abo_id=reservations._abo_id WHERE manif_id=$manif GROUP BY abo_ville ");
		return $qq->result();
	}


}

?>