<?php
 
class Connexion_model extends CI_Model
{

    	function __construct() {
    		parent::__construct();
    	}
        
        public function connexion($email,$mdp) {
            
            return $this->db->select('user_id, user_nom, user_prenom, user_mdp, user_naissance, user_nation, user_mail, user_rang')
                        ->from('utilisateurs')
                        ->where('user_mail', $email)
                        ->where('user_mdp', $mdp)
                        ->get()
                        ->result();
        }

        
}
 
?>