<?php

class Accueil extends CI_Controller{

	public function __construct(){

		parent::__construct();

	}

	public function index(){

		$this->load->view('templates/header_accueil');

		$this->load->view('user/user_accueil');

		$this->load->view('templates/footer');

	}

	public function rapport(){

		$this->load->view('rapport');

		$this->load->view('templates/footer_rapport');
	}
}

?>