<?php

class Supp_articles extends CI_Controller
{
	function __construct(){
		parent::__construct();
	}

	public function supp_articles($art_id=1) {
		$data['art_id']=$art_id;
		$this->db->delete('articles', array('art_id'=>$art_id));
		redirect ('Articles');
		 
	}
}