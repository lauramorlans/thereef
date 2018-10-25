<?php
/**
* 
*/
class Modif_articles_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();	
	}

	public function getart($art_id){
		return $this->db->get_where('articles', array('art_id' => $art_id))
						->result();
	}

	public function modifier($data, $id){
		$this->db->where('art_id', $id);
		$this->db->update('articles', $data);
		redirect ('Accueil');


	}
}

?>