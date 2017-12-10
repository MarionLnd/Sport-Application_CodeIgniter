<?php

class Connexion extends CI_Controller{
	
	public function __construct(){

		parent::__construct(); /*OBLIGATOIRE : EQUIVALEUR SUPER() EN JAVA*/
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Model_membres');

	}

	public function index(){
		
		$this->verification_connexion();
		
	}

	public function verification_connexion(){

		$this->form_validation->set_rules('login', '', 'required|trim|min_length[1]|max_length[50]');

		$this->form_validation->set_rules('password', '', 'required|trim|min_length[1]|max_length[50]');

		if($this->form_validation->run() === FALSE){

			$this->load->view('templates/header');

			$this->load->view('user/user_connexion');

		} else {

			$login = $this->input->post('login');

			$password = $this->input->post('password');

			$password = sha1($password);

			$pwdBD = $this->Model_membres->verification_login_pwd($login, $password);

			if($pwdBD == $password){

				$id = $this->Model_membres->getId($login);

				// Definition des SESSIONS
				$this->session->set_userdata('online', true); // $_SESSION['online'] = true    -> User connecté

				$this->session->set_userdata('login', $login); // $_SESSION['login'] = $login    -> Stocke le login du l'user connecté

				$this->session->set_userdata('id', $id); // $_SESSION['id'] = $id    -> Stocke l'id du l'user connecté

				$this->load->view('templates/header');

				$this->load->view('membre/membre_accueil',array('login' => $login));

				$this->load->view('templates/footer_membre');

			}

			if ($pwdBD == -2) {

				$msg = "Le mot de passe est incorrect";

				$msg_erreur = array('msg_erreur' => $msg);

				$this->load->view('templates/header');

				$this->load->view('user/user_connexion', $msg_erreur);

			}

			if ($pwdBD == -3) {

				$msg = "Le login entré n'existe pas";

				$msg_erreur = array('msg_erreur' => $msg);

				$this->load->view('templates/header');

				$this->load->view('user/user_connexion', $msg_erreur);

			}

		}

	}

}


?>