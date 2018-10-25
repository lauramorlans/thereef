<?php
 
class Connexion extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('connexion_model');

    }
    
    public function index(){
      //On récupère les infos du formulaire
        $email=$this->input->post('email');
        $mdp=$this->input->post('mdp');
        
        //On vérifie que les champs sont remplis de la bonne manière
        $this->form_validation->set_rules('email', '"Identifiant"', 'trim|required|valid_email');
        $this->form_validation->set_rules('mdp', '"Mot de passe"', 'trim|required');

        //On met le résultat de la requête SQL dans une variable
        $result = $this->connexion_model->connexion($email,$mdp);


        //Si les champs sont mal remplis on retourne sur le formulaire
        if ($this->form_validation->run() == false)
        {
        $this->load->view('Header_view');
        $this->load->view('Connexion_view');
        $this->load->view('Footer_view');
        }

        //Si la requête SQL n'a rien renvoyé on redirige sur le formulaire et on crée une donnée flash 'noconnect'
        elseif($this->form_validation->run() == true && empty($result))
        {
            $this->session->set_flashdata('noconnect', 'Aucun compte ne correspond à vos identifiants ');
            redirect('Connexion');
        }

        //Ceci est censé crée une donnée utilisateur user_id avec pour valeur le contenu de la première cellule de $result
        else{
          $this->session->set_userdata('user_id', $result[0]->user_id);
          $this->session->set_userdata('user_name', $result[0]->user_nom);
          $this->session->set_userdata('user_firstname', $result[0]->user_prenom);
          $this->session->set_userdata('user_rank', $result[0]->user_rang);
          redirect ('Account');    
        }
    }
        
}
