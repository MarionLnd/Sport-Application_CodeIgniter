<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_equipe extends CI_Model{

	public function __construct(){

		parent::__construct();
		$this->load->database();
	}

	public function creer_equipe($data){

		return $this->db->insert('Equipe', $data);

	}

	public function supprimer_equipe($nomEquipe){

		return $this->db->where('NomEquipe', $nomEquipe)->delete('Equipe');

	}

	public function supprimer_membre($login, $nomEquipe){

		$rq = "";

	}

	public function get_info_equipe($nomEquipe){

		$this->db->select('*')->from('Equipe')->where('nomEquipe', $nomEquipe);

		$query = $this->db->get();

		if($query->num_rows() == 1){

			$row = $query->row();

			$data['Logo'] = $row->Logo;
			$data['Sport'] = $row->Sport;
			$data['Ville'] = $row->Ville;
			$data['Mixite'] = $row->Mixite;
			$data['Description'] = $row->Description;
			$data['LoginAdmin'] = $row->LoginAdmin;

			return $data;

		} else {

			echo "JE FONCTIONNE PAS";
		}
	}

	public function get_sport($nomEquipe){

		$this->db->select('Sport')->from('Equipe')->where('NomEquipe', $nomEquipe);

		$query = $this->db->get();

		//$rq = $query->row();

		//echo $rq['Sport'];

		$rq = $query->result();

		return $rq;

	}

	public function get_equipe($login){

		$this->db->select('NomEquipe')->from('Equipe')->where('LoginMembre', $login);

		$query = $this->db->get();

		$rq = $query->result_array();

		return $rq;

	}

	public function verification_pwd($nomEquipe, $pwdEquipe){

		// Requête pour la selection des nom des équipes de la base de données
		$this->db->select('*')->from('Equipe')->where('NomEquipe', $nomEquipe);

		$query = $this->db->get();

		// Si le nom de l'équipe entré est dans la base de données
		if($query->num_rows() >= 1){

			$this->db->select('MdpInscrit','NomEquipe')->from('Equipe')->where('NomEquipe', $nomEquipe);

			$query = $this->db->get();

			// Si le mot de passe entré correspond à celui de la base de données
			if($query->num_rows() == 1){

				$rq = $query->row();

				$pwd = $rq->MdpInscrit;

				return $pwd;

			// Sinon, si le mot de passe n'est pas bon
			} else {

				return -2;

			}

		// Sinon, si le nom de l'équipe n'est pas bon
		} else {

			return -3;

		}
	}

	public function integrer_equipe($loginM, $nomEquipe){

		$this->db->select('*')->from('Equipe')->where('NomEquipe', $nomEquipe);

		$query = $this->db->get();

		// Si le mot de passe entré correspond à celui de la base de données
		if($query->num_rows() == 1){

			$data = array(
				'Login' => $loginM,
				'nomEquipe' => $nomEquipe,
				'isAdmin' => false,
				'isEntraineur' => false
				);

			echo "JE FONCTIONNE";

			return $this->db->insert('Membre', $data);

		// Sinon, si l'insertion ne s'est pas effectuée
		} else {

			echo "Mauvaise insertion";

			return -2;

		}

	}

	public function creer_admin($data){

		return $this->db->insert('Admin', $data);

	}


	// Obtention du login de l'admin
	public function get_admin($nomEquipe){

		$this->db->select('LoginAdmin')->from('Equipe')->where('NomEquipe', $nomEquipe);

		$query = $this->db->get();

		return $query->result();

		//SELECT loginAdmin FROM `Equipe` WHERE NomEquipe = 'DanceCrew'

		//SELECT Login FROM `Admin` WHERE NomEquipe

	}

	// Obtention du login de l'entraineur
	public function get_entraineur(){

		$this->db->select('Login')->from('Equipe')->where('NomEquipe', $nomEquipe);

		$query = $this->db->get();

		return $query->result();

		//SELECT Login FROM `Admin` WHERE NomEquipe

	}

	public function get_liste_membres($nomEquipe){

		$this->db->select('LoginMembre')->from('Equipe')->where('NomEquipe', $nomEquipe);

		$query = $this->db->get();

		return $query->result();

	}

	public function ajouter_membre($loginAI, $nomEquipe){



		/*INSERT INTO Invitations(LoginMembreInvite, LoginAdmin, nomEquipe) VALUES('LoginMI','LoginAdmin','NomEquipe');
			IF(QUERY == 1){
				INSERT INTO Membre (Login, nomEquipe) VALUES ('LoginMI', 'nomEquipe');
					/!\ FAIRE UN TRIGGER QUI AJOUTE LE LOGIN DU MEMBRE AJOUTE DANS LA TABLE EQUIPE
						ET UN AUTRE POUR GERER LA SUPPRESSION DES MEMBRES OU EQUIPES /!\
		*/

	}

	public function designer_entraineur($login){

	}

}
