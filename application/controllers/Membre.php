<?php

class Membre extends CI_Controller{

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

		$this->accueil();
	}

	public function accueil(){

		$login = $this->session->userdata('login');

		$this->load->view('templates/header');
		$this->load->view('membre/membre_accueil', array('login' => $login));
		$this->load->view('templates/footer_membre');
	}

	public function deconnexion(){

		//  Destroy the session
		$this->session->set_userdata('online', false);
		$this->session->sess_destroy();

		$this->load->view('templates/header_accueil');
		$this->load->view('user/user_accueil');
		$this->load->view('templates/footer');
	}

	public function creation_equipe(){

		$this->form_validation->set_rules('nomEquipe', "Nom de l'équipe", 'required|trim|min_length[3]|max_length[50]|is_unique[Equipe.NomEquipe]');
		$this->form_validation->set_rules('pwdEquipe', "Mot de passe de l'équipe", 'required|trim|min_length[3]|max_length[50]');
		$this->form_validation->set_rules('logo', '', 'required|trim|min_length[3]|max_length[50]');
		$this->form_validation->set_rules('sport', '', 'required|trim');
		$this->form_validation->set_rules('villeEquipe', "Ville de l'équipe", 'required|trim|min_length[3]|max_length[50]');
		$this->form_validation->set_rules('mixite', '', 'trim|exact_length[3]');
		$this->form_validation->set_rules('description', '', 'trim|min_length[1]|max_length[50]');

		$this->form_validation->set_message('is_unique', "Le nom de l'équipe a déjà été pris.");


		$config['upload_path'] = './assets/Images/uploads';
		$config['allowed_types'] = 'gif|jpg|png|svg|jpeg|ico';
		$config['max_size'] = 0;
		$config['max_width'] = 0;
		$config['max_height'] = 0;
		$config['min_width'] = 0;
		$config['min_height'] = 0;
		$config['remove_spaces'] = TRUE;

		if($this->form_validation->run() === FALSE){

			$this->load->view('templates/header');
			$this->load->view('membre/membre_creer_equipe');
			$this->load->view('templates/footer_membre');

		} else {

			$nomEquipe = $this->input->post('nomEquipe');
			$password = $this->input->post('pwdEquipe');
			$password = sha1($password);
			$logo = $this->input->post('logo');
			$sport = $this->input->post('sport');
			$villeEquipe = $this->input->post('villeEquipe');
			$mixite = $this->input->post('mixite');
			$description = $this->input->post('description');

			$loginAdmin = $this->session->userdata('login');

			$data = array(
				'nomEquipe' => $nomEquipe,
				'mdpInscrit' => $password,
				'logo' => $logo,
				'sport' => $sport,
				'ville' => $villeEquipe,
				'description' => $description,
				'mixite' => $mixite,
				'loginEquipeAdmin' => $loginAdmin
			);

			if($this->Model_equipe->creer_equipe($data)){

				$this->load->view('templates/header');
				$this->load->view('membre/membre_accueil');
				$this->load->view('templates/footer_membre');

				$idMembre = $this->Model_membres->get_id_membre($loginAdmin);

				echo $this->Model_membres->verification_membre($idMembre);

				if(!$this->Model_membres->verification_membre($idMembre)){

					$this->Model_membres->creer_login_membre($idMembre, $loginAdmin);
					$this->Model_membres->creer_membre($idMembre, $nomEquipe);
					$this->Model_membres->creer_login_admin($idMembre, $loginAdmin);
					$this->Model_membres->creer_admin($idMembre, $nomEquipe);

				} else {

					$this->Model_membres->creer_login_admin($idMembre, $loginAdmin);
					$this->Model_membres->creer_admin($idMembre, $nomEquipe);
				}

			} else {

				$tab['message_erreur'] = "Le formulaire n'est pas valide : le login est déja pris";

				$this->load->view('templates/header');
				$this->load->view('membre/membre_creer_equipe', $tab);
				$this->load->view('templates/footer_membre');
			}
		}
	}


	public function integration_equipe(){

		$idMembre = $this->Model_membres->get_id_membre($_SESSION['login']);

		$this->form_validation->set_rules('nomEquipe', "Nom de l'équipe", 'required|trim|min_length[3]|max_length[50]');
		$this->form_validation->set_rules('pwdEquipe', "Mot de passe de l'équipe", 'required|trim|min_length[3]|max_length[50]');


		if($this->form_validation->run() === FALSE){

			$this->load->view('templates/header');
			$this->load->view('membre/membre_join_equipe');
			$this->load->view('templates/footer_membre');

		} else {

			$nomEquipe = $this->input->post('nomEquipe');
			$pwdEquipe = $this->input->post('pwdEquipe');
			$pwdEquipe = sha1($pwdEquipe);

			$pwdBD = $this->Model_equipe->verification_pwd($nomEquipe, $pwdEquipe);

			// Bon mot de passe
			if($pwdBD == $pwdEquipe){

				$login = $_SESSION['login'];

				if($this->Model_membres->verification_membre($idMembre) == 0){

					$this->Model_membres->creer_login_membre($idMembre, $login);

				} else {

					if ($this->Model_equipe->integrer_equipe($idMembre, $login, $nomEquipe)) {

						$sport = $this->Model_equipe->get_sport($nomEquipe);

						redirect('Equipe/index');

					} else {

						echo "ERREUR";

						$this->load->view('templates/header');
						$this->load->view('membre/membre_join_equipe');
						$this->load->view('templates/footer_membre');
					}
				}

			// Mot de passe incorrect
				if ($pwdBD == -2) {

					$msg = "Le mot de passe est incorrect";
					$msg_erreur = array('msg_erreur' => $msg);

					$this->load->view('templates/header');
					$this->load->view('membre/membre_join_equipe', $msg_erreur);
					$this->load->view('templates/footer_membre');
				}

			// Nom de l'équipe inexistant
				if ($pwdBD == -3) {

					$msg = "Le nom d'équipe entré n'existe pas";
					$msg_erreur = array('msg_erreur' => $msg);

					$this->load->view('templates/header');
					$this->load->view('membre/membre_join_equipe', $msg_erreur);
					$this->load->view('templates/footer_membre');
				}
			/*

			} else {

				$tab['message_erreur'] = "Le formulaire n'est pas valide : le mot de passe n'est pas valide";

				$tab['message_erreur1'] = "Le formulaire n'est pas valide : l'equipe n'existe pas.";

				$this->load->view('templates/header');

				$this->load->view('membre/membre_join_equipe', $tab);

				//$this->load->view('templates/footer_membre');

			}*/
		}
	}


}


	// Fonctionnalité non testée
	/*public function demande_integration_equipe(){

		$this->form_validation->set_rules('nomEquipe', "Nom de l'équipe", 'required|trim|min_length[3]|max_length[50]');

		if($this->form_validation->run() === FALSE){

			$this->load->view('templates/header');

			$this->load->view('membre/membre_join_equipe');

			//$this->load->view('templates/footer_membre');

		} else {

			$nomEquipe = $this->input->post('nomEquipe');

			$listeEquipe = $this->Model_membres->get_equipes();

			//if(){

				$this->load->view('templates/header');

				$this->load->view('membre/membre_accueil', array('listeEquipe' => $listeEquipe));

				$message_validation = "Votre demande d'invitation a bien été envoyée.";

				//$this->load->view('templates/footer_membre');

			//} else {

				//$tab['message_erreur'] = "Le formulaire n'est pas valide : l'équipe n'existe pas.";

				//$this->load->view('templates/header');

				//$this->load->view('membre/membre_join_equipe', $tab);

				//$this->load->view('templates/footer_membre');

			//}
		}
	}*/


	public function profil(){

		$login = $this->session->userdata('login');

		$data = $this->Model_membres->get_info_membre($login);

		$prenom = $data['Prenom'];
		$nom = $data['Nom'];
		$mail = $data['Mail'];
		$avatar = $data['Avatar'];

		if ($avatar == NULL) {

		}

		$this->session->set_userdata('avatar', $avatar);

		$this->load->view('templates/header');
		$this->load->view('membre/membre_profil', array('prenom' => $prenom, 'nom' => $nom, 'mail' => $mail, 'avatar' => $avatar));
		$this->load->view('templates/footer_membre');
	}


	public function equipes(){

		$login = $this->session->userdata('login');

		$idMembre = $this->Model_membres->get_id_membre($login);
		$nbEquipes= $this->Model_membres->get_nb_equipes($idMembre);
		$nomTeam = $this->Model_equipe->get_equipe($idMembre);

		if($nbEquipes == 0){

			$this->load->view('templates/header');
			$this->load->view('membre/membre_pas_equipes');
			$this->load->view('templates/footer_membre');

		} else {

			$this->session->set_userdata('nomEquipe', $nomTeam);

			$data[] = $this->Model_equipe->get_info_equipe($nomTeam);

			$this->load->view('templates/header');
			$this->load->view('membre/membre_equipes',array('data' => $data, 'nomEquipe' => $nomTeam));
			$this->load->view('templates/footer_membre');
		}
	}


	public function invitations(){

		$login = $this->session->userdata('login');

		$nb_invitations = $this->Model_membres->get_invitations($login);
		$idAdmin = $this->Model_membres->get_id_admin($login);
		$membres = $this->Model_membres->get_membres();

		if($nb_invitations == 0){

			$this->load->view('templates/header');
			$this->load->view('membre/membre_pas_invitations');
			$this->load->view('templates/footer_membre');

		} else {

			if($idAdmin > 0){

				if($this->form_validation->run() === FALSE){

					$this->load->view('templates/header');
					$this->load->view('membre/membre_invitations_admin', array('nbMembre' => $membres));
					$this->load->view('templates/footer_membre');

				} else {

					$membres = $this->Model_membres->get_membres();

					$nomEquipe = $this->Model_membres->get_equipe_admin($idAdmin);

					$this->load->view('templates/header');
					$this->load->view('membre/membre_invitations_admin', array('nbMembre' => $membres, 'nomTeam' => $nomEquipe));
					$this->load->view('templates/footer_membre');

					$membre = $this->input->post('membre');
				}

			} else {

			$this->load->view('templates/header');
			$this->load->view('membre/membre_invitations'/*, array('nbInvitations' => $nb_invitations)*/);
			$this->load->view('templates/footer_membre');
		}
	}
}


