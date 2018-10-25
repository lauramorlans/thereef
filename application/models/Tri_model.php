<?php
	/**
	* 
	*/
	Class Tri_model Extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function search_art($keyword)
    {
       return $this->db->select('art_nom, art_id')
       					->from('articles')
       					->like('art_nom',$keyword)
       					->get()
       					->result();

    }

public function search_op($keyword)
    {
       return $this->db->select('op_nom, op_id, op_img')
                ->from('opérations')
                ->like('op_nom',$keyword)
                ->get()
                ->result();

    }

    public function search_user($keyword)
    {
       return $this->db->select('user_nom, user_id')
                ->from('utilisateurs')
                ->like('user_nom',$keyword)
                ->get()
                ->result();

    }

}   

?>