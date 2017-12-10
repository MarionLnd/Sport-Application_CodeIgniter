<?php

class Equipe extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Model_membres');
		$this->load->model('Model_equipe');

		// S'il n'y a pas de $_SESSION['online']
		if(!$this->session->userdata('online')){

			redirect('Accueil/index');

		}

	}


	public function index(){

		$nomEquipe = $this->session->userdata('nomEquipe');

		$this->accueil($nomEquipe);

	}


	public function accueil($nomEquipe){

		//$nomEquipe = $this->session->userdata('nomEquipe');

		echo $nomEquipe;

		$sport['Sport'] = $this->Model_equipe->get_sport($nomEquipe);

		print_r($sport['Sport']);

		print_r($sport);

		echo "Sport".$sport['Sport'];

		//$sport = $this->session->set_userdata('sport', $spt);

		$this->load->view('templates/header');

		//$login = $this->session->userdata('login');

		//$sport = $this->session->userdata('sport');

		$this->load->view('equipe/equipe_accueil', array('login' => $login, 'sport' => $sport, 'nomEquipe' => $nomEquipe));

		$this->load->view('templates/footer_equipe');

	}

	public function equipe(){

		$sport = $this->session->userdata('sport');

		$nomTeam=$_SESSION['nomEquipe'];

		$data = $this->Model_equipe->get_info_equipe($nomTeam);

		$logo = $data['Logo'];

		$ville = $data['Ville'];

		$mixite = $data['Mixite'];

		$description = $data['Description'];

		$loginAdmin = $data['LoginAdmin'];

		$this->load->view('templates/header');

		$this->load->view('equipe/equipe_profil', array('sport' => $sport, 'nomEquipe' => $_SESSION['nomEquipe'], 'logo' => $logo, 'ville' => $ville, 'mixite' => $mixite, 'description' => $description, 'loginAdmin' => $loginAdmin ) );

		$this->load->view('templates/footer_equipe');
	}


	public function quitter_equipe(){


	}

	public function supprimer_equipe(){

		$statut = $this->Model_membres->get_statut($_SESSION['login']);

		$nomEquipe = $statut['nomEquipe'];

		$admin = $statut['admin'];

		$entraineur = $statut['entraineur'];

		if($admin == 1){

			$this->load->view('templates/header');

			$this->load->view('equipe/equipe_profil', array('sport' => $sport, 'nomEquipe' => $_SESSION['nomEquipe']) );

			$this->load->view('templates/footer_equipe');

		} else {

			$msg_erreur = "Vous ne pouvez pas supprimer cette équipe : vous n'êtes pas l'administrateur.";

			$this->load->view('templates/header');

			$this->load->view('equipe/equipe_profil', array('sport' => $sport, 'nomEquipe' => $_SESSION['nomEquipe'], 'logo' => $logo, 'ville' => $ville, 'mixite' => $mixite, 'description' => $description, 'loginAdmin' => $loginAdmin, 'msg_erreur' => $msg_erreur ) );

			$this->load->view('templates/footer_equipe');

		}


	}

	public function calendrier(){

		$prefs = array(
        'start_day'    => 'sunday',
        'month_type'   => 'long',
        'day_type'     => 'short'
		);

		$this->load->library('calendar', $prefs);

		$sport = $this->session->userdata('sport');

		// Tests
		/*$data = array(
		        3  => 'http://example.com/news/article/2006/06/03/',
		        7  => 'http://example.com/news/article/2006/06/07/',
		        13 => 'http://example.com/news/article/2006/06/13/',
		        26 => 'http://example.com/news/article/2006/06/26/'
		);*/

		$this->load->view('templates/header');

		$this->load->view('equipe/equipe_calendrier', array('sport' => $sport), array('data' => $data) );

		$this->load->view('templates/footer_equipe');

	}

	public function liste_membre(){

		$sport = $this->session->userdata('sport');

		$membres = $this->Model_equipe->get_liste_membres($_SESSION['nomEquipe']);

		$this->load->view('templates/header');

		$this->load->view('equipe/equipe_liste_membre', array('sport' => $sport, 'membres' => $membres) );

		$this->load->view('templates/footer_equipe');

	}

	public function evenements(){

		$sport = $this->session->userdata('sport');

		$this->load->view('templates/header');

		$this->load->view('equipe/equipe_event', array('sport' => $sport) );

		$this->load->view('templates/footer_equipe');

	}

	public function ajouter_evenement(){

		$statut = $this->Model_membres->get_statut($_SESSION['login']);

		$nomEquipe = $statut['nomEquipe'];

		$admin = $statut['admin'];

		$entraineur = $statut['entraineur'];

		if($entraineur == 1){





		}
	}

	public function modifier_evenement(){

		$statut = $this->Model_membres->get_statut($_SESSION['login']);

		$nomEquipe = $statut['nomEquipe'];

		$admin = $statut['admin'];

		$entraineur = $statut['entraineur'];

		if($entraineur == 1){





		}

	}

	public function supprimer_evenement(){

		$statut = $this->Model_membres->get_statut($_SESSION['login']);

		$nomEquipe = $statut['nomEquipe'];

		$admin = $statut['admin'];

		$entraineur = $statut['entraineur'];

		if($entraineur == 1){





		}

	}


}

?>