public function gestion_compte(){

		/*$this->form_validation->set_rules('login', '', 'required|trim|min_length[1]|max_length[50]');

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
			}

			if ($pwdBD == -2) {

				$msg = "Le mot de passe est incorrect";
				$msg_erreur = array('msg_erreur' => $msg);

				$this->load->view('templates/header');
				$this->load->view('user/user_connexion', $msg_erreur);
			}*/


			$login = $this->session->userdata('login');
			$data = $this->Model_membres->get_info_membre($login);

			$prenom = $data['Prenom'];
			$nom = $data['Nom'];

			$this->load->view('templates/header');
			$this->load->view('membre/membre_profil_modification', array(/*'avatar' => $avatar, */'login' => $login, 'prenom' => $prenom,  'nom' => $nom));
			$this->load->view('templates/footer_membre');
		}

		public function supprimer_compte(){

			$this->Model_membres->supprimer_compte($this->session->userdata('login'));
			$this->accueil();
		}

		public function quitter_equipe(){

		}


	// Fonctionnalité non testée
		public function modifier_avatar(){

			$avatar = $this->session->userdata('avatar');

			$this->form_validation->set_rules('avatar', '', 'trim|xss_clean');


			$config['upload_path'] = './assets/Images/avatar';
			$config['allowed_types'] = 'gif|jpg|png|svg|jpeg|ico';
			$config['max_size'] = 0;
			$config['max_width'] = 0;
			$config['max_height'] = 0;
			$config['min_width'] = 0;
			$config['min_height'] = 0;
			$config['remove_spaces'] = TRUE;

			$this->load->library('upload');

			$this->upload->initialize($config);


			if (!$this->upload->do_upload('avatar')) {

				$error = array('error' => $this->upload->display_errors());

				die($this->upload->display_errors());

				$this->load->view('templates/header');
				$this->load->view('membre/membre_profil_modification', array('avatar' => $avatar), $error);
				$this->load->view('templates/footer_membre');

			} else {

				$data['avatar']=$_FILES['avatar']['name'];

				if($this->Model_membres->creer_user($data)){

					$this->load->view('templates/header');
					$this->load->view('membre/membre_profil_modification', array('avatar' => $avatar));
					$this->load->view('templates/footer_membre');

				} else {

					$this->load->view('templates/header');
					$this->load->view('membre/membre_profil_modification', array('avatar' => $avatar));
					$this->load->view('templates/footer_membre');
				}

			}

		}

	}

	?>
