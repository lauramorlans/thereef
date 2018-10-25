<?php

class Modif_utilisateur_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();	
	}

	public function getuser($user_id){
		return $this->db->get_where('utilisateurs', array('user_id' => $user_id))
						->result();
	}

	public function modifier($data, $id){
		$this->db->where('user_id', $id);
		$this->db->update('utilisateurs', $data);
		redirect ('Accueil');


	}
}

?>