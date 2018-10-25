<?php

class Supp_utilisateurs extends CI_Controller
{
	function __construct(){
		parent::__construct();
	}

	public function supp_user($user_id=1) {
		$data['user_id']=$art_id;
		$this->db->delete('utilisateurs', array('user_id'=>$user_id));
		redirect ('Utilisateurs');
		 
	}
}