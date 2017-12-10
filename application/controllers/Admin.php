<?php

class Admin extends CI_Controller{
	
	public function __construct(){

		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Model_membres');

	}

	public function index(){

		$this->load->view('templates/header');

		$this->load->view('admin/accueil_equipe_admin');

		$this->load->view('templates/footer_membre');
		
	}


	/* Fonction vérifiant si un membre est l'admin de l'équipe selectionné */
	
	public function verification_admin(){

	}

	public function ajouter_membre(){

	}

	public function designer_entraineur(){

	}

	public function supprimer_membre(){

	}


}

?>