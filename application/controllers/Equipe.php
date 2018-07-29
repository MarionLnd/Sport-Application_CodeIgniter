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

		$login = $this->session->userdata('login');

		$sport['Sport'] = $this->Model_equipe->get_sport($nomEquipe);

		$nomTeam = $this->session->set_userdata('nomEquipe', $nomEquipe);

		$spt = $sport['Sport']->Sport;

		$idMembre = $this->Model_membres->get_id_membre($login);

		$isEntraineur = $this->Model_equipe->isEntraineur($idMembre);

		if($isEntraineur == 1){

			$this->load->view('templates/header');
			$this->load->view('entraineurs/entraineur_accueil', array('login' => $login, 'sport' => $spt, 'nomEquipe' => $nomEquipe));
			$this->load->view('templates/footer_membre');

		} else {

			$this->load->view('templates/header');
			$this->load->view('equipe/equipe_accueil', array('login' => $login, 'sport' => $spt, 'nomEquipe' => $nomEquipe));
			$this->load->view('templates/footer_membre');
		}
	}

	public function equipe(){

		$nomTeam=$_SESSION['nomEquipe'];

		$data = $this->Model_equipe->get_info_equipe($nomTeam);

		$sport = $data['Sport'];
		$logo = $data['Logo'];
		$ville = $data['Ville'];
		$mixite = $data['Mixite'];
		$description = $data['Description'];
		$loginAdmin = $data['LoginAdmin'];

		$idMembre = $this->Model_membres->get_id_membre($loginAdmin);
		$isEntraineur = $this->Model_equipe->isEntraineur($idMembre);

		if($isEntraineur == 1){

			$this->load->view('templates/header');
			$this->load->view('entraineurs/entraineur_profil', array('sport' => $sport, 'nomEquipe' => $_SESSION['nomEquipe'], 'logo' => $logo, 'ville' => $ville, 'mixite' => $mixite, 'description' => $description, 'loginAdmin' => $loginAdmin ) );
			$this->load->view('templates/footer_membre');

		} else {

			$this->load->view('templates/header');
			$this->load->view('equipe/equipe_profil', array('sport' => $sport, 'nomEquipe' => $_SESSION['nomEquipe'], 'logo' => $logo, 'ville' => $ville, 'mixite' => $mixite, 'description' => $description, 'loginAdmin' => $loginAdmin ) );
			$this->load->view('templates/footer_membre');
		}
	}


	public function quitter_equipe(){


	}

	public function supprimer_equipe(){

		$nomEquipe = $statut['nomEquipe'];
		$admin = $statut['admin'];
		$entraineur = $statut['entraineur'];

		if($admin == 1){

			$this->load->view('templates/header');
			$this->load->view('equipe/equipe_profil', array('sport' => $sport, 'nomEquipe' => $_SESSION['nomEquipe']) );
			$this->load->view('templates/footer_membre');

		} else {

			$msg_erreur = "Vous ne pouvez pas supprimer cette équipe : vous n'êtes pas l'administrateur.";

			$this->load->view('templates/header');
			$this->load->view('equipe/equipe_profil', array('sport' => $sport, 'nomEquipe' => $_SESSION['nomEquipe'], 'logo' => $logo, 'ville' => $ville, 'mixite' => $mixite, 'description' => $description, 'loginAdmin' => $loginAdmin, 'msg_erreur' => $msg_erreur ) );
			$this->load->view('templates/footer_membre');
		}
	}

	public function calendrier(){

		$login = $this->session->userdata('login');
		$nomTeam = $this->session->userdata('nomEquipe');

		$idMembre = $this->Model_membres->get_id_membre($login);
		$isEntraineur = $this->Model_equipe->isEntraineur($idMembre);
		$data = $this->Model_equipe->get_info_equipe($nomTeam);

		$sport = $data['Sport'];

		$prefs = array(
	        'start_day'    => 'sunday',
	        'month_type'   => 'long',
	        'day_type'     => 'short'
			);

			$this->load->library('calendar', $prefs);

			// Tests
			/*$data = array(
			        3  => 'http://example.com/news/article/2006/06/03/',
			        7  => 'http://example.com/news/article/2006/06/07/',
			        13 => 'http://example.com/news/article/2006/06/13/',
			        26 => 'http://example.com/news/article/2006/06/26/'
			);*/

		if($isEntraineur == 1){

			$this->load->view('templates/header');
			$this->load->view('entraineurs/entraineur_calendrier', array('sport' => $sport));//,'data' => $data) );
			$this->load->view('templates/footer_membre');

		} else {

			$this->load->view('templates/header');
			$this->load->view('equipe/equipe_calendrier', array('sport' => $sport));//,'data' => $data) );
			$this->load->view('templates/footer_membre');
		}
	}

	public function liste_membre(){

		$login = $this->session->userdata('login');

		$idMembre = $this->Model_membres->get_id_membre($login);
		$isEntraineur = $this->Model_equipe->isEntraineur($idMembre);

		$data = $this->Model_equipe->get_info_equipe($_SESSION['nomEquipe']);

		$sport = $data['Sport'];

		$membres = $this->Model_equipe->get_liste_membres($_SESSION['nomEquipe']);

		if($isEntraineur == 1){

			foreach ($membres as $membre) {

				$id = $this->Model_membres->get_id_membre($membre->LoginMembre);
				$membreEntraineur = $this->Model_equipe->isEntraineur($id);
				$membreAdmin = $this->Model_equipe->isAdmin($id);

			}

			$this->load->view('templates/header');
			$this->load->view('entraineurs/entraineur_liste_membre', array('sport' => $sport, 'membres' => $membres, 'isEntraineur' => $membreEntraineur, 'isAdmin' => $membreAdmin) );
			$this->load->view('templates/footer_membre');

		} else {

			foreach ($membres as $membre) {

				$id = $this->Model_membres->get_id_membre($membre->LoginMembre);

				$membreEntraineur = $this->Model_equipe->isEntraineur($id);

				$membreAdmin[] = $this->Model_equipe->isAdmin($id);

				foreach ($membreAdmin as $admin) {

					print_r($admin);

				}
			}

			$this->load->view('templates/header');
			$this->load->view('equipe/equipe_liste_membre', array('sport' => $sport, 'membres' => $membres, 'isEntraineur' => $membreEntraineur, 'isAdmin' => $admin) );
			$this->load->view('templates/footer_membre');
		}

	}

	public function evenements(){

		$sport = $this->session->userdata('sport');

		$this->load->view('templates/header');
		$this->load->view('equipe/equipe_event', array('sport' => $sport) );
		$this->load->view('templates/footer_membre');
	}

	public function ajouter_evenement(){

	}

	public function modifier_evenement(){

	}

	public function supprimer_evenement(){

	}
}

?>
